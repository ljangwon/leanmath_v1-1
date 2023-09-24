<?php
class Shopping_m extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function shopping_gets($option = null)
	{
		$this->db->select('*');
		$this->db->order_by('flag', 'ASC');
		$this->db->order_by('grade1', 'ASC');
		$this->db->order_by('grade2', 'ASC');
		$this->db->order_by('name', 'DESC');
		$this->db->order_by('created', 'ASC');

		if ($option) {

			$this->db->where('grade1', $option['grade1']);

			$this->db->where('grade2', $option['grade2']);
		}

		$result = $this->db->get('bk_master')->result();
		return $result;
	}

	function ajax_test_gets()
	{
		//json을 php에서 사용하기 위해 필요한 구문
		header("Content-Type: application/json");

		$this->db->select('*');

		$db_data_comeon_rs = $this->db->get('ajax_test')->result_array();

		//DB에서 가져온 데이타를 PHP 배열에 각각 넣어서 JSON으로 전달해 주자.
		$db_seq = array();
		$db_name = array();
		$db_age = array();
		$db_email = array();

		//한글은 iconv를 해줘야 안깨지더군요. 이부분은 환경에 맞춰서 각자 하시면 좋을듯.
		foreach ($db_data_comeon_rs as $row) {
			array_push($db_seq, $row['seq']);
			array_push($db_name, $row['name']);
			array_push($db_age, $row['age']);
			array_push($db_email, $row['email']);
		}

		//최종 결과를 json으로 전달해 주자.
		echo (json_encode(array( "seq" => $db_seq, "name" => $db_name, "age" => $db_age, "email" => $db_email)));

	}

}
