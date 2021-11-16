<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		// if (!$this->ion_auth->is_admin())
    // {
    //   $this->session->set_flashdata('message', 'You must be an admin to view this page');
    //   redirect('dashboard');
    // }
	}

	//CMS hero
	public function hero()
	{
		$data = [
			"title" => "CMS Hero",
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
			$this->session->set_flashdata('success-ubah', 'berhasil');
			redirect(base_url('cms-hero'));
		}
	}

	//end of CMS hero

    public function fitur()
	{
		$data = [
			"title" => "CMS Fitur",
			"page" => "admin/cms/fitur",
			"fitur" => $this->admin->getFitur()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function editFitur()
	{
		$this->form_validation->set_rules('heading1', 'Heading1', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('subheading1', 'Subheading1', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('heading2', 'Heading2', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);
		

		$this->form_validation->set_rules('subheading2', 'Subheading2', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('cek', 'Cek', 'required', [
			'required' => 'Harap ceklis yakin jika ingin mengubah'
		]);

		if ($this->form_validation->run() == FALSE) {
			
			$this->hero();
			
		} else {
			$data = [
				'heading1' 	=> $this->input->post('heading1'),
				'subheading1' => $this->input->post('subheading1'),
				'heading2' 	=> $this->input->post('heading2'),
				'subheading2' => $this->input->post('subheading2'),
			];

			$this->admin->editfitur('1', $data);
			$this->session->set_flashdata('success-ubah', 'berhasil');
			redirect(base_url('cms-hero'));
		}
	}

	// CMS demo

	public function demo()
	{
		$data = [
			"title" => "CMS Demo",
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
			$this->session->set_flashdata('success-ubah', 'berhasil');
			redirect(base_url('cms-demo'));
		}
	}

	public function listdemo()
	{
		$data = [
			"title" => "List Demo",
			"page" => "admin/cms/listdemo",
			"listdemo" => $this->admin->getListdemo()->result_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	//end of cms demo
	
	//cms Kontak
	public function kontak()
	{
		$data = [
			"title" => "CMS Kontak",
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
			$this->session->set_flashdata('success-ubah', 'berhasil');
			redirect(base_url('cms-kontak'));
		}
	}

	//end of cms kontak

	public function footer()
	{
		$data = [
			"title" => "CMS Footer",
			"page" => "admin/cms/footer",
			"footer" => $this->admin->getFooter()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function editFooter()
	{
		$this->form_validation->set_rules('heading1', 'Heading', 'required', [
			'required' => 'Heading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('copyright', 'Copyright', 'required', [
			'required' => 'Subheading tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('instagram', 'Instagram', 'required', [
			'required' => 'Whatsapp tidak boleh kosong.'
		]);

		$this->form_validation->set_rules('cek', 'Cek', 'required', [
			'required' => 'Harap ceklis yakin jika ingin mengubah'
		]);

		if ($this->form_validation->run() == FALSE) {
			
			$this->footer();
			
		} else {
			$data = [
				'heading1' 	=> $this->input->post('heading1'),
				'copyright' => $this->input->post('copyright'),
				'instagram' => $this->input->post('instagram')
			];

			$this->admin->editFooter('1', $data);
			$this->session->set_flashdata('success-ubah', 'berhasil');
			redirect(base_url('cms-footer'));
		}
	}

	public function paket()
	{
		$data = [
			"title" => "CMS Paket",
			"page" => "admin/cms/paket",
			"paket" => $this->admin->getPaket()->result_array(),
			"fiturpaket" => $this->admin->getFiturPaket()->result_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

}

/* End of file Cms.php */