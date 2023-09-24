<?php
class Errors extends CI_controller{
	public function notfound(){

		$this->load->view('error/404');

	}
}
?>