<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_history extends MY_Controller {
    function __construct()
    {       
        parent::__construct();
        
        $this->load->model('student_m');
        $this->load->model('test_history_m');
    }
    function index(){        
        $this->_student_header();
        $this->_student_sidebar();

        $this->load->view('test/main_v', 
            array());

        $this->_student_footer();
    }
    function get($id){        

        $this->_student_header();
        $this->_student_sidebar();

        if(!$id) {
            redirect( site_url('/student/get/'.$this->session->userdata('st_id')));
        }
        $this->student_m->get($this->session->userdata('st_id'));
        $test = $this->test_m->get($id);

        if(empty($test)){
            alert('test의 값이 없습니다',site_url('/student/get/'.$this->session->userdata('st_id')));
        }

        $this->load->helper(array( 'HTML', 'korean'));

        $this->load->view('test/get_v', array('test'=>$test));

        $this->_student_footer();

    }

    function delete(){
        $test_id = $this->input->post('test_id');
        $st_id = $this->input->post('st_id');
        $this->_require_login(site_url('/test/get/'.$test_id));
        $this->load->model('test_m');
        $this->test_m->delete($test_id);
        //$this->cache->delete('tests');
        redirect( site_url('/student/get/'.$st_id) );
    }

    function add(){
     
        // 로그인 필요
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

        $this->_require_login(site_url('/test/add'));
     
        $this->_student_header();
        $this->_student_sidebar();
         
        $this->load->library('form_validation');
     
        $this->form_validation->set_rules('st_id', '학생ID', 'required');
         
        if ($this->form_validation->run() == FALSE)
        {
             $this->load->view('test/add_v');
        }
        else
        {
            $this->test_m->add( array(
                'st_id'=>$this->input->post('st_id')
                )
            );

            redirect( site_url('/student/get/'.$this->input->post('st_id')) );
        }
         
        $this->_student_footer();
    }

    function modify() {
        // 로그인 필요
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

        $this->_require_login(site_url('/test/modify'));
     
        $this->_student_header();
        $this->_student_sidebar();
         
        $this->load->library('form_validation');
     
        $this->form_validation->set_rules('st_id', '학생ID', 'required');

        if ($this->form_validation->run() == FALSE)
        {

             redirect( site_url('/test/get/'.$this->input->post('id')) ) ;
        }
        else
        {
            $memo = ltrim($this->input->post('memo'));
            $test_id = $this->test_m->modify( array (
                'id'=>$this->input->post('id'),
                'st_id'=>$this->input->post('st_id'), 
                'grade'=>$this->input->post('grade'),
                'chapter'=>$this->input->post('chapter'),
                'type'=>$this->input->post('type'),
                'level'=>$this->input->post('level'),
                'corrt_num'=>$this->input->post('corrt_num'),
                'total_num'=>$this->input->post('total_num'),
                'score'=>$this->input->post('score'),
                'result'=>$this->input->post('result'),
                'test_date'=>$this->input->post('test_date'),
                'memo'=>$memo
                )
            );

            redirect( site_url('/test/get/'.$test_id) );
        }
         
        $this->_student_footer();
    }

}
?>