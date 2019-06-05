<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class admin_model extends CI_Model{
  public function __construct(){
    $this->load->database();
    $this->load->helper('file');
  }

 public function adminValidation()
 {
   $where = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password'))
    );

    return $this->db->get_where('admin',$where);
 }



 public function getLoggedAdmin()
 {
   $where = array(
     'username' => $this->input->post('username'),
     'password' => md5($this->input->post('password'))
    );

    $query = $this->db->get_where('admin',$where);
    return $query->row();
 }



  public function adminCreate()
  {
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'nama_perpustakaan' => $this->input->post('nama_perpustakaan'),
      'alamat_perpustakaan' => $this->input->post('alamat_perpustakaan'),
      'id_kota' => $this->input->post('id_kota')
    );

    $this->db->insert('perpustakaan',$data);
  }
  public function updateAdmin()
  {
    $where = array('id' => $this->session->userdata['id'] );
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'fullname' => $this->input->post('fullname')
    );
    $this->db->where($where);
    $this->db->update('admin',$data);
  }

  public function getUpdatedAdmin()
  {
    $where = array('id' => $this->session->userdata['id']);
    $query = $this->db->get_where('admin',$where);
    return $query->row();
  }

  public function getNode()
  {
    $query = $this->db->get('view_node');
    return $query->result();
  }

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

  public function createNodeConf($newKodeNode,$newIdNode,$code1,$code2,$code3,$code4,$code5,$code6,$code7,$code8,$code9)
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

  public function createNode()
  {
    $data = array(
      'nama_node' => $this->input->post('nama_node'),
      'id_komoditas'=> $this->input->post('id_komoditas'),
      'status'=> 0
    );
    $this->db->insert('node',$data);
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

  public function updateUser($id)
  {
    $where = array('id' => $id );
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'fullname' => $this->input->post('fullname')
    );
    $this->db->where($where);
    $this->db->update('account',$data);
  }

  public function deleteUser($id)
  {
    $where = array(
      'id' => $id
     );
    $this->db->delete('account',$where);
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


}

 ?>
