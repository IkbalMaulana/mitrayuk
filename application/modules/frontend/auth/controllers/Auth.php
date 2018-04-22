<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_auth', 'ma');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url(),'refresh');
		}
		else{

			$data['content'] = "login_content";
			$data['header'] = "non";

			if (@$this->input->get('r') == "true") {
				$data['alert'] = "";
			}
			else{
				$data['alert'] = "hidden";
			}
			$data['other_css'] = array(
				'frontend/css/pages/auth.css',
				'frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.css',			
			);
			$data['other_js'] = "frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.js";
			$data['non_footer'] = TRUE;		
			$this->load->view('frontend/layout/main', $data);
		}
	}

	public function register($status="")
	{

		$data['content'] = "login_content";
		$data['header'] = "non";

		if (@$this->input->get('r') == "false") {
			$data['alert'] = "";
		}
		else{
			$data['alert'] = "hidden";
		}

		if (@$this->input->get('l') == "false") {
			$data['alertLogin'] = "";
		}
		else{
			$data['alertLogin'] = "hidden";
		}
		$data['other_css'] = array(
			'frontend/css/pages/auth.css',
			'frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.css',			
		);
		$data['other_js'] = array("frontend/plugins/bootstrap-datepicker/bootstrap-datepicker.js", "frontend/js/pages/auth.js"); 

		$data['content'] = "register_content";
		$data['non_footer'] = TRUE;		
		$this->load->view('frontend/layout/main', $data);
	}

	public function regist($value='')
	{
		$data =  $this->input->post();
		$data['password'] 	=  md5(md5($data['password']));
		$data['dob'] 		=  date('Y-m-d',strtotime($data['dob']));
		
		$ret = $this->ma->register($data);

		if ($ret) {
			redirect(base_url().'/auth/login?r=true','refresh');
		}
		else{
			redirect(base_url().'/auth/register?r=false','refresh');
		}
	}

	public function log($value='')
	{
		$data =  $this->input->post();
		$data['password'] 	=  md5(md5($data['password']));		
		$ret = $this->ma->login($data);

		if ($ret) {
			$sess = array(
				'name' => $ret->name,
				'type' => $ret->type,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sess);
			print_r("good!, logged in");
		}
		else{
			redirect(base_url().'/auth/login?l=false','refresh');
		}
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