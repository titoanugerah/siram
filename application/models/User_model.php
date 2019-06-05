<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

 public function loginValidation()
 {
   $where = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password'))
    );

    return $this->db->get_where('account',$where);
 }

 public function getLoggedAccount()
 {
   $where = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password'))
    );

    $query = $this->db->get_where('account',$where);
    return $query->row();

 }

 public function userCreate()
 {
   $data = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password')),
     'fullname' => $this->input->post('fullname')
   );
   $this->db->insert('user',$data);
 }

 public function getNode()
 {
   $query = $this->db->get('view_node');
   return $query->result();
 }

 public function getNodeInfo($id)
 {
   $where = array('id' => $id );
   $query = $this->db->get_where('view_node',$where);
   return $query->row();
 }

 public function getNodeInfoByKode($id)
 {
   $where = array('kode_node' => $id );
   $query = $this->db->get_where('view_node',$where,'desc');
   return $query->row();
 }

 public function switchON($id)
 {
   $where = array('id' => $id );
   $data = array(
     'status' => 1
   );
   $this->db->where($where);
   $this->db->update('node',$data);
 }

 public function switchOFF($id)
 {
   $where = array('id' => $id );
   $data = array(
     'status' => 0
   );
   $this->db->where($where);
   $this->db->update('node',$data);
 }

 public function getDataTanah($id)
 {
   // $where = array('kode_node' => $id );
   // $query = $this->db->get_where('tanah',$where);
   $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%tanah%'");
   return $query->result();
 }

 public function getDataSuhu($id)
 {
   //$where = array('kode_node' => $id );
   //$query = $this->db->get_where('suhu',$where);
   $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%suhu%'");
   return $query->result();
 }

 public function getDataDewPoint($id)
 {
   //$where = array('kode_node' => $id );
   //$query = $this->db->get_where('dewpoint',$where);
   $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%dew%'");
   return $query->result();
 }

 public function getDataUdara($id)
 {
   //$where = array('kode_node' => $id );
   //$query = $this->db->get_where('udara',$where);
   $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%udara%'");
   return $query->result();
 }


  public function updateAkun()
  {
    $where = array('id' => $this->session->userdata['id'] );
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'fullname' => $this->input->post('fullname')
    );
    $this->db->where($where);
    $this->db->update('user',$data);
  }

  public function getUpdatedUser()
  {
    $where = array('id' => $this->session->userdata['id']);
     $query = $this->db->get_where('user',$where);
     return $query->row();

  }


}

 ?>
