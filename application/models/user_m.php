<?php
class User_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function gets()
    {
        return $this->db->query("SELECT * FROM user")->result();
    }

    function add($option)
    {
        $this->db->set('email', $option['email']);
        $this->db->set('password', $option['password']);
        $this->db->set('name', $option['name']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        return $result;
    }

    function modify($option)
    {
        $this->db->set('name', $option['name']);
        $this->db->set('password', $option['password']);
        $this->db->set('created', 'NOW()', false);
        $this->db->where('email', $option['email']);
        $result = $this->db->update('user');

        return $result;
    }

    function getByEmail($option)
    {
        $result = $this->db->get_where(
            'user',
            array(
                'email' => $option['email']
            )
        )->row();
        return $result;
    }
}
