<?php
class Temp_c extends My_Controller
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

		$students = $this->student_m->gets();

		$list = $this->temp_m->get_list();

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
			'temp_v/s4_list_v',
			array(
				'list' => $list
			)
		);
		$array_data  = [];

		$data = array(
			'name' => '홍길동',
			'age' => '12'
		);

		$array_data[] = $data;

		$data = array(
			'name' => '김춘향',
			'age' => '15'
		);

		$a = array("a" => "red", "b" => "green");

		$a = array_merge($a, array("c" => "blue"));
		$a = array_merge($a, array("d" => "yellow"));

		print_r($a);

		$array_data[] = $data;

		print_r($array_data);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'temp_v/s6_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'temp_v/s7_script_v',
			array()
		);
	}

	// create
	function add()
	{
		$new_id = $this->temp_m->add(
			array(
				'title' => '임시제목',
				'st_id' => '1',
				'st_name' => '학생이름'
			)
		);

		if (!$new_id) {
			alert("추가 실패했습니다.", site_url('/temp_c'));
		} else {

			alert("추가 성공했습니다.", site_url('/temp_c/get_detail/' . $new_id));
		}
	}

	// read list
	function ajax_list()
	{
		$data = $this->temp_m->get_list();
		echo json_encode($data);
	}

	function ajax_names()
	{
		// POST data
		$postData = $this->input->post();

		// Get data
		$data = $this->temp_m->get_names($postData);

		echo json_encode($data);
	}

	// read
	function get_detail($id)
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

		// 학생 한명 Data 로드하기 
		$data = $this->temp_m->get_detail($id);

		$this->load->view(
			'temp_v/s4_detail_v',
			array(
				'element' => $data
			)
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
			'temp_v/s6_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'temp_v/s7_script_v',
			array()
		);
	}

	// read
	function get_student_post()
	{
		$st_id = $this->input->post('search_id');

		if (empty($st_id)) {
			$st_id = $this->session->userdata('st_id');
		} else {
			$this->session->set_userdata('st_id', $st_id);
		}

		if (empty($st_id)) {
			alert('st_id의 값이 없습니다', site_url('/student2'));
		}

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

		// 학생 한명 Data 로드하기 
		$student = $this->student_m->get($st_id);
		if ($student) {
			$this->session->set_userdata('st_name', $student->name);
		} else {
			alert('해당하는 학생이 없습니다', site_url('/student2'));
		}

		$this->load->view(
			'student2/s4_student_detail_v',
			array(
				'student' => $student
			)
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
			'student2/s6_student2_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'student2/s7_student2_script_v',
			array()
		);
	}

	// update
	function st_modify()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->student_m->modify(
			array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				's_phone' => $this->input->post('s_phone'),
				'house' => $this->input->post('house'),
				'sibling_name' => $this->input->post('sibling_name'),

				'grade1' => $this->input->post('grade1'),
				'school_name' => $this->input->post('school_name'),
				'grade2' => $this->input->post('grade2'),
				'class_name' => $this->input->post('class_name'),

				'level1' => $this->input->post('level1'),
				'level2' => $this->input->post('level2'),
				'level3' => $this->input->post('level3'),

				'class_day1' => $this->input->post('class_day1'),
				'class_time1' => $this->input->post('class_time1'),
				'class_day2' => $this->input->post('class_day2'),
				'class_time2' => $this->input->post('class_time2'),
				'class_day3' => $this->input->post('class_day3'),
				'class_time3' => $this->input->post('class_time3'),

				'memo' => $this->input->post('memo'),
				'study_memo' => $this->input->post('study_memo'),
				'test_memo' => $this->input->post('test_memo'),
				'check_memo' => $this->input->post('check_memo'),
				'off_memo' => $this->input->post('off_memo'),

				'fees' => $this->input->post('fees'),
				'discount1' => $this->input->post('discount1'),
				'discount2' => $this->input->post('discount2'),
				'discount_memo' => $this->input->post('discount_memo'),
				'receipt_phone' => $this->input->post('receipt_phone'),
				'receipt_use' => $this->input->post('receipt_use'),

				'flag' => $this->input->post('flag'),
				'status' => $this->input->post('status'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),

				'report_short_memo' => $this->input->post('report_short_memo'),
				'report_date' => $this->input->post('report_date'),
				'report_type' => $this->input->post('report_type')
			)
		);

		if (!$result) {
			alert("st 업데이트가 실패했습니다.", site_url('/student2/get_student/' . $st_id));
		} else {

			//$this->modal_feedback('success', 'Success', '학생 정보 업데이트가 성공했습니다.', 'OK');
			alert("st 업데이트가 성공했습니다.", site_url('/student2/get_student/' . $this->input->post('id')));
		}
	}

	function st_delete()
	{
		$student_id = $this->input->post('student_id');

		$this->student_m->delete($student_id);
		$this->session->set_userdata('st_id', '');

		redirect(site_url('/student2'));
	}
}
