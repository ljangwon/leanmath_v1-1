<?php
defined('BASEPATH') or exit('No direct script access allowed');
class St_study_m extends CI_Model
{
  var $tbl = 'st_study';
  var $tbl_detail = 'st_study_detail';

  var $tbl_student = 'student';

  function __construct()
  {
    parent::__construct();
  }

  // 테이블 비우기
  function empty_table()
  {
    $this->db->empty_table($this->tbl);
  }

  // 여러 줄 데이터 삽입
  function add_batch($data)
  {
    $this->db->insert_batch($this->tbl, $data);
  }

  // 한 데이터 삽입
  function add($array)
  {
    $this->db->set($array);
    $this->db->insert($this->tbl);

    $result = $this->db->insert_id();

    return $result;
  }

  // 데이터 수정
  function modify($array)
  {
    $this->db->set($array);

    $this->db->where(
      'id',
      $array['id']
    );

    $result = $this->db->update($this->tbl);

    return $result;
  }

  // 데이터 삭제
  public function delete($id)
  {
    if (is_array($id)) {
      $this->db->where_in('id', $id);
    } else {
      $this->db->where('id', $id);
    }

    $result = $this->db->delete($this->tbl);

    return $result ? true : false;
  }

  // 리스트 데이터 얻기
  function get_list($option = null)
  {
    $this->db->select('*');
    $this->db->order_by('course_cat', 'ASC');

    if ($option) {
      $this->db->where($option);
    }

    $query = $this->db->get($this->tbl);

    return $query;
  }

  // 리스트 데이터 얻기
  function get_study_detail_list($study_id)
  {
    $this->db->select('*');

    $this->db->where('study_id', $study_id);

    $result = $this->db->get($this->tbl_detail)->result();

    return $result;
  }

  function get_student_by_grade($grade)
  {
    $this->db->select('id, name');

    $this->db->where('status', '재원');

    $this->db->where('grade', $grade);


    $query = $this->db->get($this->tbl_student);

    return $query;
  }

  function get_st_study_list_by_st_id($param_arr)
  {
    $this->db->select('*');
    $this->db->order_by('course_cat', 'ASC');

    $a = array(
      'st_id' => $param_arr['st_id']
    );

    if ($param_arr['show_flag'] == 1) {
      $a = array_merge(
        $a,
        array('show_flag' => '1')
      );
    }

    $this->db->where($a);

    $query = $this->db->get($this->tbl);

    return $query;
  }

  // 데이터 상세 얻기
  function get_detail($id)
  {
    $this->db->select('*');

    $result = $this->db->get_where(
      $this->tbl,
      array(
        'id' => $id
      )
    )->row();

    return $result;
  }

  // 데이터 개수 얻기 
  function get_count_by_option($option)
  {
    $this->db->select('count(*) as cnt');
    $this->db->where($option);

    $result = $this->db->get(
      $this->tbl
    )->row();

    return $result;
  }

  // autofill 리스트 가져오기
  function get_list_name($postData)
  {
    $response = array();

    if (isset($postData['search'])) {
      // Select record
      $this->db->select("id, name");
      $this->db->where("name like '%" . $postData['search'] . "%' ");

      $records = $this->db->get(
        $this->tbl
      )->result();

      foreach ($records as $row) {
        $response[] = array(
          "value1" => $row->id,
          "label" => $row->name
        );
      }
    }
    return $response;
  }

  function get_by_single($array)
  {
    $result = $this->db->get_where(
      $this->tbl,
      array(
        'id' => $array['id']
      )
    )->row();
    return $result;
  }
}
