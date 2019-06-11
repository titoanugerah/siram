<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index(){
    redirect(base_url('dashboard'));
  }

//mulai 7 maret,login dipusatkan ke controller user
//sebelumnya login disusun secara terpisah antara admin dengan user dengan database yg juga terpisah


  public function detailUserNode($id)
  {
    if ($this->input->post('updateNode')) { $this->admin_model->updateNode($id);}
    elseif ($this->input->post('turn')) {$this->admin_model->turnNode($id);}
  //  elseif ($this->input->post('deleteNode')) {$this->admin_model->deleteNode($id);redirect(base_url('node'));}
    elseif ($this->input->post('downloadConf')) {$this->admin_model->downloadConf($id);}

    $data['content'] = $this->user_model->cDetailNode($id);
    $this->load->view('template', $data);
  }

}
?>
