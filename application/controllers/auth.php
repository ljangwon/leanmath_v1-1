<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_new_m');
	}

	function index()
	{
		$this->login();
	}

	function login()
	{
		$this->_header();

		$this->load->view(
			'auth/login',
			array(
				'returnURL' => $this->input->get('returnURL')
			)
		);
		$this->_footer();;
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function register()
	{
		$this->_header();

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('auth/register');
		} else {
			if (!function_exists('password_hash')) {
				$this->load->helper('password');
			}
			$hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

			$this->user_new_m->add(
				array(
					'email' => $this->input->post('email'),
					'password' => $hash,
					'name' => $this->input->post('nickname')
				)
			);
			$this->session->set_flashdata('msg', '회원가입에 성공했습니다.');
			redirect(base_url());
		}

		$this->_footer();
	}

	function changePassword()
	{
		$this->_header();

		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email');
		$this->form_validation->set_rules('old_password', '이전 비밀번호', 'required');
		$this->form_validation->set_rules('new_password', '새 비밀번호', 'required|min_length[4]|max_length[30]|matches[re_password]');
		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('auth/changePassword');
		} else {
			if (!function_exists('password_hash')) {
				$this->load->helper('password');
			}

			if ($this->input->post('new_password')) {
				$hash = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);
			}

			$user = $this->user_new_m->getByEmail(
				array(
					'email' => $this->input->post('email')
				)
			);

			if (
				$this->input->post('email') == $user->email &&
				password_verify($this->input->post('old_password'), $user->password)
			) {

				$result = $this->user_new_m->modify(
					array(
						'id' => $user->id,
						'email' => $user->email,
						'password' => $hash
					)
				);

				$returnURL = $this->input->get('returnURL');
				if ($returnURL === false) {
					$returnURL = base_url();
				}

				if ($result) {
					$this->session->set_flashdata('msg', '비밀번호 변경에 성공했습니다.');
					alert($returnURL + '로 이동합니다.');
					redirect($returnURL);
				} else {
					alert('DB: 비밀번호 update에 실패했습니다.');
					$this->session->set_flashdata('msg', '비밀번호 변경에 실패 했습니다.');
					redirect(site_url('/auth/changePassword'));
				}
			} else {
				alert('이전 비밀번호가 다릅니다.');
				$this->session->set_flashdata('msg', '이전 비밀번호가 다릅니다.');
				redirect(site_url('/auth/changePassword'));
			}
		}
		$this->_footer();
	}

	function authentication()
	{

		$user = $this->user_new_m->getByEmail(
			array(
				'email' => $this->input->post('email')
			)
		);
		if (!function_exists('password_hash')) {
			$this->load->helper('password');
		}
		if (
			$this->input->post('email') == $user->email &&
			password_verify($this->input->post('password'), $user->password)
		) {
			$this->session->set_userdata('is_login', true);
			$this->session->set_userdata('email', $user->email);
			$this->session->set_userdata('name', $user->name);
			$this->session->set_userdata('year', c_year());
			$this->session->set_userdata('month', c_month());
			$this->session->set_userdata('level', $user->level);
			$this->session->set_userdata('workspace', $user->workspace);

			$returnURL = $this->input->get('returnURL');
			if ($returnURL === false) {
				$returnURL = base_url();
			}
			redirect($returnURL);
		} else {
			$this->session->set_flashdata('msg', '로그인에 실패 했습니다.');
			redirect(site_url('/auth/login'));
		}
	}

	function _header()
	{
		$this->load->view('student/header_v');
	}

	function _footer()
	{
		$this->load->view('student/footer_v');
	}

	function check_local_ip()
	{
		$ip = '';
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		if ($ip == '101.235.238.3') {
			return true;
		} else {
			return false;
		}
	}
}
