<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['header'] = "frontend/layout/header";
		$data['body']	= "grey";
		$data['content'] = "profile";
		$data['other_css'] = array(
			'frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.css',		
			'frontend/css/pages/profile.css'
		);
		$data['other_js'] =  array(
			"frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.js",
			"frontend/js/pages/profile.js"
		);

		$this->load->view('frontend/layout/main', $data, FALSE);
	}
}

/* End of file Content.php */
/* Location: ./application/modules/frontend/content/controllers/Content.php */