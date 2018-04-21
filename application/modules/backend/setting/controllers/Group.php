<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends MY_Controller {

	public function index()
	{
		if(hak_akses('view') === FALSE){
			show_errPrivilege();
			exit();
		}
		$data['data'] = $this->model->get('master_user_role');
		$data['content'] = 'group_content';
		$this->load->view('backend/main',$data,FALSE);
	}

	public function add($id="")
	{

		$data['content'] = 'group_add';

		if ($id) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$data['getRole'] = $this->model->get_where('master_user_role',array('idRole'=>$id));
		}else{
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
		}		
		$data['getModule'] = $this->model->get_where('master_module',array('statusModule' => 'Tampil'),'orderModule','asc');
		$this->load->view('backend/main',$data,FALSE);
	}

	public function save($id=""){

		$post = $this->input->post();

		$data = array(
			'namaRole' => $post['namaRole'],
			'descRole' => $post['descRole'],
			'statusRole' => $post['statusRole'],
			);

		if ($post['idRole']) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$idRole = $post['idRole'];
			$this->model->update_data('master_user_role',$data,array('idRole'=>$post['idRole']));
		}
		else{
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
			$this->db->insert('master_user_role',$data);
			$idRole = $this->db->insert_id();
		}
		
		$this->model->delete_data('role_module',array('idRole' => $idRole));

		foreach (@$post['idModule'] as $key) {
			$role = array(
				'idRole' => $idRole,
				'idModule' => $key,
				'createBy' => getMember('id'),
				'createDate' => date('Y-m-d H:i:s')
				);
			$this->model->insert_data('role_module',$role);
		}

		redirect('setting/group');
	}

	public function delete($id)
	{
		if(hak_akses('delete') === FALSE){
			show_errPrivilege();
			exit();
		}
		$this->model->delete_data('master_user_role',array('idRole'=>$id));
		$this->model->delete_data('role_module',array('idRole'=>$id));
	}


}
/* End of file Group.php */
/* Location: ./application/modules/setting/controllers/Group.php */