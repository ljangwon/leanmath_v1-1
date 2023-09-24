<?php
class Test_history_m extends CI_Model {

    function __construct()
    {    	
        parent::__construct();
    }

    function gets($option=null) {
        $this->db->select('test_h.id as id');
        $this->db->select('test_h.st_id as st_id');
        $this->db->select('st.name as name');
        $this->db->select('test_h.course');
        $this->db->select('test_h.memo');
        $this->db->from('test_history as test_h');
        $this->db->join('student as st', 'test_h.st_id=st.id', 'left');
            if( $option ) {
                $this->db->where('test_h.st_id', $option);        
            }        
        $result = $this->db->get()->result();
        //$result =  $this->db->query("SELECT * FROM test")->result();
     	return $result;
    }

    function get($test_h_id){
        $this->db->select('*');
        $result = $this->db->get_where('test_history', array('id'=>$test_h_id))->row();

    	return $result;
    }

    
    function add($option)
    {
        $this->db->set('st_id', $option['st_id']);

        $this->db->insert('test_history');
        $result = $this->db->insert_id();
        return $result;
    }

    function delete($test_h_id)
    {
        $result = $this->db->delete('test_history', array(
            'id'=>$test_h_id
        ));
        return $result;
    }

    function modify($option)
    {
        $this->db->set('st_id', $option['st_id']);
        $this->db->set('course', $option['course']);
        $this->db->set('memo', $option['memo']);

        $this->db->where('id', $option['id']);

        $this->db->update('test_history');

        $test_h_id= $option['id'];

        return $test_h_id;
    }
}