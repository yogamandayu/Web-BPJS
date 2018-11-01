<?php
/**
 *
 */
class Login_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('Login_model');
  }

  public function view_login(){
    $this->load->view('login/view_login');
  }

  public function login(){
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');
    if($this->Login_model->select_login($data)->num_rows() > 0){
      $array = array(
        'username' => $data['username'],
        'status' => "login"
      );
      $this->session->set_userdata($array);
      if($this->Login_model->select_role($this->Login_model->select_id($data))==1){
        $this->load->view('admin/view_homeadmin');
      }
      else{
        $this->load->view('user/view_homeuser');
      }
    }
    else{
      echo "Login Gagal";
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->load->view('view_home');
  }

}
?>
