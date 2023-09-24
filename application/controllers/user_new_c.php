<?php
class User_new_c extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('user_new_c'), 10);

		$this->load->model('student_m');

		$this->load->model('user_new_m');
	}

	function index()
	{
		$this->get_list();
	}

	function ajax_get_list()
	{
		// POST data
		//$postData = $this->input->post();

		// Get data
		$data = $this->user_new_m->get_list();

		echo json_encode($data);
	}

	function ajax_add()
	{
		if (!function_exists('password_hash')) {
			$this->load->helper('password');
		}
		$hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$this->load->model('user_new_m');
		$data = $this->user_new_m->add(
			array(
				'email' => $this->input->post('email'),
				'password' => $hash,
				'name' => $this->input->post('name')
			)
		);
		$this->session->set_flashdata('msg', '회원가입에 성공했습니다.');
		echo json_encode($data);
	}

	function ajax_delete()
	{
		$this->load->model('user_new_m');
		$data = $this->user_new_m->delete(
			$this->input->post('id')
		);

		echo json_encode($data);
	}

	function ajax_password_change()
	{
		// change password
		if (!function_exists('password_hash')) {
			$this->load->helper('password');
		}

		if ($this->input->post('new_password')) {
			$hash = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);
		}
		$this->load->model('user_new_m');
		$user = $this->user_new_m->getByEmail(
			array(
				'email' => $this->input->post('user_email')
			)
		);

		if (
			$this->input->post('email') == $user->email &&
			password_verify($this->input->post('old_password'), $user->password)
		) {

			$data = $this->user_new_m->modify(
				array(
					'id' => $user->id,
					'email' => $user->email,
					'password' => $hash
				)
			);

			echo json_encode($data);
		} else {
			return false;
		}
	}

	function get_list()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$this->load->view(
			'user_new/s1_head_v',
			array()
		);

		$students = $this->student_m->gets();

		$this->load->view(
			'common/s2_sidebar_v',
			array(
				'students' => $students
			)
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		$this->load->view(
			'user_new/s4_user_list_v',
			array()
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'user_new/s6_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'user_new/s7_script_v',
			array()
		);
	}
}
