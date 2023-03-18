<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
	}

	// List all your items
	public function index()
	{
        $data['title'] = 'Laporin! | Profile';

        $masyarakat = $this->db->get_where('masyarakat',['username' => $this->session->userdata('username')])->row_array();
		$petugas = $this->db->get_where('petugas',['username' => $this->session->userdata('username')])->row_array();

		if ($masyarakat == TRUE) :
			$data['user'] = $masyarakat;
		elseif ($petugas == TRUE) :
			$data['user'] = $petugas;
		endif;

        $this->load->view('_partials/v_header', $data);
        $this->load->view('_partials/v_sidebar');
        $this->load->view('_partials/v_topbar');
        $this->load->view('user/profile');
        $this->load->view('_partials/v_footer');
        $this->load->view('_partials/v_js');
	}
}

/* End of file ProfileController.php */
/* Location: ./application/controllers/User/ProfileController.php */
