<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_model{

  public function __construct()
  {
    $this->load->database();
  }

  //core
  public function getAllData($table)
  {
    return $this->db->get($table)->result();
  }

  public function getSomeData($table, $whereVar, $whereVal)
  {
    $where = array($whereVar=> $whereVal);
    return $this->db->get_where($table, $where)->result();
  }

  public function getDataRow($table, $whereVar, $whereVal)
  {
    $where = array($whereVar=> $whereVal);
    return $this->db->get_where($table, $where)->row();
  }

  public function getNumRow($table, $whereVar, $whereVal)
  {
    $where = array($whereVar=> $whereVal);
    return $this->db->get_where($table, $where)->num_rows();
  }

  public function getDataRow2($table, $whereVar1, $whereVal1, $whereVar2, $whereVal2)
  {
    $where = array($whereVar1=> $whereVal1, $whereVar2=> $whereVal2);
    return $this->db->get_where($table, $where)->row();
  }

  public function getNumRow2($table, $whereVar1, $whereVal1, $whereVar2, $whereVal2)
  {
    $where = array($whereVar1=> $whereVal1, $whereVar2=> $whereVal2);
    return $this->db->get_where($table, $where)->num_rows();
  }

  //functional

  //application
  public function loginValidation()
  {
    $data['status'] = $this->getNumRow2('account', 'username', $this->input->post('username'), 'password', md5($this->input->post('password')));
    if ($data['status']==1) {
      $account = $this->getDataRow2('account', 'username', $this->input->post('username'), 'password', md5($this->input->post('password')));
      $data['session'] = array(
        'login' => true,
        'previlleges' => $account->previlleges,
        'id' => $account->id,
        'username' => $account->username,
        'password' => $account->password,
        'fullname' => $account->fullname
      );
    }
    return $data;
  }

  public function cDashboard()
  {
    if ($this->session->userdata['previlleges']=='admin') {
      $data['node'] = $this->getAllData('view_node');
      $data['user'] = $this->getSomeData('account', 'previlleges', 'user');
      $data['notification'] = "login1";
    } elseif ($this->session->userdata['previlleges']=='user') {
      $data['notification'] = "login1";
    }
    $data['view_name'] = $this->session->userdata['previlleges']."Dashboard";

    return $data;
  }

}


 ?>
