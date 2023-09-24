<?php
class St_book_m extends CI_Model
{
  var $tbl = 'st_book';
  var $tbl_detail = 'st_book_chapter';

  function __construct()
  {
    parent::__construct();
  }

  // create
  function create($option)
  {
    $this->db->set($option);

    $this->db->insert($this->tbl);

    $result = $this->db->insert_id();

    return $result;
  }

  // read book list
  function r_list($option = null)
  {
    $this->db->select('*');
    $this->db->order_by('grade1', 'DESC');
    $this->db->order_by('grade2', 'ASC');
    $this->db->order_by('title', 'ASC');

    $result = $this->db->get($this->tbl)->result();
    return $result;
  }

  // read a book
  function r_get($book_id)
  {
    $this->db->select('*');

    $this->db->select('UNIX_TIMESTAMP(modified_time) AS modified_time');

    $this->db->where(
      array(
        'id' => $book_id
      )
    );
    $result = $this->db->get($this->tbl)->row();
    return $result;
  }


  // update a book
  function update($option)
  {
    $this->db->set($option);

    $this->db->where('id', $option['id']);

    $result = $this->db->update($this->tbl);

    return $result;
  }

  // delete a book
  function delete($book_id)
  {
    $this->db->where('id', $book_id);

    $result = $this->db->delete($this->tbl);

    return $result;
  }

  function get_book_names($postData)
  {
    $response = array();

    if (isset($postData['search'])) {
      // Select record
      $this->db->select("id, title, grade1, grade2 ");
      $this->db->where("title like '%" . $postData['search'] . "%' ");

      $records = $this->db->get($this->tbl)->result();

      foreach ($records as $row) {
        $response[] = array("book_id" => $row->id, "label" => $row->title + $row->grade1 + $row->grade2);
      }
    }
    return $response;
  }
}
