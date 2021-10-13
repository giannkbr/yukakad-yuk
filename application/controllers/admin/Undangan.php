<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Undangan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');
		// if (!$this->ion_auth->is_admin())
    // {
    //   $this->session->set_flashdata('message', 'You must be an admin to view this page');
    //   redirect('dashboard');
    // }
	}
     
	public function demo()
	{
		$data = [
			"title" => "Demo Undangan",
			"page" => "admin/undangan/demoundangan",
      "demoundangan" => $this->db->get('undangan')->result_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}


	public function tambahdemo()
    {

	
			$this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[undangan.nama_undangan]', [
				'required' => 'Nama Karyawan tidak boleh kosong.',
				'is_unique' => 'Nama Tidak Boleh Sama Dengan Undangan Lainnya'
			]);
	
			$this->form_validation->set_rules('paket', 'Paket', 'required', [
				'required' => 'Paket tidak boleh kosong.'
			]);
	
			$this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric', [
				'required' => 'Jenis Kelamin tidak boleh kosong.',
				'numeric' => 'Harus Berupa Angka'
			]);
	
	
			if ($this->form_validation->run() == FALSE) {
				$data = [
					'title' => 'Demo Undangan',
					'page' => 'admin/undangan/demoundangan',
					'demoundangan' => $this->db->get('undangan')->result_array(),
					'modal' => 'true'
				];
				$this->load->view('admin/templates/app', $data);
			} else {
				$title = trim(strtolower($this->input->post('nama')));
        $out = explode(" ",$title);
        $slug = implode("-",$out);
				$data = [
					'nama_undangan' => $this->input->post('nama'),
					'paket' => $this->input->post('paket'),
					'harga' => $this->input->post('harga'),
					'slug' => $slug
				];
	
				if (isset($_FILES['photo']['name'])) {
					$config['upload_path'] 		= './assets/user/img/template/';
					$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
					$config['overwrite']  		= true;
	
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('photo')) {
						$this->session->set_flashdata('gagal-tambah', 'gagal');
						redirect('admin-demoundangan');
					} else {
						$img = $this->upload->data();
						$data['image'] = $img['file_name'];
					}
				}
	
				$this->db->insert('undangan', $data);
				$this->db->insert('fitur_undangan', ['slug_undangan' => $slug ]);
				$this->session->set_flashdata('success-tambah', 'berhasil');
	
				redirect(base_url('admin-demoundangan'));
			}


    }


	

    public function hapusdemo($slug)
    {
			$data['foto'] = $this->db->get_where('undangan',['slug' => $slug])->row_array();
			$gambar_lama = $data['foto']['image'];
			unlink(FCPATH . 'assets/user/img/template/' . $gambar_lama);
		$this->admin->hapusdemo($slug);
		$this->session->set_flashdata('success-hapus', 'berhasil');
		redirect(base_url('admin-demoundangan'));
    }

}

/* End of file Dashboard.php */