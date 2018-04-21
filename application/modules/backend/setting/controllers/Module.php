<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if(hak_akses('view') === FALSE){
			show_errPrivilege();
			exit();
		}
		$data['data'] = $this->model->get('master_module','','','orderModule','asc');
		$data['content'] = 'module_content';
		$this->load->view('backend/main',$data,FALSE);
	}

	public function add($id="")
	{

		if ($id) {
			if(hak_akses('update') === FALSE){
				show_errPrivilege();
				exit();
			}
			$data['orderModule'] = $this->model->getOrder('master_module','orderModule');
			$data['getModule'] = $this->model->get_where('master_module',array('idModule'=>$id));
		}else{
			if(hak_akses('create') === FALSE){
				show_errPrivilege();
				exit();
			}
		}

		$data['content'] = 'module_add';
		$this->load->view('backend/main',$data,FALSE);

	}

	public function save($id="")
	{
		$post = $this->input->post();
		$data['getModule'] = $this->model->get_where('master_module',array('idModule'=>$id));
		
		$this->form_validation->set_rules('nameModule', 'Nama Modul', 'required');
		// $this->form_validation->set_rules('descModule', 'Deskripsi Modul', 'required');
		// $this->form_validation->set_rules('iconModule', 'Icon Modul', 'required');
		$this->form_validation->set_rules('orderModule', 'Order Modul', 'required');
		$this->form_validation->set_rules('statusModule', 'Status Modul', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'module_add';
			$this->load->view('backend/main',$data,FALSE);
		}
		else
		{
			if ($post['idModule']) {
				$post['updateBy'] = getMember('id');
				$post['updateDate'] = date('Y-m-d H:i:s');
				if(hak_akses('update') === FALSE){
					show_errPrivilege();
					exit();
				}
				$this->model->update_data('master_module',$post,array('idModule'=>$post['idModule']));
			}
			else{
				if(hak_akses('create') === FALSE){
					show_errPrivilege();
					exit();
				}
				$post['createBy'] = getMember('id');
				$post['createDate'] = date('Y-m-d H:i:s');
				$this->model->insert_data('master_module',$post);
				mkdir('application/modules/backend/'.slug($post['nameModule']),0777,true);
				mkdir('application/modules/backend/'.slug($post['nameModule']).'/controllers',0777,true);
				$dashboardController = fopen('application/modules/backend/'.slug($post['nameModule']).'/controllers/'.ucfirst($post['nameModule']).'.php', "w");
				$txt = "<?php\n";
				$txt .= "defined('BASEPATH') OR exit('No direct script access allowed');\n\n";
				$txt .= "class ".ucfirst($post['nameModule'])." extends MY_Controller {\n\n";
				$txt .= "public function index()\n";
				$txt .= "{\n";
				$txt .= "\$data['content'] = 'dashboard_content';\n";
				$txt .= "\$this->load->view('backend/main',\$data,FALSE);\n";
				$txt .= "}\n\n";
				$txt .= "}";
				fwrite($dashboardController, $txt);
				mkdir('application/modules/backend/'.slug($post['nameModule']).'/models',0777,true);
				mkdir('application/modules/backend/'.slug($post['nameModule']).'/views',0777,true);
				$dashboardView = fopen('application/modules/backend/'.slug($post['nameModule']).'/views/dashboard_content.php', "w");
				$txt = "<section class=\"wrapper\">\n";
				$txt .= "<div class=\"row\">\n";
				$txt .= "<div class=\"col-sm-12\">\n";
				$txt .= "<section class=\"panel\">\n";
				$txt .= "<header class=\"panel-heading\">\n";
				$txt .= "Dashboard";
				$txt .= "</header>";
				$txt .= "<div class=\"panel-body\">\n";
				$txt .= "</div>\n</section>\n</div>\n</div>\n</section>";
			}
			redirect('setting/module');                
		}
	}

	public function delete($id)
	{
		if(hak_akses('delete') === FALSE){
			show_errPrivilege();
			exit();
		}
		$getModule = $this->model->get_where('master_module',array('idModule'=>$id));
		$deleteModule = $this->model->delete_data('master_module',array('idModule'=>$id));
		// echo deleteDir('application/modules/backend/'.slug($getModule[0]['nameModule']));
		echo $id;
	}

}

/* End of file Module.php */
/* Location: ./application/modules/user/controllers/Module.php */