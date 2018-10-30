<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  function select_login($data){
    #echo var_dump($data);
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    return $this->db->get();
  }

  function select_id($data){
    $this->db->select('id_login');
    $this->db->from('login');
    $this->db->where('username',$data['username']);
    return $this->db->get()->row('id_login');
  }

  function select_role($id){
    $this->db->select('id_role');
    $this->db->from('user');
    $this->db->where('id_login',$id);
    return $this->db->get()->row('id_role');
  }

  function create($data){
    return $this->db->insert('login',$data);
  }

}
?>
