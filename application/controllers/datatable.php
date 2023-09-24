<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Datatable extends MY_Controller {
    function __construct()
    {       
        parent::__construct();
        
        $this->load->model('datatable_m');

    }
    function index(){        

        $this->load->view('datatable/main_v', 
            array());

    }

    function get($id){        

        $this->load->view('datatable/main_v');

    }

}
