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
			"title" => "Yukakad | Dashboard",
			"page" => "user/dashboard",
			"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array(),
			"cms_hero" => $this->db->get('cms_hero')->row_array(),
			"undangan"=> $this->db->get('undangan')->result_array(),
			"paket" => $this->db->get('cms_gruppaket')->result_array(),
			"fiturpaket" => $this->db->get('cms_fiturpaket')->result_array()
		];

		$this->load->view('user/templates/app', $data, FALSE);
	}

}

/* End of file Dashboard.php */