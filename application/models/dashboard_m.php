<?php
class Dashboard_m extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	// 학생정보 CRUD start 
	function st_add($option)
	{
		$this->db->set('workspace', $this->session->userdata('workspace'));
		$this->db->set($option);

		$this->db->insert('student');
		$st_id = $this->db->insert_id();
		return $st_id;
	}

	function st_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('status', 'ASC');
		$this->db->order_by('class_name', 'ASC');
		$this->db->order_by('grade1', 'DESC');
		$this->db->order_by('grade2', 'ASC');

		$this->db->where('flag', 1);
		$this->db->where('workspace', $this->session->userdata('workspace'));
		$this->db->where('status', '재원');
		if ($option) {
			$this->db->where('grade1', $option);
		}
		$result = $this->db->get('student')->result();;

		return $result;
	}

	function st_gets_today($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('status', 'ASC');
		$this->db->order_by('class_name', 'ASC');
		$this->db->order_by('grade1', 'DESC');
		$this->db->order_by('grade2', 'ASC');

		$this->db->where('flag', 1);
		$this->db->where('workspace', $this->session->userdata('workspace'));
		$this->db->where('status', '재원');
		if ($option) {
			$this->db->where('class_day1', $option);
			$this->db->or_where('class_day2', $option);
			$this->db->or_where('class_day3', $option);
		}

		$result = $this->db->get('student')->result();;
		return $result;
	}

	function st_get($student_id)
	{
		$this->db->select('*');

		$this->db->where(array(
			'flag' => '1',
			'workspace' => $this->session->userdata('workspace'),
		));
		$result = $this->db->where('id', $student_id);
		$result = $this->db->get('student')->row();
		return $result;
	}

	function st_get_count($option)
	{
		$this->db->select('count(*) as cnt');
		$result = $this->db->get_where(
			'student',
			array(
				'flag' => '1',
				'workspace' => $this->session->userdata('workspace'),
				'status' => '재원',
				'grade1' => $option
			)
		)->row();
		return $result;
	}

	function st_get_count_option($option)
	{
		$this->db->select('count(*) as cnt');
		$result = $this->db->get_where(
			'student',
			array(
				'flag' => '1',
				'status' => '재원',
				'workspace' => $this->session->userdata('workspace'),
				'grade1' => $option['grade1'],
				'grade2' => $option['grade2'],
			)
		)->row();
		return $result;
	}

	function st_get_fees_sum($option)
	{
		$this->db->select_sum('fees');
		$this->db->where(array(
			'flag' => '1',
			'workspace' => $this->session->userdata('workspace'),
			'status' => '재원',
			'grade1' => $option
		));
		//$result = $this->db->get_where('student', array('grade1'=>$option))->row();
		$result = $this->db->get('student')->row();
		return $result;
	}

	// 수정 
	function st_modify($option)
	{
		$this->db->set('created', 'NOW()', FALSE);
		$this->db->set('name', $option['name']);
		$this->db->set('s_phone', $option['s_phone']);
		$this->db->set('house', $option['house']);
		$this->db->set('sibling_name', $option['sibling_name']);

		$this->db->set('grade1', $option['grade1']);
		$this->db->set('school_name', $option['school_name']);
		$this->db->set('grade2', $option['grade2']);

		$this->db->set('class_name', $option['class_name']);

		$this->db->set('level1', $option['level1']);
		$this->db->set('level2', $option['level2']);
		$this->db->set('level3', $option['level3']);

		$this->db->set('class_day1', $option['class_day1']);
		$this->db->set('class_time1', $option['class_time1']);
		$this->db->set('class_day2', $option['class_day2']);
		$this->db->set('class_time2', $option['class_time2']);
		$this->db->set('class_day3', $option['class_day3']);
		$this->db->set('class_time3', $option['class_time3']);

		$this->db->set('memo', ltrim($option['memo']));
		$this->db->set('study_memo', ltrim($option['study_memo']));
		$this->db->set('test_memo', ltrim($option['test_memo']));
		$this->db->set('check_memo', ltrim($option['check_memo']));
		$this->db->set('off_memo', ltrim($option['off_memo']));

		$this->db->set('fees', $option['fees']);
		$this->db->set('discount1', $option['discount1']);
		$this->db->set('discount2', $option['discount2']);
		$this->db->set('discount_memo', $option['discount_memo']);
		$this->db->set('receipt_phone', $option['receipt_phone']);
		$this->db->set('receipt_use', $option['receipt_use']);

		$this->db->set('flag', $option['flag']);
		$this->db->set('status', $option['status']);
		$this->db->set('start_date', $option['start_date']);
		$this->db->set('end_date', $option['end_date']);
		$this->db->set('report_last_date', $option['report_last_date']);

		$this->db->where('id', $option['id']);

		$result = $this->db->update('student');

		return $result;
	}

	// 삭제
	function st_delete($student_id)
	{
		$result = $this->db->delete('student', array(
			'id' => $student_id
		));
		return $result;
	}
	// 학생 정보 CRUD end

	// 자기주도 스케줄 CRUD start
	function schedule_add($option)
	{
		$this->db->set('s_date', 'NOW()', false);
		$this->db->set('st_id', $option['st_id']);

		$this->db->insert('st_schedule');
		$result = $this->db->insert_id();
		return $result;
	}

	function schedule_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('s_date', 'DESC');
		if ($option) {
			$this->db->where('st_id', $option);
		}
		$result = $this->db->get('st_schedule')->result();
		return $result;
	}

	function schedule_get($id)
	{
		$this->db->select('*');
		$result = $this->db->get_where(
			'st_schedule',
			array('id' => $id)
		)->row();
		return $result;
	}

	function schedule_modify($option)
	{
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('mon_s', $option['mon_s']);
		$this->db->set('tue_s', $option['tue_s']);
		$this->db->set('wed_s', $option['wed_s']);
		$this->db->set('thr_s', $option['thr_s']);
		$this->db->set('fri_s', $option['fri_s']);
		$this->db->set('sat_s', $option['sat_s']);
		$this->db->set('sun_s', $option['sun_s']);
		$this->db->set('time_per_week', $option['time_per_week']);
		$this->db->set('s_date', $option['s_date']);
		$this->db->set('e_date', $option['e_date']);

		$this->db->where('id', $option['id']);

		$this->db->update('st_schedule');

		$id = $option['id'];

		return $id;
	}

	function schedule_delete($id)
	{
		$result = $this->db->delete('st_schedule', array(
			'id' => $id
		));
		return $result;
	}

	// 메모 CRUD start

	function memo_add($option)
	{
		$this->db->set('m_date', 'NOW()', false);
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('type', $option['type']);
		$this->db->set('seq', $option['seq']);

		$result = $this->db->insert('st_memo');
		return $result;
	}

	function memo_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('seq', 'ASC');
		$this->db->order_by('m_date', 'DESC');
		if ($option) {
			$this->db->where($option);
		}
		$result = $this->db->get('st_memo')->result();
		return $result;
	}

	function memo_get($id)
	{
		$this->db->select('*');
		$result = $this->db->get_where(
			'st_memo',
			array('id' => $id)
		)->row();
		return $result;
	}

	function memo_modify($option)
	{
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('memo', $option['memo']);
		$this->db->set('seq', $option['seq']);
		$this->db->set('m_date', $option['m_date']);
		$this->db->set('f_memo', $option['f_memo']);
		$this->db->set('status', $option['status']);

		$this->db->where('id', $option['id']);

		$result = $this->db->update('st_memo');

		return $result;
	}

	function memo_delete($id)
	{
		$result = $this->db->delete('st_memo', array(
			'id' => $id
		));
		return $result;
	}
	// 메모 CRUD end

	// 테스트 CRUD start

	function test_add($option)
	{
		$this->db->set('created', 'NOW()', false);
		$this->db->set('test_date', 'NOW()', false);
		$this->db->set('st_id', $option['st_id']);

		$this->db->insert('st_test');
		$test_id = $this->db->insert_id();
		return $test_id;
	}

	function test_gets($st_id = null)
	{
		$this->db->select('test.id as id');
		$this->db->select('test.st_id as st_id');
		$this->db->select('st.name as name');
		$this->db->select('test.type');
		$this->db->select('test.grade');
		$this->db->select('test.level');
		$this->db->select('test.gubun1');
		$this->db->select('test.gubun2');
		$this->db->select('test.gubun3');
		$this->db->select('test.open');
		$this->db->select('test.test_name');
		$this->db->select('test.corrt_num');
		$this->db->select('test.total_num');
		$this->db->select('test.score');
		$this->db->select('test.time');
		$this->db->select('test.result');
		$this->db->select('test.test_date');
		$this->db->select('test.memo');
		$this->db->from('st_test as test');
		$this->db->join('student as st', 'test.st_id=st.id', 'left');
		$this->db->order_by('test.grade', 'DESC');
		$this->db->order_by('test.test_name', 'DESC');
		$this->db->order_by('test.created', 'ASC');
		if ($st_id) {
			$this->db->where('test.st_id', $st_id);
		}
		$result = $this->db->get()->result();
		//$result =  $this->db->query("SELECT * FROM test")->result();
		return $result;
	}

	function test_list($st_id = null)
	{
		$this->db->select('test.id as id');
		$this->db->select('test.st_id as st_id');
		$this->db->select('st.name as name');
		$this->db->select('test.type');
		$this->db->select('test.grade');
		$this->db->select('test.level');
		$this->db->select('test.gubun1');
		$this->db->select('test.gubun2');
		$this->db->select('test.gubun3');
		$this->db->select('test.open');
		$this->db->select('test.test_name');
		$this->db->select('test.corrt_num');
		$this->db->select('test.total_num');
		$this->db->select('test.score');
		$this->db->select('test.time');
		$this->db->select('test.result');
		$this->db->select('test.test_date');
		$this->db->select('test.memo');
		$this->db->from('st_test as test');
		$this->db->join('student as st', 'test.st_id=st.id', 'left');
		$this->db->order_by('test.grade', 'DESC');
		$this->db->order_by('test.test_name', 'DESC');
		$this->db->order_by('test.created', 'ASC');
		if ($st_id) {
			$this->db->where('test.st_id', $st_id);
		}
		$result = $this->db->get()->result();
		//$result =  $this->db->query("SELECT * FROM test")->result();
		return $result;
	}

	function test_get($test_id)
	{
		$this->db->select('id');
		$this->db->select('st_id');
		$this->db->select('test_date');
		$this->db->select('score');
		$this->db->select('corrt_num');
		$this->db->select('total_num');
		$this->db->select('time');
		$this->db->select('subject');
		$this->db->select('type');
		$this->db->select('grade');
		$this->db->select('gubun1');
		$this->db->select('gubun2');
		$this->db->select('gubun3');
		$this->db->select('open');
		$this->db->select('test_name');
		$this->db->select('result');
		$this->db->select('level');
		$this->db->select('memo');
		$this->db->select('UNIX_TIMESTAMP(created) AS created');
		$result = $this->db->get_where('st_test', array('id' => $test_id))->row();

		return $result;
	}

	function test_modify($option)
	{
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('type', $option['type']);
		$this->db->set('grade', $option['grade']);
		$this->db->set('level', $option['level']);
		$this->db->set('gubun1', $option['gubun1']);
		$this->db->set('gubun2', $option['gubun2']);
		$this->db->set('gubun3', $option['gubun3']);
		$this->db->set('open', $option['open']);
		$this->db->set('test_name', $option['test_name']);
		$this->db->set('corrt_num', $option['corrt_num']);
		$this->db->set('total_num', $option['total_num']);
		$this->db->set('score', $option['score']);
		$this->db->set('time', $option['time']);
		$this->db->set('result', $option['result']);
		$this->db->set('test_date', $option['test_date']);
		$this->db->set('memo', $option['memo']);

		$this->db->where('id', $option['id']);

		$this->db->update('st_test');

		$test_id = $option['id'];

		return $test_id;
	}

	function test_delete($test_id)
	{
		$result = $this->db->delete('st_test', array(
			'id' => $test_id
		));
		return $result;
	}
	// 테스트 CRUD end


	// 진도체크 CRUD start
	function study_add($option)
	{
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('category', $option['category']);
		$this->db->set('seq', $option['seq']);

		$result = $this->db->insert('st_study');
		return $result;
	}

	function study_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('seq', 'ASC');
		if ($option) {
			$this->db->where('st_id', $option);
		}
		$result = $this->db->get('st_study')->result();
		return $result;
	}

	function study_get($id)
	{
		$this->db->select('*');
		$result = $this->db->get_where(
			'st_study',
			array('id' => $id)
		)->row();
		return $result;
	}

	function study_modify($option)
	{
		$this->db->set('st_id', $option['st_id']);
		$this->db->set('seq', $option['seq']);
		$this->db->set('category', $option['category']);
		$this->db->set('open', $option['open']);
		$this->db->set('course', $option['course']);
		$this->db->set('book', $option['book']);
		$this->db->set('period', $option['period']);
		$this->db->set('count_chap', $option['count_chap']);

		$this->db->set('s_chap1', $option['s_chap1']);
		$this->db->set('s_chap2', $option['s_chap2']);
		$this->db->set('s_chap3', $option['s_chap3']);
		$this->db->set('s_chap4', $option['s_chap4']);
		$this->db->set('s_chap5', $option['s_chap5']);
		$this->db->set('s_chap6', $option['s_chap6']);
		$this->db->set('s_chap7', $option['s_chap7']);
		$this->db->set('s_chap8', $option['s_chap8']);
		$this->db->set('s_chap9', $option['s_chap9']);
		$this->db->set('s_chap10', $option['s_chap10']);
		$this->db->set('s_chap11', $option['s_chap11']);
		$this->db->set('s_chap12', $option['s_chap12']);
		$this->db->set('s_chap13', $option['s_chap13']);

		$this->db->set('e_chap1', $option['e_chap1']);
		$this->db->set('e_chap2', $option['e_chap2']);
		$this->db->set('e_chap3', $option['e_chap3']);
		$this->db->set('e_chap4', $option['e_chap4']);
		$this->db->set('e_chap5', $option['e_chap5']);
		$this->db->set('e_chap6', $option['e_chap6']);
		$this->db->set('e_chap7', $option['e_chap7']);
		$this->db->set('e_chap8', $option['e_chap8']);
		$this->db->set('e_chap9', $option['e_chap9']);
		$this->db->set('e_chap10', $option['e_chap10']);
		$this->db->set('e_chap11', $option['e_chap11']);
		$this->db->set('e_chap12', $option['e_chap12']);
		$this->db->set('e_chap13', $option['e_chap13']);

		$this->db->set('t_chap1', $option['t_chap1']);
		$this->db->set('t_chap2', $option['t_chap2']);
		$this->db->set('t_chap3', $option['t_chap3']);
		$this->db->set('t_chap4', $option['t_chap4']);
		$this->db->set('t_chap5', $option['t_chap5']);
		$this->db->set('t_chap6', $option['t_chap6']);
		$this->db->set('t_chap7', $option['t_chap7']);
		$this->db->set('t_chap8', $option['t_chap8']);
		$this->db->set('t_chap9', $option['t_chap9']);
		$this->db->set('t_chap10', $option['t_chap10']);
		$this->db->set('t_chap11', $option['t_chap11']);
		$this->db->set('t_chap12', $option['t_chap12']);
		$this->db->set('t_chap13', $option['t_chap13']);

		$this->db->where('id', $option['id']);

		$result = $this->db->update('st_study');

		return $result;
	}

	function study_delete($id)
	{
		$result = $this->db->delete('st_study', array(
			'id' => $id
		));
		return $result;
	}
	// 진도체크 CRUD end


	// 환경설정 CRUD start
	function setting_add($option)
	{
		$this->db->set('type', $option['type']);

		$result = $this->db->insert('st_setting');
		return $result;
	}

	function setting_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('type', 'ASC');
		$this->db->order_by('gubun1', 'ASC');
		$this->db->order_by('gubun2', 'ASC');
		$this->db->order_by('key', 'ASC');

		if ($option) {
			$this->db->where('st_id', $option);
		}
		$result = $this->db->get('st_setting')->result();
		return $result;
	}

	function setting_get_by_key($option)
	{
		$this->db->select('*');
		$result = $this->db->get_where(
			'st_setting',
			array(
				'key' => $option['key']
			)
		)->row();
		return $result['value'];
	}

	function setting_get($id)
	{
		$this->db->select('*');

		$result = $this->db->get_where(
			'st_setting',
			array(
				'id' => $id
			)
		)->row();
		return $result;
	}

	function setting_modify($option)
	{
		$this->db->set('type', $option['type']);
		$this->db->set('key', $option['key']);
		$this->db->set('gubun1', $option['gubun1']);
		$this->db->set('gubun2', $option['gubun2']);
		$this->db->set('value', $option['value']);
		$this->db->set('description', $option['description']);
		$this->db->where('id', $option['id']);

		$result = $this->db->update('st_setting');

		return $result;
	}

	function setting_delete($id)
	{
		$result = $this->db->delete('st_setting', array(
			'id' => $id
		));
		return $result;
	}
	// 환경세팅 CRUD end

}
