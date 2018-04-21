<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attributes extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if(hak_akses('view') === FALSE){
			show_errPrivilege();
			exit();
		}
		$data['data'] = $this->model->get('pengaturan_attribute');
		$data['content'] = 'attributes_content';
		$this->load->view('backend/main',$data,FALSE);
	}

	public function detail($id="")
	{
		if(hak_akses('create') === FALSE){
			show_errPrivilege();
			exit();
		}
		$get = $this->input->get();
		$data['idPAttribute'] = $id;
		$data['data'] = $this->model->join('pengaturan_attribute_detail','*',array(array('table'=>'pengaturan_attribute','parameter'=>'pengaturan_attribute_detail.idPAttribute=pengaturan_attribute.idPAttribute')),array('pengaturan_attribute_detail.idPAttribute'=>$id));
		$data['content'] = 'attributes_detail_content';
		$this->load->view('backend/main',$data,FALSE);
	}

	public function add($id="")
	{
		$get = $this->input->get();

		if ($id) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$data['idPAttribute'] = $id;
			$data['getAttributes'] = $this->model->get_where('pengaturan_attribute',array('idPAttribute'=>$id));
		}else{
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
		}

		if (isset($get['u'])) {
			$data['getAttributesDetail'] = $this->model->get_where('pengaturan_attribute_detail',array('idPAttribute'=>$get['u']));
			$data['content'] = 'attribute_detail_add';
		} else{
			$data['content'] = 'attribute_add';
		}

		$this->load->view('backend/main',$data,FALSE);
	}

	public function save()
	{
		$post = $this->input->post();
		if ($post['idPAttribute']) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$post['updateDate'] = date('Y-m-d H:i:s');
			$post['updateBy'] = $this->session->userdata('usernameUser');
			$this->model->update_data('pengaturan_attribute',$post,array('idPAttribute'=>$post['idPAttribute']));
		} else {
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
			$post['createDate'] = date('Y-m-d H:i:s');
			$post['createBy'] = $this->session->userdata('usernameUser');
			$this->model->insert_data('pengaturan_attribute',$post);
		}
		redirect('setting/attributes');
	}

	public function save_detail()
	{
		$post = $this->input->post();
		if ($post['idPAttributeDetail']) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$post['updateDate'] = date('Y-m-d H:i:s');
			$post['updateBy'] = $this->session->userdata('usernameUser');
			$this->model->update_data('pengaturan_attribute_detail',$post,array('idPAttributeDetail'=>$post['idPAttributeDetail']));
		} else {
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
			$post['createDate'] = date('Y-m-d H:i:s');
			$post['createBy'] = $this->session->userdata('usernameUser');
			$this->model->insert_data('pengaturan_attribute_detail',$post);
		}
		redirect('setting/attributes/detail/'.$post['idPAttribute']);
	}


}

/* End of file Attributes.php */
/* Location: ./application/modules/setting/controllers/Attributes.php */