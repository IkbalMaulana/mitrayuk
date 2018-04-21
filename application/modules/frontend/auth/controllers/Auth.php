<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->login();
	}

	public function login()
	{

		$data['content'] = "login_content";
		$data['header'] = "non";

		
		$data['other_css'] = array(
			'frontend/css/pages/auth.css',
			'frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.css',			
		);
		$data['other_js'] = "frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.js";
		$data['non_footer'] = TRUE;		
		$this->load->view('frontend/layout/main', $data);
	}

	public function register()
	{

		$data['content'] = "login_content";
		$data['header'] = "non";

		
		$data['other_css'] = array(
			'frontend/css/pages/auth.css',
			'frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.css',			
		);
		$data['other_js'] = array("frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.js", "frontend/js/pages/auth.js"); 

		$data['content'] = "register_content";
		$data['non_footer'] = TRUE;		
		$this->load->view('frontend/layout/main', $data);
	}

	public function reset_password()
	{

		$code = $this->input->get('code');
		
		$this->load->model('auth/Model_auth');

		$cek = $this->Model_auth->customer_confirmation($code,array('confirmation_type' => 'reset_password'));

		if ($cek) {
			$data['other_js'] = "frontend/vue/reset_password.js";		
			$data['other_css'] = "frontend/css/pages/auth.css";
			$data['content'] = "reset_password";
			$data['non_header'] = TRUE;
			$data['non_footer'] = TRUE;		
			$this->load->view('frontend/layout/main', $data);
		}else{
			redirect(base_url());
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */