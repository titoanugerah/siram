<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  //CORE

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

  public function updateData($table, $whereVar, $whereVal, $setVar, $setVal)
  {
    $where = array($whereVar => $whereVal );
    $data = array($setVar => $setVal );
    $this->db->where($where);
    $this->db->update($table, $data);
  }


  //APPLICATION
  public function cDetailNode($id)
  {
    $data['detail'] = $this->getDataRow('view_node', 'id', $id);
    $data['node'] = $this->getAllData('view_node');
    $data['komoditas'] = $this->getAllData('komoditas');
    $data['dataset'] = $this->getSomeData('view_dataset', 'id_komoditas', $data['detail']->id_komoditas);
    $data['notification'] = "no";
    $data['view_name'] = "detailUserNode";
    $data['dataNode'] = $this->getSomeData('data', 'kode_node',$data['detail']->kode_node );
    return $data;
  }

  public function updateNode($id)
  {
    $this->updateData('node', 'id', $id, 'nama_node', $this->input->post('nama_node'));
    $this->updateData('node', 'id', $id, 'id_komoditas', $this->input->post('id_komoditas'));
  }

  public function turnNode($id)
  {
    $this->updateData('node', 'id', $id, 'status', !$this->getDataRow('node', 'id', $id)->status);
  }


}

 ?>
