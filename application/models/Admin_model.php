<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	//hero Model
	public function getHero()
	{
		return $this->db->get('hero');
	}

	public function editHero($id, $data)
	{
		$this->db->update('hero', $data, ['id_hero' => $id]);
		return $this->db->affected_rows();
	}

	//End Hero Model

	public function getFitur()
	{
		return $this->db->get('fitur');
	}

	//demo model
	public function getDemo()
	{
		return $this->db->get('demo');
	}

	public function editDemo($id, $data)
	{
		$this->db->update('demo', $data, ['id_demo' => $id]);
		return $this->db->affected_rows();
	}

	//end of demo model

	public function getKontak()
	{
		return $this->db->get('kontak');
	}

	public function editKontak($id, $data)
	{
		$this->db->update('kontak', $data, ['id_kontak' => $id]);
		return $this->db->affected_rows();
	}

	public function getFooter()
	{
		return $this->db->get('footer');
	}

}

/* End of file ModelName.php */
