<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
	}
	
	public function hero()
	{
		$data = [
			"title" => "Hero",
            "hero" => $this->admin->getHero()->row_array(),
			"page" => "admin/cms/hero"
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

    public function fitur()
	{
		$data = [
			"title" => "Fitur",
			"page" => "admin/cms/fitur",
			"fitur" => $this->admin->getFitur()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function demo()
	{
		$data = [
			"title" => "Demo",
			"page" => "admin/cms/demo",
			"demo" => $this->admin->getDemo()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

	public function kontak()
	{
		$data = [
			"title" => "Kontak",
			"page" => "admin/cms/kontak",
			"kontak" => $this->admin->getKontak()->row_array()
		];

		$this->load->view('admin/templates/app', $data, FALSE);
	}

}

/* End of file Cms.php */


