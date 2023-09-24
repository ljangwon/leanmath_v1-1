<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Student extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('student_m');
        $this->load->model('test_m');
        $this->load->model('test_history_m');
    }
    function index()
    {
        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student'));

        $this->load->view('student/navbar_v');
        
        $this->sidebar_student_list();

        $this->main_student_summary();

        $this->load->view('student/footer_v');
    }

    function sidebar_student_list()
    {
        if (!$students = $this->cache->get('students')) {
            $students = $this->student_m->gets();
            //$this->cache->save('students', $students, 300);
        }
        $this->load->view(
            'student/sidebar_list_v',
            array(
                'students' => $students
            )
        );
    }

    function sidebar_student_list_today()
    {
        if (!$students = $this->cache->get('students')) {
            $students = $this->student_m->gets_today();
            //$this->cache->save('students', $students, 300);
        }
        $this->load->view(
            'student/sidebar_list_today_v',
            array(
                'students' => $students
            )
        );
    }
    function main_student_summary()
    {
        // $st_count_h = $this->student_m->get_count('고등');
        $st_count_h1 = $this->student_m->get_count_option(
            array(
                'grade1' => '고등',
                'grade2' => '1'
            )
        );
        $st_count_h2 = $this->student_m->get_count_option(
            array(
                'grade1' => '고등',
                'grade2' => '2'
            )
        );
        $st_count_h3 = $this->student_m->get_count_option(
            array(
                'grade1' => '고등',
                'grade2' => '3'
            )
        );
        $st_count_m1 = $this->student_m->get_count_option(
            array(
                'grade1' => '중등',
                'grade2' => '1'
            )
        );
        $st_count_m2 = $this->student_m->get_count_option(
            array(
                'grade1' => '중등',
                'grade2' => '2'
            )
        );
        $st_count_m3 = $this->student_m->get_count_option(
            array(
                'grade1' => '중등',
                'grade2' => '3'
            )
        );
        $st_count_e3 = $this->student_m->get_count_option(
            array(
                'grade1' => '초등',
                'grade2' => '3'
            )
        );
        $st_count_e4 = $this->student_m->get_count_option(
            array(
                'grade1' => '초등',
                'grade2' => '4'
            )
        );
        $st_count_e5 = $this->student_m->get_count_option(
            array(
                'grade1' => '초등',
                'grade2' => '5'
            )
        );
        $st_count_e6 = $this->student_m->get_count_option(
            array(
                'grade1' => '초등',
                'grade2' => '6'
            )
        );
        $st_count_h = $this->student_m->get_count('고등');
        $st_count_m = $this->student_m->get_count('중등');
        $st_count_e = $this->student_m->get_count('초등');

        $st_fees_sum_h = $this->student_m->get_fees_sum('고등');
        $st_fees_sum_m = $this->student_m->get_fees_sum('중등');
        $st_fees_sum_e = $this->student_m->get_fees_sum('초등');

        $this->load->view(
            'student/main_student_summary_v',
            array(
                'st_count_h1' => $st_count_h1,
                'st_count_h2' => $st_count_h2,
                'st_count_h3' => $st_count_h3,
                'st_count_h' => $st_count_h,
                'st_count_m1' => $st_count_m1,
                'st_count_m2' => $st_count_m2,
                'st_count_m3' => $st_count_m3,
                'st_count_m' => $st_count_m,
                'st_count_e3' => $st_count_e3,
                'st_count_e4' => $st_count_e4,
                'st_count_e5' => $st_count_e5,
                'st_count_e6' => $st_count_e6,
                'st_count_e' => $st_count_e,
                'st_fees_sum_h' => $st_fees_sum_h,
                'st_fees_sum_m' => $st_fees_sum_m,
                'st_fees_sum_e' => $st_fees_sum_e
            )
        );
    }

    function lists()
    {
        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student/lists'));
        $this->load->view('student/navbar_v');
        $this->sidebar_student_list();

        $students = $this->student_m->gets();

        if (empty($students)) {
            alert('student의 값이 없습니다', site_url('/student'));
        }

        $this->load->helper(array('HTML', 'korean'));

        $this->load->view('student/list_v', array(
            'student' => $students
        ));

        $this->load->view('student/footer_v');
    }

    function list_today()
    {
        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student/lists'));
        $this->load->view('student/navbar_v');
        $this->sidebar_student_list_today();

        $students = $this->student_m->gets_today();

        if (empty($students)) {
            alert('student의 값이 없습니다', site_url('/student'));
        }

        $this->load->helper(array('HTML', 'korean'));

        $this->load->view('student/list_today_v', array(
            'student' => $students
        ));

        $this->load->view('student/footer_v');
    }

    function get($id)
    {
        $this->_require_login(site_url('/student/get/' . $id));

        $this->load->view('student/header_v');
        $this->load->view('student/navbar_v');
        $this->sidebar_student_list();

        if (!$id) {
            redirect(site_url('/student'));
        }

        $student = $this->student_m->get($id);
        $tests = $this->test_m->gets($id);
        $test_hs = $this->test_history_m->gets($id);

        if (empty($student)) {
            alert('student의 값이 없습니다', site_url('/student/get'));
        }

        $this->load->helper(array('HTML', 'korean'));

        $this->load->view('student/get_v', array(
            'student' => $student,
            'tests' => $tests,
            'test_hs' => $test_hs
        ));


        $this->load->view('student/footer_v');
    }

    function today_check($id)
    {
        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student/today_check/' . $id));
        $this->load->view('student/navbar_v');
        $this->sidebar_student_list_today();

        if (!$id) {
            redirect(site_url('/student/list_today'));
        }

        $student = $this->student_m->get($id);
        $tests = $this->test_m->gets($id);
        $test_hs = $this->test_history_m->gets($id);

        if (empty($student)) {
            alert('student의 값이 없습니다', site_url('/student/list_today'));
        }

        $this->load->helper(array('HTML', 'korean'));

        $this->load->view('student/today_check_v', array(
            'student' => $student,
            'tests' => $tests,
            'test_hs' => $test_hs
        ));


        $this->load->view('student/footer_v');
    }

    function delete()
    {
        $student_id = $this->input->post('student_id');
        $this->_require_login(site_url('/student/get/' . $student_id));
        $this->load->model('student_m');
        $this->student_m->delete($student_id);
        $this->cache->delete('students');
        redirect(site_url('/student/lists'));
    }

    function add()
    {

        // 로그인 필요
        // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션

        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student/add'));

        $this->load->view('student/navbar_v');

        $this->sidebar_student_list();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', '이름', 'required');
        $this->form_validation->set_rules('class_name', '반이름', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('student/add_v');
        } else {
            $student_id = $this->student_m->add(
                array(
                    'name' => $this->input->post('name'),
                    'class_name' => $this->input->post('class_name'),
                )
            );

            //$this->cache->delete('students');

            redirect(site_url('/student/get/' . $student_id));
        }

        $this->load->view('student/footer_v');
    }

    function modify()
    {
        // 로그인 필요
        $this->load->view('student/header_v');
        $this->_require_login(site_url('/student/modify'));
        $this->load->view('student/navbar_v');
        $this->sidebar_student_list();

        $result = $this->student_m->modify(
            array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'grade1' => $this->input->post('grade1'),
                'school_name' => $this->input->post('school_name'),
                'grade2' => $this->input->post('grade2'),
                'class_name' => $this->input->post('class_name'),
                'class_day1' => $this->input->post('class_day1'),
                'class_time1' => $this->input->post('class_time1'),
                'class_day2' => $this->input->post('class_day2'),
                'class_time2' => $this->input->post('class_time2'),
                'class_day3' => $this->input->post('class_day3'),
                'class_time3' => $this->input->post('class_time3'),
                'memo' => $this->input->post('memo'),
                'fees' => $this->input->post('fees'),
                'flag' => $this->input->post('flag')
            )
        );

        //$this->cache->delete('students');
        if (!$result) {
            alert( "업데이트가 실패했습니다.", site_url('/student/get/' . $this->input->post('id')));
        }

        else {
            alert( "업데이트가 성공했습니다.", site_url('/student/get/' . $this->input->post('id')));
        }

        $this->load->view('student/footer_v');
    }
}
