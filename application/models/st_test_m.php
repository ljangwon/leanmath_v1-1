<?php
class St_test_m extends CI_Model
{
    var $tbl = "st_test";

    function __construct()
    {
        parent::__construct();
    }

    function gets($option = null)
    {
        $this->db->select('test.id as id');
        $this->db->select('test.st_id as st_id');
        $this->db->select('st.name as name');
        $this->db->select('test.type');
        $this->db->select('test.grade');
        $this->db->select('test.level');
        $this->db->select('test.chapter');
        $this->db->select('test.corrt_num');
        $this->db->select('test.total_num');
        $this->db->select('test.score');
        $this->db->select('test.result');
        $this->db->select('test.test_date');
        $this->db->select('test.memo');
        $this->db->from($this->tbl + ' as test');
        $this->db->join('student as st', 'test.st_id=st.id', 'left');
        $this->db->order_by('test.grade', 'DESC');
        $this->db->order_by('test.chapter', 'DESC');
        $this->db->order_by('test.created', 'ASC');
        if ($option) {
            $this->db->where('test.st_id', $option);
        }
        $result = $this->db->get()->result();
        //$result =  $this->db->query("SELECT * FROM test")->result();
        return $result;
    }

    function get($test_id)
    {
        $this->db->select('id');
        $this->db->select('st_id');
        $this->db->select('test_date');
        $this->db->select('score');
        $this->db->select('corrt_num');
        $this->db->select('total_num');
        $this->db->select('subject');
        $this->db->select('type');
        $this->db->select('grade');
        $this->db->select('chapter');
        $this->db->select('result');
        $this->db->select('level');
        $this->db->select('memo');
        $this->db->select('UNIX_TIMESTAMP(created) AS created');
        $result = $this->db->get_where($this->tbl, array('id' => $test_id))->row();

        return $result;
    }

    function add($option)
    {
        $this->db->set('created', 'NOW()', false);
        $this->db->set('st_id', $option['st_id']);

        $this->db->insert($this->tbl);
        $result = $this->db->insert_id();
        return $result;
    }

    function delete($test_id)
    {
        $result = $this->db->delete($this->tbl, array(
            'id' => $test_id
        ));
        return $result;
    }

    function modify($option)
    {
        $this->db->set('st_id', $option['st_id']);
        $this->db->set('type', $option['type']);
        $this->db->set('grade', $option['grade']);
        $this->db->set('level', $option['level']);
        $this->db->set('chapter', $option['chapter']);
        $this->db->set('corrt_num', $option['corrt_num']);
        $this->db->set('total_num', $option['total_num']);
        $this->db->set('score', $option['score']);
        $this->db->set('result', $option['result']);
        $this->db->set('test_date', $option['test_date']);
        $this->db->set('memo', $option['memo']);

        $this->db->where('id', $option['id']);

        $this->db->update($this->tbl);

        $test_id = $option['id'];

        return $test_id;
    }

    function backup($student_id)
    {
        return $student_id . '백업 되었습니다.';
        //return $this->db->update('student', )
    }
}
