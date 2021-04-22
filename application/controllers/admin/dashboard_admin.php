<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_admin extends CI_Controller {

	public function index()
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('admin/dashboard');
			$this->load->view('template/footer');
		}
		
}
