<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuktiSelesai_m extends CI_Model {

	private $table = 'bukti_selesai';
	private $primary_key = 'id_bukti';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

}

/* End of file BuktiSelesai_m.php */
/* Location: ./application/models/BuktiSelesai_m.php */