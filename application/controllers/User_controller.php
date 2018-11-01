<?php
/**
 *
 */
class User_controller extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('User_model');
    if($this->session->userdata('status') != "login"){
			redirect(base_url(''));
		}
  }

  public function view_user(){
    $this->load->view('user/view_create');
  }

  public function view_home(){
    $this->load->view('user/view_homeuser');
  }

  public function view_profile(){
    $this->load->view('user/view_show');
  }

  public function show(){
    $data = $this->User_model->select($this->User_model->select_id($this->session->userdata('username')));
    #echo var_dump($data);
    $this->load->view('user/view_show',$data);
  }
}

 ?>
