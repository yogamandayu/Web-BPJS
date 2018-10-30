<?php
/**
 *
 */
class User_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function select($id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('bpjs_account','user.id_user = bpjs_account.id_user');
    $this->db->join('bpjs_class','bpjs_class.id_class = bpjs_account.id_class');
    $this->db->where('user.id_user',$id);
    return $this->db->get()->row();
  }

  function select_id($username){
    $this->db->select('id_login');
    $this->db->from('login');
    $this->db->where('username',$username);
    return $this->db->get()->row('id_login');
  }

}
 ?>
