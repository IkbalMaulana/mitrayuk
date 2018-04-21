<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends MY_Controller {

	public function index()
	{
		
	}

	public function get($par="")
	{

		$post = $this->input->post();

		if ($par == 'vContact') {
			$data['data'] = $this->db->where('idContact', $post['id'])->get('contact_us')->row();
		}

		$this->load->view('modal/'.$par, $data, FALSE);

	}

}

/* End of file Data.php */
/* Location: ./application/modules/backend/app/controllers/Data.php */