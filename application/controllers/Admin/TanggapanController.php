<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TanggapanController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
		if (!$this->session->userdata('level')) :
			redirect('Auth/BlockedController');
		endif;
		$this->load->model('Tanggapan_m');
		$this->load->model('Pengaduan_m');
		$this->load->model('Petugas_m');
	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Laporin! | Semua Laporan';
		$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan()->result_array();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/pengaduan_list');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}

	public function pengaduan_detail()
	{
		$id = htmlspecialchars($this->input->post('id', true)); // id pengaduan

		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Laporin! | Beri Tanggapan';
			$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_id(htmlspecialchars($id))->row_array();

			$this->load->view('_partials/v_header', $data);
			$this->load->view('_partials/v_sidebar');
			$this->load->view('_partials/v_topbar');
			$this->load->view('admin/tanggapan_tambah');
			$this->load->view('_partials/v_footer');
			$this->load->view('_partials/v_js');

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController');
		endif;
	}

	public function tanggapan_selesai_detail($id)
	{

		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => htmlspecialchars($id)])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Laporin! | Detail Laporan Selesai';

			$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_tanggapan(htmlspecialchars($id))->row_array();
			if ($data['data_pengaduan']) :
				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/tanggapan_selesai_detail');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Laporan selesai!
					</div>');

				redirect('Admin/TanggapanController/tanggapan_selesai');
			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController/tanggapan_selesai');
		endif;
	}

	public function tanggapan_tolak_detail($id)
	{

		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => htmlspecialchars($id)])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Laporin! | Detail Laporan Ditolak';

			$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_tanggapan(htmlspecialchars($id))->row_array();
			if ($data['data_pengaduan']) :
				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/tanggapan_tolak_detail');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Bukti Tolak belum di upload!
					</div>');

				redirect('Admin/TanggapanController/tanggapan_tolak');
			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController/tanggapan_tolak');
		endif;
	}

	public function tanggapan_proses()
	{
		$data['title'] = 'Laporin! | Laporan Diproses';
		$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_proses()->result_array();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/tanggapan_proses_list');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}

	public function tanggapan_selesai()
	{
		$data['title'] = 'Laporin! | Laporan Selesai Dikerjakan';
		$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_selesai()->result_array();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/tanggapan_selesai_list');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}

	public function tanggapan_tolak()
	{
		$data['title'] = 'Laporin! | Laporan Ditolak';
		$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_tolak()->result_array();

		$this->load->view('_partials/v_header', $data);
		$this->load->view('_partials/v_sidebar');
		$this->load->view('_partials/v_topbar');
		$this->load->view('admin/tanggapan_tolak_list');
		$this->load->view('_partials/v_footer');
		$this->load->view('_partials/v_js');
	}

	public function tambah_tanggapan()
	{
		$id_pengaduan = htmlspecialchars($this->input->post('id', true));
		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();

		if (!empty($cek_data)) :

			$this->form_validation->set_rules('id', 'id', 'trim|required');
			$this->form_validation->set_rules('status', 'Status Pengaduan', 'trim|required');
			$this->form_validation->set_rules('tanggapan', 'Tanggapan', 'trim|required');

			if ($this->form_validation->run() == FALSE) :

				$data['title'] = 'Laporin! | Beri Tanggapan';
				$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_id(htmlspecialchars($id_pengaduan))->row_array();

				$this->load->view('_partials/v_header', $data);
				$this->load->view('_partials/v_sidebar');
				$this->load->view('_partials/v_topbar');
				$this->load->view('admin/tanggapan_tambah');
				$this->load->view('_partials/v_footer');
				$this->load->view('_partials/v_js');

			else :

				$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

				$params = [
					'id_pengaduan'		=> $id_pengaduan,
					'tgl_tanggapan'		=> date('Y-m-d'),
					'tanggapan'			=> htmlspecialchars($this->input->post('tanggapan', true)),
					'id_petugas'		=> $petugas['id_petugas'],
				];

				$menanggapi = $this->db->insert('tanggapan', $params);

				if ($menanggapi) :

					$params = [
						'status' => $this->input->post('status', true),
					];

					$update_status_pengaduan = $this->db->update('pengaduan', $params, ['id_pengaduan' =>  $id_pengaduan]);

					if ($update_status_pengaduan) :

						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
							Menanggapi berhasil
							</div>');

						redirect('Admin/TanggapanController');

					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Gagal Update Pengaduan
							</div>');

						redirect('Admin/TanggapanController');
					endif;


				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Menanggapi gagal!
						</div>');

					redirect('Admin/TanggapanController');
				endif;

			endif;
		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController');
		endif;
	}
}

/* End of file TanggapanController.php */
/* Location: ./application/controllers/Admin/TanggapanController.php */
