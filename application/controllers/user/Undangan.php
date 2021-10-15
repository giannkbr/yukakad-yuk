<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Undangan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('email')) { //pengecekan login atau tidak
        //     redirect('user/auth');
        // }
		$this->load->model('Admin_model', 'admin');
	}
	
	public function demo()
	{
		$data = [
			"title" => "Demo",
			"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array()
		];

		$this->load->view('user/demo/'.$this->uri->segment(2).'/'.$this->uri->segment(2), $data, FALSE);
	}

    public function harga()
	{
		$data = [
			"title" => "Yukakad | Cek Harga",
      "page" =>  "user/cekharga",
			"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array(),
      "undangan" =>  $this->admin->joinFitur('undangan', $this->uri->segment(2))->row_array(),
		];

		$this->load->view('user/templates/app', $data, FALSE);
	}

	public function form_reguler()
	{
		$CI = &get_instance();

	if ($CI->session->userdata('user_data') == TRUE) 

{
		$this->form_validation->set_rules('subdomain', 'Subdomain', 'required|alpha', [
			'required' => 'Nama Mempelai Pria tidak boleh kosong.',
			'alpha' => 'Tidak Boleh Mengandung Angka Dan Spasi'
		]);



		if ($this->form_validation->run() == FALSE) {
			$data = [
				"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array(),
				'title' => 'Demo Undangan',
				'page' => 'user/formreguler',
			];
			$this->load->view('user/templates/app', $data);
		} else {
			$data = [
				'email' => $this->input->post('email'),
				'mempelai_pria' => $this->input->post('mempelaipria'),
				'mempelai_wanita' => $this->input->post('mempelaiwanita'),
				'bapak_mempelaipria' => $this->input->post('bapak_mempelaipria'),
				'ibu_mempelaipria' => $this->input->post('ibu_mempelaipria'),
				'bapak_mempelaiwanita' => $this->input->post('bapak_mempelaiwanita'),
				'ibu_mempelaiwanita' => $this->input->post('ibu_mempelaiwanita'),
				'tanggal_akad' => $this->input->post('tanggal_akad'),
				'tanggal_resepsi' => $this->input->post('tanggal_resepsi'),
				'lokasi_acara' => $this->input->post('alamat_acara'),
				'link_acara' => $this->input->post('link_alamatacara'),
				'lokasi_rumah' => $this->input->post('alamat_rumah'),
				'link_rumah' => $this->input->post('link_alamatrumah'),
				'slug' => $this->input->post('subdomain'),
				'slug_undangan' => $this->input->post('undangan')
				
			]; 

			$this->db->insert('form_reguler', $data);
			$this->session->set_flashdata('success-tambah', 'berhasil');

			redirect(base_url('dashboard'));
		}
	}
	else 
	{
			
			redirect('halaman-login','refresh');
			
	}
	}

	public function mengundang()
	{
		$data = [
			"title" => "Yukakad | Cek Harga",
      "page" =>  "user/formreguler",
			"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array(),
      "undangan" =>  $this->db->get_Where('form_reguler', array('slug'=> $this->uri->segment(1)))->row_array(),
		];

		$this->load->view('user/undangan/'.$data['undangan']['slug_undangan'].'/'.$data['undangan']['slug_undangan'], $data, FALSE);
	}

}

/* End of file Dashboard.php */