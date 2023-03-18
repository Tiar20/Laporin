<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasyarakatController extends CI_Controller
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
		$data['title'] = 'Laporin! | Data Masyarakat';

		$data['masyarakat'] = $this->db->get('masyarakat')->result_array();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/data_masyarakat');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}

	public function delete($id)
	{

		$nik = htmlspecialchars($id); // id petugas

		$cek_data = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();

		if (!empty($cek_data)) :
			$resp = $this->db->delete('masyarakat', ['nik' => $nik]);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
				Akun berhasil dihapus
				</div>');

				redirect('Admin/MasyarakatController');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				Akun gagal dihapus!
				</div>');

				redirect('Admin/MasyarakatController');
			endif;
		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
			Data tidak ada
			</div>');

			redirect('Admin/MasyarakatController');
		endif;
	}

	public function edit($id)
	{
		$nik = htmlspecialchars($id); // id petugas

		$cek_data = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Laporin! | Edit masyarakat';
			$data['masyarakat'] = $cek_data;

			$this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha_numeric_spaces');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|callback_username_check');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/masyarakat');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');
			else :

				$params = [
					'nama'			=> htmlspecialchars($this->input->post('nama', TRUE)),
					'alamat'	    => htmlspecialchars($this->input->post('alamat', TRUE)),
					'telp'			=> htmlspecialchars($this->input->post('telp', TRUE)),
					'username'		=> htmlspecialchars($this->input->post('username', TRUE)),
				];

				$resp = $this->db->update('masyarakat', $params, ['nik' => $nik]);

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
					Akun masyarakat berhasil di edit
					</div>');

					redirect('Admin/MasyarakatController/');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Akun masyarakat gagal di edit!
					</div>');

					redirect('Admin/MasyarakatController/');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				Data tidak ada
				</div>');

			redirect('Admin/MasyarakatController/');
		endif;
	}

	public function username_check($str = NULL)
	{
		if (!empty($str)) :
			$masyarakat = $this->db->get_where('masyarakat', ['username' => $str])->row_array();

			$petugas = $this->db->get_where('petugas', ['username' => $str])->row_array();

			if ($masyarakat == true || $petugas == true) :

				$this->form_validation->set_message('username_check', 'Username ini sudah terdaftar ada.');

				return false;
			else :
				return true;
			endif;
		else :
			$this->form_validation->set_message('username_check', 'Inputan Kosong');

			return false;
		endif;
	}
}

/* End of file DashboardController.php */
/* Location: ./application/controllers/Admin/DashboardController.php */
