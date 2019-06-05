<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('admin_model');
    $this->load->model('user_model');
    $this->load->helper('date');
  }

  public function index(){
    redirect(base_url('adminHome'));
  }
//adminLogin has been deprecated due merged previlleges loginFailed
/*
  public function adminLogin()
  {
    if ($this->input->post('adminValidation')) {
      $admin = $this->admin_model->adminValidation();
      if ($admin->num_rows() > 0) {
        $data['admin'] = $this->admin_model->getLoggedAdmin();
        $data_session = array(
          'login' => true,
          'id' => $data['admin']->id,
          'username' => $data['admin']->username,
          'password' => $data['admin']->password,
          'fullname' => $data['admin']->fullname
        );
        $this->session->set_userdata($data_session);
        redirect(base_url('adminHome'));
      } else {
        $this->load->view('notification/loginFailed');
        $this->load->view('admin/adminLogin');
      }
    }
    else {
    $this->load->view('admin/adminLogin');
    }
  }
*/
	public function adminHome()
	{
    $data['node'] = $this->admin_model->getNode();
    $data['user'] = $this->admin_model->getUser();
		$data['notification'] = "no";
		$data['view_name'] = "adminHome";
		$this->load->view('admin/template',$data);
	}

	public function adminLogout()
	{
		$this->session->sess_destroy();
		redirect(base_url('adminLogin'));
	}

	public function adminProfil()
	{
    $data['node'] = $this->admin_model->getNode();
		$data['notification'] = 'no';
    $data['view_name'] = 'adminProfil';
    $this->load->view('admin/template',$data);
	}

	public function adminEdit()
  {
    if ($this->input->post('updateAdmin')) {
      $this->admin_model->updateAdmin();
      $data['admin'] = $this->admin_model->getUpdatedAdmin();
      $data_session = array(
				'login' => true,
				'id' => $data['admin']->id,
				'username' => $data['admin']->username,
				'password' => $data['admin']->password,
				'fullname' => $data['admin']->fullname
      );
      $this->session->set_userdata($data_session);
      $data['node'] = $this->admin_model->getNode();
      $data['notification'] = 'dataCreateSuccess';
      $data['view_name'] = 'adminEdit';
      $this->load->view('admin/template',$data);
    } else {
    $data['node'] = $this->admin_model->getNode();
    $data['notification'] = 'dataCreateAlert';
    $data['view_name'] = 'adminEdit';
    $this->load->view('admin/template',$data);
    }
  }

  public function user()
  {
    $data['node'] = $this->admin_model->getNode();
    $data['user'] = $this->admin_model->getUser();
    $data['notification'] = "no";
    $data['view_name'] = "rekapUser";
    $this->load->view('admin/template',$data);
  }

  public function createUser()
  {
      if ($this->input->post('createUser')) {
          $this->admin_model->createUser();
          redirect(base_url('adminHome'));
      } else {
        $data['node'] = $this->admin_model->getNode();
        $data['notification'] = 'dataCreateAlert';
        $data['view_name'] = 'createUser';
        $this->load->view('admin/template',$data);
      }
  }



  public function editUser($id)
  {
    if ($this->input->post('updateUser')) {
      $this->admin_model->updateUser($id);
      $data['notification'] = 'dataCreateSuccess';
      $data['node'] = $this->admin_model->getNode();
      $data['user'] = $this->admin_model->getUser();
  		$data['view_name'] = "adminHome";
  		$this->load->view('admin/template',$data);
    } else {
    $data['node'] = $this->admin_model->getNode();
    $data['user'] = $this->admin_model->getSelectedUser($id);
    $data['notification'] = 'dataCreateAlert';
    $data['view_name'] = 'editUser';
    $this->load->view('admin/template',$data);
    }
  }

  public function deleteUser($id)
  {
    $this->admin_model->deleteUser($id);
    redirect(base_url('adminHome'));
  }

  public function node($id){
    if ($this->input->post('switchON')) {
      $this->admin_model->switchON($id);
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "node";
      $data['notification'] = 'switchON';
      $this->load->view('admin/template',$data);
    } else if ($this->input->post('switchOFF')) {
      $this->admin_model->switchOFF($id);
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "node";
      $data['notification'] = 'switchOFF';
      $this->load->view('admin/template',$data);
    } else {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfo($id);
    $data['view_name'] = "node";
    $data['notification'] = 'nodeNotification';
    $this->load->view('admin/template',$data);
    }
  }

  public function rekapNode()
  {
    $data['node'] = $this->admin_model->getNode();
    $data['notification'] = "no";
    $data['view_name'] = "rekapNode";
    $this->load->view('admin/template',$data);
  }

  public function editNode($id)
  {
    if ($this->input->post('updateNode')) {
      $this->admin_model->updateNode($id);
      $code = $this->admin_model->getConfCode();
      $code1 = $code->code1;
      $code2 = $code->code2;
      $code3 = $code->code3;
      $code4 = $code->code4;
      $code5 = $code->code5;
      $code6 = $code->code6;
      $code7 = $code->code7;
      $code8 = $code->code8;
      $code9 = $code->code9;
      $newNode = $this->admin_model->getNodeInfo($id);
      $newKodeNode = $newNode->kode_node;
      $newIdNode = $newNode->id;
      $query = $this->admin_model->createNodeConf($newKodeNode,$newIdNode,$code1,$code2,$code3,$code4,$code5,$code6,$code7,$code8,$code9);
      if (!$query){
        $data['notification'] = "writeConfError";
      } else{
        $data['notification'] = "writeConfSuccess";
      }
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['node'] = $this->admin_model->getNode();
      $data['view_name'] = "node";
      $data['notification'] = 'nodeNotification';
      $this->load->view('admin/template',$data);
    } else if ($this->input->post('deleteNode')) {
      $this->admin_model->deleteNode($id);
      $data['node'] = $this->admin_model->getNode();
      $data['view_name'] = "adminHome";
      $data['notification'] = 'nodeDeleted';
      $this->load->view('admin/template',$data);
    } else {
      $data['komoditas'] = $this->admin_model->getKomoditas();
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "editNode";
      $data['notification'] = 'dataCreateAlert';
      $this->load->view('admin/template',$data);
    }
  }

  public function deleteNode($id)
  {
    $this->admin_model->deleteNode($id);
    redirect(base_url('adminHome'));
  }

  public function tanah($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataTanah($id);
    $data['view_name'] = "tanah";
    $data['notification'] = 'nodeNotification';
    $this->load->view('admin/template',$data);
  }

  public function suhu($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataSuhu($id);
    // print_r($data['dataNode']);
    // die();
    $data['view_name'] = "suhu";
    $data['notification'] = 'nodeNotification';
    $this->load->view('admin/template',$data);
  }

  public function dewPoint($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataDewPoint($id);
    $data['view_name'] = "dewPoint";
    $data['notification'] = 'nodeNotification';
    $this->load->view('admin/template',$data);
  }

  public function udara($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataUdara($id);
    $data['view_name'] = "udara";
    $data['notification'] = 'nodeNotification';
    $this->load->view('admin/template',$data);
  }

  public function createNode()
  {
      if ($this->input->post('createNode')) {
          $this->admin_model->createNode();
          $code = $this->admin_model->getConfCode();
          $code1 = $code->code1;
          $code2 = $code->code2;
          $code3 = $code->code3;
          $code4 = $code->code4;
          $code5 = $code->code5;
          $code6 = $code->code6;
          $code7 = $code->code7;
          $code8 = $code->code8;
          $code9 = $code->code9;
          $newNode = $this->admin_model->getNewNode($this->input->post('nama_node'));
          $newKodeNode = $newNode->kode_node;
          $newIdNode = $newNode->id;
          $query = $this->admin_model->createNodeConf($newKodeNode,$newIdNode,$code1,$code2,$code3,$code4,$code5,$code6,$code7,$code8,$code9);
          if (!$query){
            $data['notification'] = "writeConfError";
          } else{
            $data['notification'] = "writeConfSuccess";
          }
          $data['node'] = $this->admin_model->getNode();
          $data['view_name'] = "rekapNode";
          $this->load->view('admin/template',$data);
            # code...

      } else {
        $data['komoditas'] = $this->admin_model->getKomoditas();
        $data['node'] = $this->admin_model->getNode();
        $data['notification'] = 'dataCreateAlert';
        $data['view_name'] = 'createNode';
        $this->load->view('admin/template',$data);
      }
  }
}
?>
