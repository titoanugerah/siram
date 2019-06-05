<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index(){
    redirect(base_url('userHome'));
  }

//mulai 7 maret,login dipusatkan ke controller user
//sebelumnya login disusun secara terpisah antara admin dengan user dengan database yg juga terpisah

  public function login()
  {
    if ($this->input->post('loginValidation')) {
      $user = $this->user_model->loginValidation();
      if ($user->num_rows() > 0) {
        $data['account'] = $this->user_model->getLoggedAccount();
        $data_session = array(
          'login' => true,
          'id' => $data['account']->id,
          'username' => $data['account']->username,
          'password' => $data['account']->password,
          'fullname' => $data['account']->fullname,
          'previlleges'=> $data['account']->previlleges
        );
        $this->session->set_userdata($data_session);
        if ($data['account']->previlleges=='user') {
          redirect(base_url('userHome'));
        } elseif ($data['account']->previlleges=='admin') {
          redirect(base_url('adminHome'));
        }
      } else {
        $this->load->view('notification/loginFailed');
        $this->load->view('user/userLogin');
      }
    }
    else {
    $this->load->view('user/userLogin');
    }
  }

  public function userHome()
  {
    $data['node'] = $this->user_model->getNode();
    $data['view_name'] = "userHome";
    $data['notification'] = 'loginSuccess';
    $this->load->view('user/template',$data);
  }

  public function userLogout()
  {
    $this->session->sess_destroy();
    redirect(base_url('userLogin'));
  }



  public function userCreate()
  {
    if ($this->input->post('userDataCreate')) {
      $this->user_model->userCreate();
      $this->load->view('notification/userCreateSuccess');
      $this->load->view('user/userLogin');
    } else {
    $this->load->view('user/userCreate');
    }
  }

  public function informasiNode($id){
    if ($this->input->post('switchON')) {
      $this->user_model->switchON($id);
      $data['node'] = $this->user_model->getNode();
      $data['info'] = $this->user_model->getNodeInfo($id);
      $data['view_name'] = "informasiNode";
      $data['notification'] = 'switchON';
      $this->load->view('user/template',$data);
    } else if ($this->input->post('switchOFF')) {
      $this->user_model->switchOFF($id);
      $data['node'] = $this->user_model->getNode();
      $data['info'] = $this->user_model->getNodeInfo($id);
      $data['view_name'] = "informasiNode";
      $data['notification'] = 'switchOFF';
      $this->load->view('user/template',$data);
    } else {
    $data['node'] = $this->user_model->getNode();
    $data['info'] = $this->user_model->getNodeInfo($id);
    $data['view_name'] = "informasiNode";
    $data['notification'] = 'nodeNotification';
    $this->load->view('user/template',$data);
    }
  }

  public function dataTanah($id)
  {
    $data['node'] = $this->user_model->getNode();
    $data['info'] = $this->user_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->user_model->getDataTanah($id);
    $data['view_name'] = "dataTanah";
    $data['notification'] = 'nodeNotification';
    $this->load->view('user/template',$data);
  }

  public function dataSuhu($id)
  {
    $data['node'] = $this->user_model->getNode();
    $data['info'] = $this->user_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->user_model->getDataSuhu($id);
    $data['view_name'] = "dataSuhu";
    $data['notification'] = 'nodeNotification';
    $this->load->view('user/template',$data);
  }

  public function dataDewPoint($id)
  {
    $data['node'] = $this->user_model->getNode();
    $data['info'] = $this->user_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->user_model->getDataDewPoint($id);
    $data['view_name'] = "dataDewPoint";
    $data['notification'] = 'nodeNotification';
    $this->load->view('user/template',$data);
  }

  public function dataUdara($id)
  {
    $data['node'] = $this->user_model->getNode();
    $data['info'] = $this->user_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->user_model->getDataUdara($id);
    $data['view_name'] = "dataUdara";
    $data['notification'] = 'nodeNotification';
    $this->load->view('user/template',$data);
  }

  public function akunEdit()
  {
    if ($this->input->post('updateAkun')) {
      $this->user_model->updateAkun();
      $data['user'] = $this->user_model->getUpdatedUser();
      $data_session = array(
        'login' => true,
        'id' => $data['user']->id,
        'username' => $data['user']->username,
        'password' => $data['user']->password,
        'fullname' => $data['user']->fullname
      );
      $this->session->set_userdata($data_session);
      $data['node'] = $this->user_model->getNode();

      $data['notification'] = 'dataCreateSuccess';
      $data['view_name'] = 'akunEdit';
      $this->load->view('user/template',$data);
    } else {
    $data['node'] = $this->user_model->getNode();
    $data['notification'] = 'dataCreateAlert';
    $data['view_name'] = 'akunEdit';
    $this->load->view('user/template',$data);
    }
  }

}
?>
