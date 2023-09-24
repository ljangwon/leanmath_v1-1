<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Form_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('form/s1_head_v');
        $this->load->view('form/s4_main_v');
        $this->load->view('form/s6_modal_v');
        $this->load->view('form/s7_script_v');
    }
}
