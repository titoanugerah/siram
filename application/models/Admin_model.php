<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class admin_model extends CI_Model{
  public function __construct(){
    $this->load->database();
    $this->load->helper('file');
  }

  //core

  public function getAllData($table)
  {
    return $this->db->get($table)->result();
  }

  public function getSomeData($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal);
    return $this->db->get_where($table, $where)->result();
  }

  public function getDataRow($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal);
    return $this->db->get_where($table, $where)->row();
  }

  public function deleteData($table, $whereVar, $whereVal)
  {
    $where = array($whereVar => $whereVal );
    $this->db->delete($table, $where);
  }

  //functional

  //application
  public function cUser()
  {
    $data['notification'] = "no";
    $data['node'] = $this->getAllData('view_node');
    $data['user'] = $this->getSomeData('account', 'previlleges', 'user');
    $data['view_name'] = "user";
    return $data;
  }

  public function createUser()
  {
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'fullname' => $this->input->post('fullname'),
      'previlleges'=> 'user'
    );
    $this->db->insert('account',$data);
  }

  public function cDetailUser($id, $notification)
  {
    $data['node'] = $this->getAllData('view_node');
    $data['nodeUser'] = $this->getSomeData('view_node','id_user',$id);
    $data['user'] = $this->getDataRow('account', 'id', $id);
    $data['notification'] = 'operation'.$notification;
    $data['view_name'] = 'detailUser';
    return $data;
  }

  public function updateUser($id)
  {
    if ($this->input->post('password')=='') {
      $data = array('username' => $this->input->post('username'), 'fullname' => $this->input->post('fullname'));
    } else {
      $data = array('username' => $this->input->post('username'), 'password' => md5($this->input->post('password')),'fullname' => $this->input->post('fullname'));
    }
    $where = array('id' => $id);
    $this->db->where($where);
    return $this->db->update('account', $data);
  }

  public function deleteUser($id)
  {
    $this->deleteData('account', 'id', $id);
    $this->deleteData('node', 'id_user', $id);
    return 1;
  }

  public function cNode()
  {
    $data['komoditas'] = $this->getAllData('komoditas');
    $data['user'] = $this->getSomeData('account','previlleges', 'user');
    $data['node'] = $this->getAllData('view_node');
    $data['notification'] = "no";
    $data['view_name'] = "rekapNode";
    return $data;
  }

  public function createNode()
  {
    $data = array(
      'nama_node' => $this->input->post('nama_node'),
      'id_komoditas'=> $this->input->post('id_komoditas'),
      'id_user' => $this->input->post('id_user'),
      'status'=> 0
    );
    if ($this->db->insert('node',$data)) {
      $this->createNodeConf($this->db->insert_id());
    }
  }

  public function createNodeConf($id)
  {
    // code...
  }

  public function cComodity()
  {
    $data['comodity'] = $this->getAllData('komoditas');
    $data['node'] = $this->getAllData('view_node');
    $data['notification'] = "no";
    $data['view_name'] = "comodity";
    return $data;
  }

  public function cDetailComodity($id)
  {
    $data['comodity'] = $this->getDataRow('komoditas', 'id', $id);
    $data['sensor'] = $this->getAllData('sensor');
    $data['node'] = $this->getAllData('view_node');
    $data['notification'] = "no";
    $data['view_name'] = "detailComodity";
    return $data;
  }






  //trash
  public function getConfCode()
  {
    $where = array('id' => 1 );
    $query = $this->db->get_where('nodecode',$where);
    return $query->row();
  }

  public function getNodeInfo($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('view_node',$where);
    return $query->row();
  }

  public function getNewNode($id)
  {
    $where = array('nama_node' => $id );
    $query = $this->db->get_where('view_node',$where);
    return $query->row();
  }

  public function createNodeConf1($newKodeNode,$newIdNode,$code1,$code2,$code3,$code4,$code5,$code6,$code7,$code8,$code9)
  {
    $dataWrite = $code1.$newIdNode.$code2.$newKodeNode.$code3.$newIdNode.$code4.$newKodeNode.$code5.$newIdNode.$code6.$newKodeNode.$code7.$newIdNode.$code8.$newKodeNode.$code9;
    if ( ! write_file("e:/htdocs/siram/assets/Node Configuration/nodeConf".$newIdNode.".php", $dataWrite))
      //E:\htdocs\siram\assets\Node Configuration var/www/html
    {
            return FALSE;
    }
    else
    {
            return TRUE;
    }
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

  public function getKomoditas()
  {
    $query = $this->db->get('komoditas');
    return $query->result();
  }


  public function updateNode($id)
  {
    $where = array('id' => $id );
    $data = array(
      'nama_node' => $this->input->post('nama_node'),
      'id_komoditas' => $this->input->post('id_komoditas'),
    );
    $this->db->where($where);
    $this->db->update('node',$data);
  }

  public function deleteNode($id)
  {
    $where = array(
      'id' => $id
     );
    $this->db->delete('node',$where);
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
    // $where = array('kode_node' => $id );
    // $query = $this->db->get_where('suhu', $where);
    $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%suhu%'");
    return $query->result();
  }

  public function getDataDewPoint($id)
  {
    // $where = array('kode_node' => $id );
    // $query = $this->db->get_where('dewpoint',$where);
    $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%dew%'");
    return $query->result();
  }

  // public function getDataDewPointChart($id)
  // {
  //   $where = array('kode_node' => $id );
  //   $this->db->select('id,data_devpoint');
  //   $query = $this->db->get_where('dewpoint',$where);
  //   return $query->result();
  // }

  public function getDataUdara($id)
  {
     //$where = array('kode_node' => $id );
     //$query = $this->db->get_where('udara',$where);
    $query = $this->db->query("SELECT * FROM data WHERE kode_node = '$id' AND topik LIKE '%udara%'");
    return $query->result();
  }

  public function getUser()
  {
    $query = $this->db->get_where('account',array('previlleges' => 'user'));
    return $query->result();
  }

  public function getSelectedUser($id)
  {
    $where = array('id' => $id );
    $query = $this->db->get_where('account',$where);
    return $query->row();
  }





}

 ?>
