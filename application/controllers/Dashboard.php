<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	// 기본 생성자
	function __construct()
	{
		parent::__construct();

		$this->load->view('common/head_v');

		$this->_require_login(site_url('/dashboard'), 10);

		$this->load->model('student_m');
		$this->load->model('test_history_m');
		$this->load->model('dashboard_m');
		$this->load->model('payment_m');
	}

	// Default 컨트롤러
	public function index()
	{
		redirect(site_url('/dashboard/st_summary'));
	}

	// 학생 현황 요약 컨트롤러 start
	function st_summary()
	{
		$students = $this->dashboard_m->st_gets();

		$this->load->view('dashboard/header_v');
		$this->load->view(
			'dashboard/sidebar_v',
			array(
				'students' => $students
			)
		);

		$st_count_h1 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '고등',
				'grade2' => '1'
			)
		);
		$st_count_h2 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '고등',
				'grade2' => '2'
			)
		);
		$st_count_h3 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '고등',
				'grade2' => '3'
			)
		);
		$st_count_m1 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '중등',
				'grade2' => '1'
			)
		);
		$st_count_m2 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '중등',
				'grade2' => '2'
			)
		);
		$st_count_m3 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '중등',
				'grade2' => '3'
			)
		);
		$st_count_e3 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '초등',
				'grade2' => '3'
			)
		);
		$st_count_e4 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '초등',
				'grade2' => '4'
			)
		);
		$st_count_e5 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '초등',
				'grade2' => '5'
			)
		);
		$st_count_e6 = $this->dashboard_m->st_get_count_option(
			array(
				'grade1' => '초등',
				'grade2' => '6'
			)
		);
		$st_count_h = $this->dashboard_m->st_get_count('고등');
		$st_count_m = $this->dashboard_m->st_get_count('중등');
		$st_count_e = $this->dashboard_m->st_get_count('초등');

		$st_fees_sum_h = $this->dashboard_m->st_get_fees_sum('고등');
		$st_fees_sum_m = $this->dashboard_m->st_get_fees_sum('중등');
		$st_fees_sum_e = $this->dashboard_m->st_get_fees_sum('초등');

		// payment load 
		$payment_list = $this->payment_m->select_st_payment_by_option(
			array(
				'p.year' => '2021년',
				'p.month' => '12월'
			)
		);

		$this->load->view(
			'dashboard/st_summary_v',
			array(
				'students' => $students,
				'st_count_h1' => $st_count_h1,
				'st_count_h2' => $st_count_h2,
				'st_count_h3' => $st_count_h3,
				'st_count_h' => $st_count_h,
				'st_count_m1' => $st_count_m1,
				'st_count_m2' => $st_count_m2,
				'st_count_m3' => $st_count_m3,
				'st_count_m' => $st_count_m,
				'st_count_e3' => $st_count_e3,
				'st_count_e4' => $st_count_e4,
				'st_count_e5' => $st_count_e5,
				'st_count_e6' => $st_count_e6,
				'st_count_e' => $st_count_e,
				'st_fees_sum_h' => $st_fees_sum_h,
				'st_fees_sum_m' => $st_fees_sum_m,
				'st_fees_sum_e' => $st_fees_sum_e,
				'payment_list' => $payment_list
			)
		);
		// footer
		$this->load->view('common/footer_v');
	}

	// Dashboard 상세화면 컨트롤러
	function dashboard_get($st_id)
	{
		if (empty($st_id)) {
			$st_id = $this->session->userdata('st_id');
		} else {
			$this->session->set_userdata('st_id', $st_id);
		}

		if (empty($st_id)) {
			alert('st_id의 값이 없습니다', site_url('/dashboard'));
		}

		// 학생들 Data 가져오기 
		$students = $this->student_m->gets();

		// 위 메뉴 헤더 화면 로드하기
		$this->load->view('dashboard/header_v');

		// 왼쪽 사이드바 화면 로드하기
		$this->load->view(
			'dashboard/sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->helper(array('HTML', 'korean'));

		// 학생 한명 Data 로드하기 
		$student = $this->dashboard_m->st_get($st_id);
		if ($student) {
			$this->session->set_userdata('st_name', $student->name);
		}
		// 학생 테스트들 Data 로드하기 
		$tests = $this->dashboard_m->test_gets($st_id);

		// 학생 학습 시간 Data 로드하기
		$schedules = $this->dashboard_m->schedule_gets($st_id);

		// 학생 진도 Data 로드하기
		$studys = $this->dashboard_m->study_gets($st_id);

		// 학생 메모 Data 로드하기
		$memos_book = $this->dashboard_m->memo_gets(array(
			'st_id' => $st_id,
			'type' => 'bookm'
		));

		$memos_noshow = $this->dashboard_m->memo_gets(array(
			'st_id' => $st_id,
			'type' => 'noshow'
		));

		$memos_check = $this->dashboard_m->memo_gets(array(
			'st_id' => $st_id,
			'type' => 'checkm'
		));

		// main 
		$this->load->view('dashboard/dashboard_v', array(
			'student' => $student,
			'tests' => $tests,
			'schedules' => $schedules,
			'memos_book' => $memos_book,
			'memos_noshow' => $memos_noshow,
			'memos_check' => $memos_check,
			'studys' => $studys,
		));

		// footer
		$this->load->view('common/footer_v');
	}

	// 대시보드 상세화면 컨트롤러 end


	// 학습 진도 체크 모두보기 상세화면 컨트롤러
	function study_get($st_id = null)
	{
		if (empty($st_id)) {
			$st_id = $this->session->userdata('st_id');
		} else {
			$this->session->set_userdata('st_id', $st_id);
		}

		if (empty($st_id)) {
			alert('st_id의 값이 없습니다', site_url('/dashboard'));
		}

		// 학생들 Data 가져오기 
		$students = $this->student_m->gets();

		// 위 메뉴 헤더 화면 로드하기
		$this->load->view('dashboard/header_v');

		// 왼쪽 사이드바 화면 로드하기
		$this->load->view(
			'dashboard/sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->helper(array('HTML', 'korean'));

		// 학생 한명 Data 로드하기 
		$student = $this->dashboard_m->st_get($st_id);

		// 학생 진도 Data 로드하기
		$studys = $this->dashboard_m->study_gets($st_id);

		// main 
		$this->load->view('dashboard/study_v', array(
			'student' => $student,
			'studys' => $studys
		));

		// footer
		$this->load->view('dashboard/footer_v');
	}

	// 진도 리스트 화면 컨트롤러 end

	// 학습 진도 체크 모두보기 상세화면 컨트롤러
	function test_get($st_id = null)
	{
		if (empty($st_id)) {
			$st_id = $this->session->userdata('st_id');
		} else {
			$this->session->set_userdata('st_id', $st_id);
		}

		if (empty($st_id)) {
			alert('st_id의 값이 없습니다', site_url('/dashboard'));
		}

		// 학생들 Data 가져오기 
		$students = $this->student_m->gets();

		// 위 메뉴 헤더 화면 로드하기
		$this->load->view('dashboard/header_v');

		// 왼쪽 사이드바 화면 로드하기
		$this->load->view(
			'dashboard/sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->helper(array('HTML', 'korean'));

		// 학생 한명 Data 로드하기 
		$student = $this->dashboard_m->st_get($st_id);

		// 학생 진도 Data 로드하기
		$tests = $this->dashboard_m->test_gets($st_id);

		// main 
		$this->load->view('dashboard/test_v', array(
			'student' => $student,
			'tests' => $tests
		));

		// footer
		$this->load->view('dashboard/footer_v');
	}

	// 진도 리스트 화면 컨트롤러 end


	function st_add()
	{
		$new_st_id = $this->dashboard_m->st_add(
			array(
				'name' => $this->input->post('name'),
				'class_name' => $this->input->post('class_name'),
			)
		);

		if (!$new_st_id) {
			alert("학생 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $this->session->userdata('st_id')));
		} else {

			alert("학생 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $new_st_id));
		}
	}

	// 학생 수정 컨트롤러
	function st_modify()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->st_modify(
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
				'report_last_date' => $this->input->post('report_last_date')
			)
		);

		if (!$result) {
			alert("st 업데이트가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("st 업데이트가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('id')));
		}
	}

	function st_delete()
	{
		$student_id = $this->input->post('student_id');

		$this->dashboard_m->st_delete($student_id);
		$this->session->set_userdata('st_id', '');
		redirect(site_url('/dashboard'));
	}

	// 스케줄 추가 컨트롤러
	function schedule_add()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->schedule_add(
			array(
				'st_id' => $st_id
			)
		);

		if (!$result) {
			alert("schedule 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("schedule 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}

	// 스케줄 수정 컨트롤러
	function schedule_modify()
	{
		$result = $this->dashboard_m->schedule_modify(
			array(
				'id' => $this->input->post('id'),
				'st_id' => $this->input->post('st_id'),
				'mon_s' => $this->input->post('mon_s'),
				'tue_s' => $this->input->post('tue_s'),
				'wed_s' => $this->input->post('wed_s'),
				'thr_s' => $this->input->post('thr_s'),
				'fri_s' => $this->input->post('fri_s'),
				'sat_s' => $this->input->post('sat_s'),
				'sun_s' => $this->input->post('sun_s'),
				'time_per_week' => $this->input->post('time_per_week'),
				's_date' => $this->input->post('s_date'),
				'e_date' => $this->input->post('e_date')
			)
		);

		if (!$result) {
			alert("업데이트가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('st_id')));
		} else {
			alert("업데이트가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('st_id')));
		}
	}

	// 삭제 컨트롤러
	function schedule_delete($schedule_id)
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->schedule_delete($schedule_id);

		if (!$result) {
			alert("schedule 삭제 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("schedule 삭제 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}
	// 스케줄 컨트롤러 end

	// 메모 컨트롤러 start
	// 추가 컨트롤러
	function memo_add($type)
	{
		$st_id = $this->session->userdata('st_id');

		if (!$type) {

			alert("메모 타입 구분이 없습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}

		$result = $this->dashboard_m->memo_add(
			array(
				'st_id' => $st_id,
				'type' => $type,
				'seq' => '1-1'
			)
		);

		if ($type == "noshow") {
			if (!$result) {
				alert("지각결석메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("지각결석메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		} elseif ($type == "checkm") {
			if (!$result) {
				alert("지적사항메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("지적사항메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		} elseif ($type == "bookm") {
			if (!$result) {
				alert("교재메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("교재메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		}
	}

	// 메모 컨트롤러 start
	// 추가 컨트롤러
	function memo_add3($type)
	{
		$st_id = $this->session->userdata('st_id');

		if (!$type) {

			alert("메모 타입 구분이 없습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}

		if ($type == "noshow") {
			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			if (!$result) {
				alert("지각결석메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("지각결석메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		} elseif ($type == "checkm") {
			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
				)
			);

			if (!$result) {
				alert("지적사항메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("지적사항메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		} elseif ($type == "bookm") {

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
					'seq' => '1-1'
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
					'seq' => '2-1'
				)
			);

			$result = $this->dashboard_m->memo_add(
				array(
					'st_id' => $st_id,
					'type' => $type,
					'seq' => '3-1'
				)
			);

			if (!$result) {
				alert("교재메모 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			} else {
				alert("교재메모 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
			}
		}
	}

	// 수정 컨트롤러
	function memo_modify()
	{
		$st_id = $this->session->userdata('st_id');
		$result = $this->dashboard_m->memo_modify(
			array(
				'id' => $this->input->post('id'),
				'st_id' => $this->input->post('st_id'),
				'memo' => $this->input->post('memo'),
				'seq' => $this->input->post('seq'),
				'm_date' => $this->input->post('m_date'),
				'f_memo' => $this->input->post('f_memo'),
				'f_date' => $this->input->post('f_date'),
				'status' => $this->input->post('status'),
			)
		);

		/* 		if (!$result) {
			alert("메모 업데이트가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id) );
		} else {
			alert("메모 업데이트가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('st_id')));
		} */
	}

	// 삭제 컨트롤러
	function memo_delete($memo_id)
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->memo_delete($memo_id);

		if (!$result) {
			alert("메모 삭제 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("메모 삭제 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}
	// 메모 컨트롤러 end

	// 테스트 컨트롤러 start
	// 추가 컨트롤러
	function test_add()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->test_add(
			array(
				'st_id' => $st_id
			)
		);

		if (!$result) {
			alert("테스트 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("테스트 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}

	// 수정 컨트롤러
	function test_modify()
	{
		$st_id = $this->session->userdata('st_id');
		$memo = ltrim($this->input->post('memo'));

		$result = $this->dashboard_m->test_modify(
			array(
				'id' => $this->input->post('id'),
				'st_id' => $this->input->post('st_id'),
				'grade' => $this->input->post('grade'),
				'type' => $this->input->post('type'),
				'level' => $this->input->post('level'),
				'gubun1' => $this->input->post('gubun1'),
				'gubun2' => $this->input->post('gubun2'),
				'gubun3' => $this->input->post('gubun3'),
				'open' => $this->input->post('open'),
				'test_name' => $this->input->post('test_name'),
				'corrt_num' => $this->input->post('corrt_num'),
				'total_num' => $this->input->post('total_num'),
				'score' => $this->input->post('score'),
				'time' => $this->input->post('time'),
				'result' => $this->input->post('result'),
				'test_date' => $this->input->post('test_date'),
				'memo' => $memo
			)
		);

		if (!$result) {
			alert("테스트 업데이트가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("테스트 업데이트가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('st_id')));
		}
	}

	// 삭제 컨트롤러
	function test_delete($test_id)
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->test_delete($test_id);

		if (!$result) {
			alert("테스트 삭제 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("테스트 삭제 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}
	// 테스트 컨트롤러 end

	// 학습이력 컨트롤러 start
	// 추가 컨트롤러
	function study_add()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->study_add(
			array(
				'st_id' => $st_id,
				'category' => '현행심화',
				'seq' => '3-1'
			)
		);

		$result = $this->dashboard_m->study_add(
			array(
				'st_id' => $st_id,
				'category' => '개념선행',
				'seq' => '2-1'
			)
		);

		$result = $this->dashboard_m->study_add(
			array(
				'st_id' => $st_id,
				'category' => '연산선행',
				'seq' => '1-1'
			)
		);

		if (!$result) {
			alert("학습이력 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("학습이력 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}

	// 추가 컨트롤러
	function study_add1()
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->study_add(
			array(
				'st_id' => $st_id,
				'category' => '현행심화',
				'seq' => '0'
			)
		);

		if (!$result) {
			alert("학습이력 추가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("학습이력 추가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}

	// 수정 컨트롤러
	function study_modify()
	{
		$st_id = $this->session->userdata('st_id');
		$result = $this->dashboard_m->study_modify(
			array(
				'id' => $this->input->post('id'),
				'st_id' => $this->input->post('st_id'),
				'seq' => $this->input->post('seq'),
				'category' => $this->input->post('category'),
				'open' => $this->input->post('open'),

				'period' => $this->input->post('period'),
				'course' => $this->input->post('course'),
				'book' => $this->input->post('book'),
				'period' => $this->input->post('period'),
				'count_chap' => $this->input->post('count_chap'),

				's_chap1' => $this->input->post('s_chap1'),
				's_chap2' => $this->input->post('s_chap2'),
				's_chap3' => $this->input->post('s_chap3'),
				's_chap4' => $this->input->post('s_chap4'),
				's_chap5' => $this->input->post('s_chap5'),
				's_chap6' => $this->input->post('s_chap6'),
				's_chap7' => $this->input->post('s_chap7'),
				's_chap8' => $this->input->post('s_chap8'),
				's_chap9' => $this->input->post('s_chap9'),
				's_chap10' => $this->input->post('s_chap10'),
				's_chap11' => $this->input->post('s_chap11'),
				's_chap12' => $this->input->post('s_chap12'),
				's_chap13' => $this->input->post('s_chap13'),

				'e_chap1' => $this->input->post('e_chap1'),
				'e_chap2' => $this->input->post('e_chap2'),
				'e_chap3' => $this->input->post('e_chap3'),
				'e_chap4' => $this->input->post('e_chap4'),
				'e_chap5' => $this->input->post('e_chap5'),
				'e_chap6' => $this->input->post('e_chap6'),
				'e_chap7' => $this->input->post('e_chap7'),
				'e_chap8' => $this->input->post('e_chap8'),
				'e_chap9' => $this->input->post('e_chap9'),
				'e_chap10' => $this->input->post('e_chap10'),
				'e_chap11' => $this->input->post('e_chap11'),
				'e_chap12' => $this->input->post('e_chap12'),
				'e_chap13' => $this->input->post('e_chap13'),

				't_chap1' => $this->input->post('t_chap1'),
				't_chap2' => $this->input->post('t_chap2'),
				't_chap3' => $this->input->post('t_chap3'),
				't_chap4' => $this->input->post('t_chap4'),
				't_chap5' => $this->input->post('t_chap5'),
				't_chap6' => $this->input->post('t_chap6'),
				't_chap7' => $this->input->post('t_chap7'),
				't_chap8' => $this->input->post('t_chap8'),
				't_chap9' => $this->input->post('t_chap9'),
				't_chap10' => $this->input->post('t_chap10'),
				't_chap11' => $this->input->post('t_chap11'),
				't_chap12' => $this->input->post('t_chap12'),
				't_chap13' => $this->input->post('t_chap13')
			)
		);

		if (!$result) {
			alert("학습이력 업데이트가 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("학습이력 업데이트가 성공했습니다.", site_url('/dashboard/dashboard_get/' . $this->input->post('st_id')));
		}
	}

	// 수정 컨트롤러
	function study_modify1()
	{
		$st_id = $this->session->userdata('st_id');
		$result = $this->dashboard_m->study_modify(
			array(
				'id' => $this->input->post('id'),
				'st_id' => $this->input->post('st_id'),
				'seq' => $this->input->post('seq'),
				'category' => $this->input->post('category'),
				'open' => $this->input->post('open'),

				'period' => $this->input->post('period'),
				'course' => $this->input->post('course'),
				'book' => $this->input->post('book'),
				'period' => $this->input->post('period'),
				'count_chap' => $this->input->post('count_chap'),

				's_chap1' => $this->input->post('s_chap1'),
				's_chap2' => $this->input->post('s_chap2'),
				's_chap3' => $this->input->post('s_chap3'),
				's_chap4' => $this->input->post('s_chap4'),
				's_chap5' => $this->input->post('s_chap5'),
				's_chap6' => $this->input->post('s_chap6'),
				's_chap7' => $this->input->post('s_chap7'),
				's_chap8' => $this->input->post('s_chap8'),
				's_chap9' => $this->input->post('s_chap9'),
				's_chap10' => $this->input->post('s_chap10'),
				's_chap11' => $this->input->post('s_chap11'),
				's_chap12' => $this->input->post('s_chap12'),
				's_chap13' => $this->input->post('s_chap13'),

				'e_chap1' => $this->input->post('e_chap1'),
				'e_chap2' => $this->input->post('e_chap2'),
				'e_chap3' => $this->input->post('e_chap3'),
				'e_chap4' => $this->input->post('e_chap4'),
				'e_chap5' => $this->input->post('e_chap5'),
				'e_chap6' => $this->input->post('e_chap6'),
				'e_chap7' => $this->input->post('e_chap7'),
				'e_chap8' => $this->input->post('e_chap8'),
				'e_chap9' => $this->input->post('e_chap9'),
				'e_chap10' => $this->input->post('e_chap10'),
				'e_chap11' => $this->input->post('e_chap11'),
				'e_chap12' => $this->input->post('e_chap12'),
				'e_chap13' => $this->input->post('e_chap13'),

				't_chap1' => $this->input->post('t_chap1'),
				't_chap2' => $this->input->post('t_chap2'),
				't_chap3' => $this->input->post('t_chap3'),
				't_chap4' => $this->input->post('t_chap4'),
				't_chap5' => $this->input->post('t_chap5'),
				't_chap6' => $this->input->post('t_chap6'),
				't_chap7' => $this->input->post('t_chap7'),
				't_chap8' => $this->input->post('t_chap8'),
				't_chap9' => $this->input->post('t_chap9'),
				't_chap10' => $this->input->post('t_chap10'),
				't_chap11' => $this->input->post('t_chap11'),
				't_chap12' => $this->input->post('t_chap12'),
				't_chap13' => $this->input->post('t_chap13')
			)
		);

		if (!$result) {
			alert("학습이력 업데이트가 실패했습니다.", site_url('/dashboard/study_get/' . $st_id));
		} else {
			alert("학습이력 업데이트가 성공했습니다.", site_url('/dashboard/study_get/' . $this->input->post('st_id')));
		}
	}

	// 삭제 컨트롤러
	function study_delete($memo_id)
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->study_delete($memo_id);

		if (!$result) {
			alert("학습이력 삭제 실패했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		} else {
			alert("학습이력 삭제 성공했습니다.", site_url('/dashboard/dashboard_get/' . $st_id));
		}
	}
	// 학습이력 컨트롤러 end

	// 삭제 컨트롤러
	function study_delete1($memo_id)
	{
		$st_id = $this->session->userdata('st_id');

		$result = $this->dashboard_m->study_delete($memo_id);

		if (!$result) {
			alert("학습이력 삭제 실패했습니다.", site_url('/dashboard/study_get/' . $st_id));
		} else {
			alert("학습이력 삭제 성공했습니다.", site_url('/dashboard/study_get/' . $st_id));
		}
	}
	// 학습이력 컨트롤러 end

	// 환경설정 컨트롤러 start
	// 추가 컨트롤러
	function setting_add($type)
	{
		if (!$type) {
			alert("세팅 타입 구분이 없습니다.", site_url('/dashboard/setting_get'));
		}

		$result = $this->dashboard_m->setting_add(
			array(
				'st_id' => '',
				'type' => $type
			)
		);

		if ($type == "global") {
			if (!$result) {
				alert("global 세팅 추가 실패했습니다.", site_url('/dashboard/setting_get'));
			} else {
				alert("global 세팅 추가 성공했습니다.", site_url('/dashboard/setting_get'));
			}
		} else {
			if (!$result) {
				alert("세팅 추가 실패했습니다.", site_url('/dashboard/setting_get'));
			} else {
				alert("세팅 추가 성공했습니다.", site_url('/dashboard/setting_get'));
			}
		}
	}

	// 세팅 상세화면 컨트롤러
	function setting_get()
	{
		// 학생들 Data 가져오기 
		$students = $this->student_m->gets();

		// 위 메뉴 헤더 화면 로드하기
		$this->load->view('dashboard/header_v');

		// 왼쪽 사이드바 화면 로드하기
		$this->load->view(
			'dashboard/sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->helper(array('HTML', 'korean'));

		// 환경설정 Data 로드하기
		$settings = $this->dashboard_m->setting_gets();

		// main 
		$this->load->view(
			'dashboard/setting_v',
			array(
				'settings' => $settings
			)
		);

		// footer
		$this->load->view('dashboard/footer_v');
	}

	// 수정 컨트롤러
	function setting_modify()
	{

		$result = $this->dashboard_m->setting_modify(
			array(
				'id' => $this->input->post('id'),
				'type' => $this->input->post('type'),
				'gubun1' => $this->input->post('gubun1'),
				'gubun2' => $this->input->post('gubun2'),
				'key' => $this->input->post('key'),
				'value' => $this->input->post('value'),
				'description' => $this->input->post('description'),
			)
		);

		if (!$result) {
			alert("설정 업데이트가 실패했습니다.", site_url('/dashboard/setting_get'));
		} else {
			alert("설정 업데이트가 성공했습니다.", site_url('/dashboard/setting_get'));
		}
	}

	// 삭제 컨트롤러
	function setting_delete($setting_id)
	{

		$result = $this->dashboard_m->setting_delete($setting_id);

		if (!$result) {
			alert("세팅 삭제 실패했습니다.", site_url('/dashboard/setting_get'));
		} else {
			alert("세팅 삭제 성공했습니다.", site_url('/dashboard/setting_get'));
		}
	}
	// 환경설정 컨트롤러 end

	// test data
	function test_data()
	{
		$data = $this->dashboard_m->test_list();
		echo json_encode($data);
	}
}
