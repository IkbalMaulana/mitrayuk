<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['header'] = "frontend/layout/header";
		$data['content'] = "brand";

		$this->load->view('frontend/layout/main', $data, FALSE);
	}
}

/* End of file Content.php */
/* Location: ./application/modules/frontend/content/controllers/Content.php */