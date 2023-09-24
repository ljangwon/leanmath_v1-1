<?php
class Kakao extends My_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{

		$this->load->view(
			'kakao/main_v_t2',
			array()
		);
	}
}
