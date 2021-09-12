<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getHero()
	{
		return $this->db->get('hero');
	}

	public function getFitur()
	{
		return $this->db->get('fitur');
	}

	public function getDemo()
	{
		return $this->db->get('demo');
	}

	public function getKontak()
	{
		return $this->db->get('kontak');
	}

}

/* End of file ModelName.php */
