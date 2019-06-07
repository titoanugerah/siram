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


  public function user()
  {
    $data['content'] = $this->admin_model->cUser();
    if ($this->input->post('createUser')) {
      $this->admin_model->createUser();
      $data['content'] = $this->admin_model->cUser();
    }
    $this->load->view('template',$data);
  }

  public function detailUser($id)
  {
    $operation = 2;
    if ($this->input->post('updateUser')) {$operation = $this->admin_model->updateUser($id);}
    elseif ($this->input->post('deleteUser')) {$operation = $this->admin_model->deleteUser($id); redirect(base_url('user'));}
    $data['content'] = $this->admin_model->cDetailUser($id, $operation);
    $this->load->view('template',$data);
  }

  public function node()
  {
    $operation = 2;
    if ($this->input->post('createNode')) {$this->admin_model->createNode();}
    $data['content'] = $this->admin_model->cNode();
    $this->load->view('template',$data);
  }


  public function comodity()
  {
    $operation = 2;
    $data['content'] = $this->admin_model->cComodity();
    $this->load->view('template',$data);
  }

  public function detailComodity($id)
  {
    $operation = 2;
    $data['content'] = $this->admin_model->cDetailComodity($id);
    $this->load->view('template',$data);
  }

  //trash

  public function detailNode($id){
    if ($this->input->post('switchON')) {
      $this->admin_model->switchON($id);
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "node";
      $data['notification'] = 'switchON';
      $this->load->view('template',$data);
    } else if ($this->input->post('switchOFF')) {
      $this->admin_model->switchOFF($id);
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "node";
      $data['notification'] = 'switchOFF';
      $this->load->view('template',$data);
    } else {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfo($id);
    $data['view_name'] = "node";
    $data['notification'] = 'nodeNotification';
    $this->load->view('template',$data);
    }
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
      $this->load->view('template',$data);
    } else if ($this->input->post('deleteNode')) {
      $this->admin_model->deleteNode($id);
      $data['node'] = $this->admin_model->getNode();
      $data['view_name'] = "adminHome";
      $data['notification'] = 'nodeDeleted';
      $this->load->view('template',$data);
    } else {
      $data['komoditas'] = $this->admin_model->getKomoditas();
      $data['node'] = $this->admin_model->getNode();
      $data['info'] = $this->admin_model->getNodeInfo($id);
      $data['view_name'] = "editNode";
      $data['notification'] = 'dataCreateAlert';
      $this->load->view('template',$data);
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
    $this->load->view('template',$data);
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
    $this->load->view('template',$data);
  }

  public function dewPoint($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataDewPoint($id);
    $data['view_name'] = "dewPoint";
    $data['notification'] = 'nodeNotification';
    $this->load->view('template',$data);
  }

  public function udara($id)
  {
    $data['node'] = $this->admin_model->getNode();
    $data['info'] = $this->admin_model->getNodeInfoByKode($id);
    $data['dataNode'] = $this->admin_model->getDataUdara($id);
    $data['view_name'] = "udara";
    $data['notification'] = 'nodeNotification';
    $this->load->view('template',$data);
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
          $this->load->view('template',$data);
            # code...

      } else {
        $data['komoditas'] = $this->admin_model->getKomoditas();
        $data['node'] = $this->admin_model->getNode();
        $data['notification'] = 'dataCreateAlert';
        $data['view_name'] = 'createNode';
        $this->load->view('template',$data);
      }
  }
}
?>
