<?php
defined('BASEPATH') or exit('No direct script access allowed');
class St_study_detail_m extends CI_Model
{
  var $tbl = 'st_study_detail';

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
    $this->db->set('created', 'NOW()', false);
    $this->db->set($array);
    $this->db->insert($this->tbl);

    $result = $this->db->insert_id();

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
  function get_list()
  {
    $this->db->select('id, name, email, password');

    $result = $this->db->get($this->tbl)->result();
    return $result;
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

  function getByEmail($array)
  {
    $result = $this->db->get_where(
      $this->tbl,
      array(
        'email' => $array['email']
      )
    )->row();
    return $result;
  }
}
