<?php

class Admin_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_data_login($data){
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('username',$data['username']);
    return $this->db->get();
  }

  public function select_all(){
    return $this->db->get('user');
  }

  public function select($id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('bpjs_account','user.id_user = bpjs_account.id_user');
    $this->db->join('bpjs_class','bpjs_class.id_class = bpjs_account.id_class');
    $this->db->where('user.id_user',$id);
    return $this->db->get();
  }

  public function create_login($data){
      return $this->db->insert('login',$data);
  }

  public function update_account($id,$data){
    $this->db->where('id_account', $id);
    $this->db->update('bpjs_account', $data);
  }

  public function create_user($data){
    $array = array(
      'id_user' => $data['id_user'],
      'name' => $data['name'],
      'address' => $data['address'],
      'date_of_birth' => $data['date_of_birth'],
      'id_login' => $data['id_user'],
      'id_role' => '2'
    );
      return $this->db->insert('user',$array);
  }

  public function create_bpjs_account($data){
    $array = array(
      'id_account' => $data['id_user'],
      'id_user' => $data['id_user'],
      'id_class' => $data['id_class'],
      'health_facility' => $data['health_facility'],
      'debt_start' => $data['debt_start'],
      'debt_end' => $data['debt_end'],
      'debt_month' => $data['debt_month']
    );
    return $this->db->insert('bpjs_account',$array);
  }

  public function delete($id){
    $this->db->delete('bpjs_account', array('id_account' => $id));
    $this->db->delete('user', array('id_user' => $id));
    $this->db->delete('login', array('id_login' => $id));
  }
}
?>
