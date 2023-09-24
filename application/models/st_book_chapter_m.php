<?php
class St_book_chapter_m extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  // create
  function create($option)
  {
    $this->db->set($option);
    $this->db->insert('book_chapter');
    $result = $this->db->insert_id();
    return $result;
  }

  // read book chapter list
  function r_list($book_id = null)
  {
    $this->db->select('*');
    $this->db->order_by('number');
    $this->db->order_by('id', 'DESC');
    $this->db->where('book_id', $book_id);


    $result = $this->db->get('book_chapter')->result();
    return $result;
  }

  // read book chapter list
  function r_get($book_chapter_id)
  {
    $this->db->select('*');
    $this->db->where('id', $book_chapter_id);

    $result = $this->db->get('book_chapter')->result();
    return $result;
  }

  // update a book chapter
  function update($option)
  {
    $this->db->set($option);

    $this->db->where('id', $option['id']);

    $result = $this->db->update('book_chapter');

    return $result;
  }

  // delete a book chapter
  function delete($chapter_id)
  {
    $this->db->where('id', $chapter_id);

    $result = $this->db->delete('book_chapter');

    return $result;
  }
}
