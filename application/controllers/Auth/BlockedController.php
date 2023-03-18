<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlockedController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		
	}

	// List all your items
	public function index()
	{
        $data['title'] = 'Bloked';
        $this->load->view('_partials/v_header', $data);
        $this->load->view('blocked');
        $this->load->view('_partials/v_footer');
        $this->load->view('_partials/v_js');
	}
}

/* End of file BlockedController.php */
/* Location: ./application/controllers/Auth/BlockedController.php */
