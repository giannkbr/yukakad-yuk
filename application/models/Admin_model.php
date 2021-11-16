<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	//hero Model
	public function getHero()
	{
		return $this->db->get('cms_hero');
	}

	public function editHero($id, $data)
	{
		$this->db->update('cms_hero', $data, ['id_hero' => $id]);
		return $this->db->affected_rows();
	}

	//End Hero Model

	public function getFitur()
	{
		return $this->db->get('cms_fitur');
	}

	//demo model
	public function getDemo()
	{
		return $this->db->get('cms_demo');
	}
	public function getListdemo()
	{
		return $this->db->get('cms_listdemo');
	}

	public function editDemo($id, $data)
	{
		$this->db->update('cms_demo', $data, ['id_demo' => $id]);
		return $this->db->affected_rows();
	}

	//end of demo model

	public function getKontak()
	{
		return $this->db->get('cms_kontak');
	}

	public function editKontak($id, $data)
	{
		$this->db->update('cms_kontak', $data, ['id_kontak' => $id]);
		return $this->db->affected_rows();
	}

	public function getFooter()
	{
		return $this->db->get('cms_footer');
	}

	public function editFooter($id, $data)
	{
		$this->db->update('cms_footer', $data, ['id_footer' => $id]);
		return $this->db->affected_rows();
	}

	//End Of Model CMS

	public function joinFitur($table, $where)
	{
		$this->db->select('*');
        $this->db->from($table);
        $this->db->where('slug',$where);
        $this->db->join('fitur_undangan','fitur_undangan.slug_undangan = undangan.slug');
        return $this->db->get();
	}

	public function hapusdemo($where)
	{
		$this->db->where('slug',$where);
    $this->db->delete('undangan');
    $this->db->query("SET @num := 0;");
    $this->db->query("UPDATE undangan SET id_undangan = @num := (@num+1);");
    $this->db->query("ALTER TABLE undangan AUTO_INCREMENT = 1;");

		$this->db->where('slug_undangan',$where);
    $this->db->delete('fitur_undangan');
    $this->db->query("SET @num := 0;");
    $this->db->query("UPDATE fitur_undangan SET id_fiturundangan = @num := (@num+1);");
    $this->db->query("ALTER TABLE fitur_undangan AUTO_INCREMENT = 1;");
	}

	//paket Model
	public function getPaket()
	{
		return $this->db->get('cms_gruppaket');
	}

	public function getFiturPaket()
	{
		return $this->db->get('cms_fiturpaket');
	}

	// public function editHero($id, $data)
	// {
	// 	$this->db->update('cms_hero', $data, ['id_hero' => $id]);
	// 	return $this->db->affected_rows();
	// }

	//End Hero Model

}

/* End of file ModelName.php */