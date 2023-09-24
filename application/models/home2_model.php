<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home2_model extends CI_Model
{
    var $tbl_transaction = 'st_book_chapter';

    /*
    |-------------------------------------------------------------------
    | Fetch All Transaction Data
    |-------------------------------------------------------------------
    | 
    */
    function fetch_transactions()
    {
        /* Filter */
        $filter = $this->input->post('filter');
        if ($filter == 1) {
            $date = $this->input->post('date');
            $this->db->where('input_date', $date);
        }

        /* Query */
        // $this->db->select("*, (price*qty) as total");
        $this->db->select("*");
        $query = $this->db->get($this->tbl_transaction);
        return $query->result_array();
    }

    /*
    |-------------------------------------------------------------------
    | Insert Batch Transaction Data
    |-------------------------------------------------------------------
    |
    | @param $data  Transactions Array Data
    |
    */
    function insert_transaction_batch($data)
    {
        $this->db->insert_batch($this->tbl_transaction, $data);
    }

    function empty_table()
    {
        $this->db->empty_table($this->tbl_transaction);
    }
}
