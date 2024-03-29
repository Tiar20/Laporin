<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Masyarakat_m');
	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Laporin! | Register';

		$this->form_validation->set_rules('nik', 'Nik', 'trim|required|numeric|is_unique[masyarakat.nik]|max_length[16]');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric_spaces|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('_partials/login_header', $data);
			$this->load->view('register');
			$this->load->view('_partials/login_footer');
		else :
			$params = [
				'nik'			=> htmlspecialchars($this->input->post('nik', TRUE)),
				'nama'			=> htmlspecialchars($this->input->post('nama', TRUE)),
				'alamat'	    => htmlspecialchars($this->input->post('alamat', TRUE)),
				'username'		=> htmlspecialchars($this->input->post('username', TRUE)),
				'password'		=> password_hash(htmlspecialchars($this->input->post('password', TRUE)), PASSWORD_DEFAULT),
				'telp'			=> htmlspecialchars($this->input->post('telp', TRUE)),
				'foto_profile'	=> 'foto-user.png',
			];

			$resp = $this->Masyarakat_m->create($params);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
					Register berhasil, Silahkan Login!
					</div>');

				redirect('Auth/LoginController');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Register gagal!
					</div>');

				redirect('Auth/RegisterController');
			endif;

		endif;
	}

	public function username_check($str = NULL)
	{
		if (!empty($str)) :
			$masyarakat = $this->db->get_where('masyarakat', ['username' => $str])->row_array();

			$petugas = $this->db->get_where('petugas', ['username' => $str])->row_array();

			if ($masyarakat == TRUE or $petugas == TRUE) :

				$this->form_validation->set_message('username_check', 'Username ini sudah terdaftar ada.');

				return FALSE;
			else :
				return TRUE;
			endif;
		else :
			$this->form_validation->set_message('username_check', 'Inputan Kosong');

			return FALSE;
		endif;
	}
}

/* End of file RegisterController.php */
/* Location: ./application/controllers/Auth/RegisterController.php */
