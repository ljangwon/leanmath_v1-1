<?php
class Ajax_common_c extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('ajax_common_c'), 10);

		$this->load->model('student_m');
	}

	function index()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$students = $this->student_m->gets();

		$this->load->view(
			'common/s2_sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		$this->load->view(
			'common/s4_blank_v',
			array()
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);
	}

	function ajax_get_session_student()
	{
		$st_id = $this->session->userdata('st_id');
		$st_name = $this->session->userdata('st_name');

		$data['st_id'] = $st_id;
		$data['st_name'] = $st_name;

		echo json_encode($data);
	}

	function ajax_set_session_student()
	{
		$st_id = $this->input->post('st_id');
		$st_name = $this->input->post('st_name');

		$this->session->set_userdata('st_id', $st_id);
		$this->session->set_userdata('st_name', $st_name);

		// $data = array();
		// $row_arr['st_id'] = $st_id;
		// $row_arr['st_name'] = $st_name;
		// array_push($data, $row_arr);

		$data = array();
		$data['st_id'] = $st_id;
		$data['st_name'] = $st_name;

		echo json_encode($data);
	}

	function ajax_get_st_name_by_st_id()
	{
		$st_id = $this->input->post('st_id');

		// Get data
		$data = array();

		$row = $this->student_m->get_st_name_by_st_id($st_id);

		$data['st_name'] = $row->name;

		echo json_encode($data);
	}

	function ajax_get_student_by_grade()
	{
		$grade = $this->input->post('grade');

		// Get data
		$data = $this->student_m->get_student_by_grade($grade);

		echo json_encode($data);
	}
}
