<?php
class Main_test_c extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('main_test_c'), 10);

		$this->load->model('student_m');
		$this->load->model('main_test_m');
	}

	function index()
	{
		$this->view_list();
	}

	function ajax_get_list_all()
	{
		// POST data
		//$postData = $this->input->post();

		// Get data
		$data = $this->main_test_m->get_list()->result();

		echo json_encode($data);
	}

	function ajax_add()
	{
		$a = null;

		$a = array(
			'st_id' => $this->input->post('st_id')
		);

		if ($p = $this->input->post('course_cat')) {
			$a = array_merge(
				$a,
				array('course_cat' => $p)
			);
		}

		if ($p = $this->input->post('course_grade')) {
			$a = array_merge(
				$a,
				array('course_grade' => $p)
			);
		}

		if ($p = $this->input->post('book_name')) {
			$a = array_merge(
				$a,
				array('book_name' => $p)
			);
		}

		$data = $this->main_test_m->add($a);

		echo json_encode($data);
	}

	function ajax_get_list_by_st_id($params)
	{
		// POST data
		//$postData = $this->input->post();
		$param_arr = explode(':', $params);

		// Get data
		$data = $this->main_test_m->get_list_by_st_id(
			array(
				'st_id' => $param_arr[0],
				'show_flag' => $param_arr[1]
			)
		)->result();

		echo json_encode($data);
	}

	function ajax_get_detail_list_all()
	{
		// POST data
		//$postData = $this->input->post();

		// Get data
		$data = $this->main_test_m->get_test_detail_list();

		echo json_encode($data);
	}

	function ajax_modify()
	{
		$a = null;

		$a = array(
			'id' => $this->input->post('id')
		);

		if ($p = $this->input->post('st_id')) {
			$a = array_merge(
				$a,
				array('st_id' => $p)
			);
		}

		if (($p = $this->input->post('show_flag')) != null) {

			$a = array_merge(
				$a,
				array('show_flag' => $p)
			);
		}

		if ($p = $this->input->post('course_cat')) {
			$a = array_merge(
				$a,
				array('course_cat' => $p)
			);
		}

		if ($p = $this->input->post('course_grade')) {
			$a = array_merge(
				$a,
				array('course_grade' => $p)
			);
		}

		if ($p = $this->input->post('book_name')) {
			$a = array_merge(
				$a,
				array('book_name' => $p)
			);
		}

		if ($p = $this->input->post('start_date')) {
			$a = array_merge(
				$a,
				array('start_date' => $p)
			);
		}

		if ($p = $this->input->post('end_date')) {
			$a = array_merge(
				$a,
				array('end_date' => $p)
			);
		}

		$data = $this->main_test_m->modify($a);

		echo json_encode($data);
	}

	function ajax_delete()
	{
		$data = $this->main_test_m->delete(
			$this->input->post('id')
		);

		echo json_encode($data);
	}

	function view_list()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$this->load->view(
			'main_test/s1_head_v',
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
			'main_test/s4_list_v',
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
			'main_test/s6_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'main_test/s7_script_v',
			array()
		);
	}
}