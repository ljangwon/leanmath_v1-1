<?php
class Payment3 extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('payment2'), 10);

		$this->load->model('payment_m');
		$this->load->model('student_m');
	}
	function index()
	{
		$this->load->view(
			'common/s1_head_v',
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
			'payment3/s4_payment3_v',
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
			'payment3/s6_payment3_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'payment3/s7_payment3_script_v',
			array()
		);
	}

	function payment_list()
	{
		if ($this->input->post('pay_status') == '전체') {

			$data = $this->payment_m->payment_list(
				array(
					'p.year' => $this->input->post('year'),
					'p.month' => $this->input->post('month'),
				)
			);
		} else {
			$data = $this->payment_m->payment_list(
				array(
					'p.year' => $this->input->post('year'),
					'p.month' => $this->input->post('month'),
					'p.pay_status' => $this->input->post('pay_status')
				)
			);
		}
		echo json_encode($data);
	}

	function save()
	{
		$data = $this->payment_m->save_payment(
			array(
				'workspace' => $this->session->userdata('workspace'),
				'year'  => $this->input->post('year'),
				'month' => $this->input->post('month'),
				'st_id' => $this->input->post('st_id'),
				'name' 	=>  $this->input->post('st_name'),
				'pay_status'  => "미납"
			)
		);
		echo json_encode($data);
	}

	function add_payment_by_month()
	{
		$data = $this->payment_m->add_payment_by_month(
			array(
				'workspace' => $this->session->userdata('workspace'),
				'year' => $this->input->post('year'),
				'month' => $this->input->post('month'),
				'pay_status' => '미납'
			)
		);
		echo json_encode($data);
	}

	function update_discount()
	{
		$data = $this->payment_m->update_discount(
			array(
				'payment_id' => $this->input->post('payment_id'),
				'pay_status' => $this->input->post('pay_status'),
				'regular_price' => $this->input->post('regular_price'),
				'discount1' => $this->input->post('discount1'),
				'discount2' => $this->input->post('discount2'),
				'return_price' => $this->input->post('return_price'),
				'discount_memo' => $this->input->post('discount_memo'),
				'receipt_use' => $this->input->post('receipt_use'),
				'receipt_phone' => $this->input->post('receipt_phone'),
				'net_income' => $this->input->post('net_income')
			)
		);
		echo json_encode($data);
	}

	function update_pay_status()
	{
		$data = $this->payment_m->update_pay_status(
			array(
				'payment_id' => $this->input->post('payment_id'),
				'pay_status' => $this->input->post('pay_status')
			)
		);

		echo json_encode($data);
	}

	function update_receipt_status()
	{
		$data = $this->payment_m->update_receipt_status(
			array(
				'payment_id' => $this->input->post('payment_id')
			)
		);
		echo json_encode($data);
	}

	function delete()
	{
		$data = $this->payment_m->delete_payment();
		echo json_encode($data);
	}

	function month_delete()
	{
		$data = $this->payment_m->month_delete(
			array(
				'workspace' => $this->session->userdata('workspace'),
				'year' => $this->input->post('year_del'),
				'month' => $this->input->post('month_del')
			)
		);
		echo json_encode($data);
	}
}
