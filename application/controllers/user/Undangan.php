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

	function alpha_dash_space($str)
{
    return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
} 

	public function form_reguler()
	{
		$CI = &get_instance();

	if ($CI->session->userdata('user_data') == TRUE || $CI->session->userdata('email')) 

{
	$this->form_validation->set_rules('mempelaipria', 'Mempelaipria', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Mempelai Pria tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Mempelai Pria Tidak Boleh Mengandung Angka'
	]);

	$this->form_validation->set_rules('mempelaiwanita', 'Mempelaiwanita', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Mempelai Wanita tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Mempelai Wanita Tidak Boleh Mengandung Angka'
	]);

	$this->form_validation->set_rules('bapak_mempelaipria', 'Bapak_mempelaipria', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Bapak Dari Mempelai Pria tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Bapak Dari Mempelai Pria Tidak Boleh Mengandung Angka'
	]);

	$this->form_validation->set_rules('ibu_mempelaipria', 'Ibu_mempelaipria', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Ibu Dari Mempelai Pria tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Ibu Dari Mempelai Pria Tidak Boleh Mengandung Angka'
	]);

	$this->form_validation->set_rules('bapak_mempelaiwanita', 'Bapak_mempelaiwanita', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Bapak Dari Mempelai Wanita tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Bapak Dari Mempelai Wanita Tidak Boleh Mengandung Angka'
	]);

	$this->form_validation->set_rules('ibu_mempelaiwanita', 'Ibu_mempelaiwanita', 'required|callback_alpha_dash_space', [
		'required' => 'Nama Ibu Dari Mempelai Wanita tidak boleh kosong.',
		'alpha_dash_space' => ' Nama Ibu Dari Mempelai Wanita Tidak Boleh Mengandung Angka'
	]);
	
		$this->form_validation->set_rules('subdomain', 'Subdomain', 'required|alpha', [
			'required' => 'Nama Mempelai Pria tidak boleh kosong.',
			'alpha' => 'Tidak Boleh Mengandung Angka Dan Spasi'
		]);



		if ($this->form_validation->run() == FALSE) {
			$data = [
				"user" => $this->db->get_where('users', ['email' =>$this->session->userdata('email')])->row_array(),
				'title' => 'Form Undangan Reguler | Yukakad',
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


			$count = count($_FILES['foto_preweeding']['name']);
    
      for($i=0;$i<$count;$i++){
    
        if(!empty($_FILES['foto_preweeding']['name'][$i])){
    
          $_FILES['file']['name'] = $_FILES['foto_preweeding']['name'][$i];
          $_FILES['file']['type'] = $_FILES['foto_preweeding']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['foto_preweeding']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['foto_preweeding']['error'][$i];
          $_FILES['file']['size'] = $_FILES['foto_preweeding']['size'][$i];
  
          $config['upload_path'] = './assets/user/img/foto/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['file_name'] = $_FILES['foto_preweeding']['name'][$i];
   
          $this->load->library('upload',$config); 
    
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
						
   
						$foto[$i]['foto'] = $uploadData['file_name'];
            $foto[$i]['slug_form']= $this->input->post('subdomain');
						// $foto['foto'][] = $filename;
						// $foto['slug_form'][] = $this->input->post('subdomain');
          }
        }
   
   }

			$this->db->insert('form_reguler', $data);
			$this->db->insert_batch('foto_formundangan',$foto);
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
			"foto_preweeding" => $this->db->get_Where('foto_formundangan', array('slug_form'=> $this->uri->segment(1)))->result_array(),
			"foto_preweeding2" => $this->db->get_Where('foto_formundangan', array('slug_form'=> $this->uri->segment(1)))->result_array(),
		];

		$this->load->view('user/undangan/'.$data['undangan']['slug_undangan'].'/'.$data['undangan']['slug_undangan'], $data, FALSE);
	}

}

/* End of file Dashboard.php */