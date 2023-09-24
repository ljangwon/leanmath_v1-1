<?php
class Fi_investment_c extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('fi_investment_c'), 10);

		$this->load->model('student_m');

		$this->load->model('fi_investment_m');
	}

	function index()
	{
		$this->get_list();
	}

	function ajax_get_list()
	{
		// POST data
		//$postData = $this->input->post();

		// Get data
		$data = $this->study_m->get_list();

		echo json_encode($data);
	}

	function ajax_add()
	{
		$data = $this->study_m->add(
			array(
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name')
			)
		);
		$this->session->set_flashdata('msg', '회원가입에 성공했습니다.');
		echo json_encode($data);
	}

	function ajax_delete()
	{
		$this->load->model('study_m');
		$data = $this->study_m->delete(
			$this->input->post('id')
		);

		echo json_encode($data);
	}

	function ajax_modify()
	{
		$data = $this->study_m->modify(
			array(
				'id' => $user->id,
				'email' => $user->email,
				'password' => $hash
			)
		);

		echo json_encode($data);
	}

	function get_list()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$this->load->view(
			'study/s1_head_v',
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
			'study/s4_user_list_v',
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
			'study/s6_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'study/s7_script_v',
			array()
		);
	}
}
