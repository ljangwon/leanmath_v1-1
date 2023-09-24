<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view(
            'admin/s1_head_v',
            array()
        );

        $this->load->view(
            'admin/s2_sidebar_v',
            array()
        );

        $this->load->view(
            'admin/s3_topbar_v',
            array()
        );

        $this->load->view(
            'admin/s4_blank_v',
            array()
        );

        $this->load->view(
            'admin/s5_footer_v',
            array()
        );

        $this->load->view(
            'admin/s6_modal_v',
            array()
        );

        $this->load->view(
            'admin/s7_script_v',
            array()
        );
    }

    function cards()
    {
        $this->load->view(
            'admin/s1_head_v',
            array()

        );

        $this->load->view(
            'admin/s2_sidebar_v',
            array()
        );

        $this->load->view(
            'admin/s3_topbar_v',
            array()
        );

        $this->load->view(
            'admin/s4_cards_v',
            array()
        );

        $this->load->view(
            'admin/s5_footer_v',
            array()
        );

        $this->load->view(
            'admin/s6_modal_v',
            array()
        );

        $this->load->view(
            'admin/s7_script_v',
            array()
        );
    }
}
