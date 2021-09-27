<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
	}

	//hero
	public function hero()
	{
		$data = [
			"title" => "Hero",
            "hero" => $this->admin->getHero()->row_array(),
			"page" => "admin/cms/hero"
		];


		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function editHero()
	{
		$this->form_validation->set_rules('heading', 'Heading', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('subheading', 'Subheading', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('cek', 'Cek', 'required', [
			'required' => 'Harap ceklis yakin jika ingin mengubah'
		]);

		if ($this->form_validation->run() == FALSE) {
			
			$this->hero();
			
		} else {
			$data = [
				'heading' 	=> $this->input->post('heading'),
				'subheading' => $this->input->post('subheading')
			];

			$this->admin->editHero('1', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Hero Berhasil Diedit!", "success");');
			redirect(base_url('cms-hero'));
		}
	}

	//end of hero

    public function fitur()
	{
		$data = [
			"title" => "Fitur",
			"page" => "admin/cms/fitur",
			"fitur" => $this->admin->getFitur()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	// CMS demo

	public function demo()
	{
		$data = [
			"title" => "Demo",
			"page" => "admin/cms/demo",
			"demo" => $this->admin->getDemo()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function editdemo()
	{
		$this->form_validation->set_rules('heading1', 'Heading', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('subheading1', 'Subheading', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('cek', 'Cek', 'required', [
			'required' => 'Harap ceklis yakin jika ingin mengubah'
		]);

		if ($this->form_validation->run() == FALSE) {
			
			$this->demo();
			
		} else {
			$data = [
				'heading1' 	=> $this->input->post('heading1'),
				'subheading1' => $this->input->post('subheading1')
			];

			$this->admin->editdemo('1', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Demo Berhasil Diedit!", "success");');
			redirect(base_url('cms-demo'));
		}
	}

	//end of cms demo
	
	//cms Kontak
	public function kontak()
	{
		$data = [
			"title" => "Kontak",
			"page" => "admin/cms/kontak",
			"kontak" => $this->admin->getKontak()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function editKontak()
	{
		$this->form_validation->set_rules('heading1', 'Heading', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('subheading1', 'Subheading', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required', [
			'required' => 'Whatsapp tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('cek', 'Cek', 'required', [
			'required' => 'Harap ceklis yakin jika ingin mengubah'
		]);

		if ($this->form_validation->run() == FALSE) {
			
			$this->kontak();
			
		} else {
			$data = [
				'heading1' 	=> $this->input->post('heading1'),
				'subheading1' => $this->input->post('subheading1'),
				'whatsapp' => $this->input->post('whatsapp')
			];

			$this->admin->editKontak('1', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Whatsapp Berhasil Diedit!", "success");');
			redirect(base_url('cms-kontak'));
		}
	}

	//end of cms kontak

	public function footer()
	{
		$data = [
			"title" => "Footer",
			"page" => "admin/cms/footer",
			"footer" => $this->admin->getFooter()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

}

/* End of file Cms.php */


