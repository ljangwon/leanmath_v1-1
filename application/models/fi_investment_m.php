<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fi_investment_m extends CI_Model
{
  var $tbl = 'fi_investment';
  var $tbl_detail = 'fi_investment_detail';

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

  // 리스트 데이터 얻기
  function get_list()
  {
    $this->db->select('*');
    $this->db->where('flag', 1);

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
        'flag' => '1',
        'id' => $id
      )
    )->row();

    return $result;
  }

  // 데이터 개수 얻기 
  function get_count_by_option($option)
  {
    $this->db->select('count(*) as cnt');
    $this->db->where('flag', '1');
    $this->db->where($option);

    $result = $this->db->get(
      $this->tbl
    )->row();

    return $result;
  }

  // 데이터 값 더하기
  function get_sum_fees_by_option($option)
  {
    $this->db->select_sum('fees');
    $this->db->where('flag', '1');
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

  // 데이터 삭제
  function delete($id)
  {
    $result = $this->db->delete(
      $this->tbl,
      array(
        'id' => $id
      )
    );
    return $result;
  }
}
