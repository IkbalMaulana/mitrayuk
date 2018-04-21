<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		$data['content'] = 'frontend/pages/404';
		$data['non_footer'] = TRUE;
		$this->load->view('frontend/layout/main', $data, FALSE);	
	}

}

/* End of file 404.php */
/* Location: ./application/controllers/404.php */