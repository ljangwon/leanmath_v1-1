<?php
class Temp_table_c extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		//		$this->_require_login(site_url('temp_c'), 10);

		$this->load->model('student_m');

		$this->load->model('temp_m');
	}

	function index()
	{
		$this->get_list();
	}

	function get_list()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$this->load->view(
			'temp_table/s1_head_v',
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
			'temp_table/s4_blank_v',
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

		$this->load->view(
			'temp_table/s7_script_v',
			array()
		);

		// $this->load->view(
		// 	'temp_table/example_v',
		// 	array()
		// );
	}
}
