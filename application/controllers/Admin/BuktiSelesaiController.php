<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuktiSelesaiController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
		if (!$this->session->userdata('level')) :
			redirect('Auth/BlockedController');
		endif;
		$this->load->model('BuktiSelesai_m');
		$this->load->model('Pengaduan_m');
		$this->load->model('Petugas_m');
	}

	public function index()
	{
		$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$id_pengaduan = htmlspecialchars($this->input->post('id', true));
		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();

		if (!empty($cek_data)) :

			$this->form_validation->set_rules('id', 'id', 'trim|required');
			$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
			$this->form_validation->set_rules('foto_bukti', 'Foto Bukti', 'trim');

			if ($this->form_validation->run() == FALSE) :

				$data['title'] = 'Laporin! | Laporan Diproses';
				$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_id(htmlspecialchars($id_pengaduan))->row_array();

				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/tanggapan_proses');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');

			else :
				$upload_foto = $this->upload_foto('foto_bukti'); // parameter nama foto
				if ($upload_foto == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Upload foto pengaduan gagal, hanya png,jpg dan jpeg yang dapat di upload!
					</div>');

					redirect('Admin/TanggapanController/tanggapan_proses');

				else :

					$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

					$params = [
						'id_pengaduan'		=> $id_pengaduan,
						'tgl_selesai'		=> date('Y-m-d'),
						'pesan'			    => htmlspecialchars($this->input->post('pesan', true)),
						'foto_bukti'		=> $upload_foto,
						'id_petugas'		=> $petugas['id_petugas'],
					];

					$resp = $this->db->insert('bukti_selesai', $params);

					if ($resp) :

						$params = [
							'status' => 'selesai',
						];

						$update_status_pengaduan = $this->db->update('pengaduan', $params, ['id_pengaduan' =>  $id_pengaduan]);

						if ($update_status_pengaduan) :

							$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
							Menyelesaikan laporan berhasil
							</div>');

							redirect('Admin/TanggapanController/tanggapan_proses');

						else :
							$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Gagal Update Pengaduan!
							</div>');

							redirect('Admin/TanggapanController/tanggapan_proses');
						endif;
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Menyelesaikan laporan gagal!
						</div>');

						redirect('Admin/TanggapanController/tanggapan_proses');
					endif;
				endif;
			endif;
		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController/tanggapan_proses');
		endif;
	}

	public function bukti_tolak()
	{
		$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$id_pengaduan = htmlspecialchars($this->input->post('id', true));
		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();

		if (!empty($cek_data)) :

			$this->form_validation->set_rules('id', 'id', 'trim|required');
			$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
			$this->form_validation->set_rules('foto', 'Foto Bukti', 'trim');

			if ($this->form_validation->run() == FALSE) :

				$data['title'] = 'Laporin! | Laporan Ditolak';
				$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_id(htmlspecialchars($id_pengaduan))->row_array();

				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/tanggapan_tolak');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');

			else :
				$upload_foto = $this->upload_foto('foto_bukti'); // parameter nama foto
				if ($upload_foto == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Upload foto pengaduan gagal, hanya png,jpg dan jpeg yang dapat di upload!
					</div>');

					redirect('Admin/TanggapanController/tanggapan_tolak');

				else :

					$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

					$params = [
						'id_pengaduan'		=> $id_pengaduan,
						'tgl_selesai'		=> date('Y-m-d'),
						'pesan'			    => htmlspecialchars($this->input->post('pesan', true)),
						'foto_bukti'		=> $upload_foto,
						'id_petugas'		=> $petugas['id_petugas'],
					];

					$resp = $this->db->insert('bukti_selesai', $params);

					if ($resp) :

						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
							Upload bukti tolak berhasil
							</div>');

						redirect('Admin/TanggapanController/tanggapan_tolak');

					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload bukti tolak gagal!
							</div>');

						redirect('Admin/TanggapanController/tanggapan_tolak');
					endif;
				endif;
			endif;
		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController/tanggapan_tolak');
		endif;
	}

	private function upload_foto($foto)
	{
		$config['upload_path']          = './assets/bukti/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2048;
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($foto)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}
}
