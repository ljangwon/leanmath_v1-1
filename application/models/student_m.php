<?php
class Student_m extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function add($option)
  {
    $this->db->set('workspace', $this->session->userdata('workspace'));
    $this->db->set($option);
    $this->db->insert('student');

    $result = $this->db->insert_id();

    return $result;
  }

  function get_list($option)
  {
    $this->db->select('*');
    $this->db->order_by('status', 'ASC');
    $this->db->order_by('class_name', 'ASC');
    $this->db->order_by('grade1', 'DESC');
    $this->db->order_by('grade2', 'ASC');

    if ($option) {
      $this->db->where('flag', 1);
      $this->db->where($option);
    } else {
      $this->db->where('flag', 1);
      $this->db->where('workspace', $this->session->userdata('workspace'));
      $this->db->where('status', '재원');
    }

    $result = $this->db->get('student')->result();

    return $result;
  }

  function get_st_name_by_st_id($st_id)
  {
    $this->db->select('name');
    $this->db->where('id', $st_id);
    $result = $this->db->get('student')->row();

    return $result;
  }

  function get_student_by_grade($grade)
  {
    $this->db->select('id, name');

    $this->db->where('status', '재원');

    $this->db->where('grade', $grade);

    $result = $this->db->get('student')->result();

    return $result;
  }

  function gets($option = null)
  {
    $this->db->select('*');
    $this->db->order_by('status', 'ASC');
    $this->db->order_by('class_name', 'ASC');
    $this->db->order_by('grade1', 'DESC');
    $this->db->order_by('grade2', 'ASC');
    if ($option) {
      $this->db->where('flag', '1');
      $this->db->where($option);
    } else {
      $this->db->where('flag', '1');
    }

    $result = $this->db->get('student')->result();

    return $result;
  }

  function gets_today($option = null)
  {
    $this->db->select('*');
    $this->db->order_by('status', 'ASC');
    $this->db->order_by('class_name', 'ASC');
    $this->db->order_by('grade1', 'DESC');
    $this->db->order_by('grade2', 'ASC');
    if ($option) {
      $this->db->where('flag', '1');
      $this->db->where('workspace', $this->session->userdata('workspace'));
      $this->db->where('status', '재원');
      $this->db->where('class_day1', $option);
      $this->db->or_where('class_day2', $option);
      $this->db->or_where('class_day3', $option);
    } else {
      $this->db->where('flag', '1');
      $this->db->where('workspace', $this->session->userdata('workspace'));
      $this->db->where('status', '재원');
    }
    $result = $this->db->get('student')->result();;
    //$result =  $this->db->query("SELECT * FROM student")->result();
    return $result;
  }

  function get_by_option($option)
  {
    $this->db->select('*');
    $this->db->order_by('name ASC');
    $this->db->where('flag', '1');
    $this->db->where($option);

    $result = $this->db->get('student')->result();;

    return $result;
  }

  function get($st_id)
  {
    $this->db->select('*');
    $this->db->select('UNIX_TIMESTAMP(modified_time) AS modified_time');

    $result = $this->db->get_where('student', array(
      'flag' => '1',
      'id' => $st_id
    ))->row();

    return $result;
  }

  function get_count_option($option)
  {
    $this->db->select('count(*) as cnt');
    $this->db->where('flag', '1');
    $this->db->where('status', '재원');
    $this->db->where($option);

    $result = $this->db->get(
      'student'
    )->row();

    return $result;
  }

  function get_st_count($option)
  {
    $this->db->select('count(*) as cnt');
    $this->db->where('flag', '1');
    $this->db->where('workspace', $this->session->userdata('workspace'));
    $this->db->where($option);

    $result = $this->db->get(
      'student'
    )->row();

    return $result;
  }

  function get_fees_sum($option)
  {
    $this->db->select_sum('fees');
    $this->db->where(
      array(
        'grade1' => $option,
        'flag' => '1',
        'workspace' => $this->session->userdata('workspace'),
        'status' => '재원'
      )
    );

    $result = $this->db->get('student')->row();

    return $result;
  }

  function get_student_names($postData)
  {
    $response = array();

    if (isset($postData['search'])) {
      // Select record
      $this->db->select("id, name, grade1, grade2");
      $this->db->where("name like '%" . $postData['search'] . "%' ");

      $records = $this->db->get('student')->result();

      foreach ($records as $row) {
        $response[] = array("st_id" => $row->id, "st_name" => $row->name,  "label" => ($row->name . "-" . $row->grade1 . $row->grade2));
      }
    }
    return $response;
  }

  function test_h_add($option)
  {
    $this->db->set('created', 'NOW()', false);
    $this->db->set('st_id', $option['st_id']);

    $this->db->insert('test_history');

    $result = $this->db->insert_id();

    return $result;
  }

  function modify($option)
  {
    $this->db->set($option);

    $this->db->where('id', $option['id']);

    $result = $this->db->update('student');

    return $result;
  }

  function delete($st_id)
  {
    $result = $this->db->delete('student', array(
      'id' => $st_id
    ));

    return $result;
  }

  function backup($st_id)
  {
    return $st_id . '백업 되었습니다.';
    //return $this->db->update('student', )
  }
}
