<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['header'] = "frontend/layout/header_main";
		$data['content'] = "home";
		$data['other_css'] = array(
			'frontend/css/pages/home.css'
		);

		$data['other_js'] = array(
			'frontend/js/pages/home.js'
		);

		$this->load->view('frontend/layout/main', $data, FALSE);
	}
}

/* End of file Content.php */
/* Location: ./application/modules/frontend/content/controllers/Content.php */