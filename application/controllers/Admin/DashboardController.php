<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
		if (!$this->session->userdata('level')) :
			redirect('Auth/BlockedController');
		endif;
	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Laporin! | Dashboard';

		$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$data['user'] = $petugas;

		$data['masyarakat'] = $this->db->get('masyarakat')->num_rows();
		$data['petugas'] = $this->db->get('petugas')->num_rows();
		$data['pengaduan'] = $this->db->get('pengaduan')->num_rows();
		$data['pengaduan_proses'] = $this->db->get_where('pengaduan', ['status' => 'proses'])->num_rows();
		$data['pengaduan_selesai'] = $this->db->get_where('pengaduan', ['status' => 'selesai'])->num_rows();
		$data['pengaduan_tolak'] = $this->db->get_where('pengaduan', ['status' => 'tolak'])->num_rows();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}
}

/* End of file DashboardController.php */
/* Location: ./application/controllers/Admin/DashboardController.php */
