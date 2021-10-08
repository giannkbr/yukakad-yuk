<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('email')) { //pengecekan login atau tidak
        //     redirect('user/auth');
        // }
	}
	
	public function index()
	{
		$data = [
			"title" => "Dashboard",
			"page" => "user/dashboard",
			"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array()
		];

		$this->load->view('user/templates/app', $data, FALSE);
	}

}

/* End of file Dashboard.php */


