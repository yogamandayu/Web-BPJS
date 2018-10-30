<?php

class Admin_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('Admin_model');
  }

  public function view_create()
  {
    $this->load->view('admin/view_create');
  }

  public function view_home()
  {
    $this->load->view('admin/view_homeadmin');
  }

  public function create(){
    $data['username'] = $this->input->post('username');
    if($this->Admin_model->get_data_login($data)->num_rows()==0)
    {
      $data['password'] = $this->input->post('password');
      if($this->Admin_model->create_login($data)){
        $data['id_user'] = $this->Admin_model->get_data_login($data)->row('id_login');
        $data['name'] = $this->input->post('name');
        $data['address'] = $this->input->post('address');
        $data['date_of_birth'] = $this->input->post('date_of_birth');
        if($this->Admin_model->create_user($data)){
          $data['id_class'] = $this->input->post('id_class');
          $data['health_facility'] = $this->input->post('health_facility');
          $data['debt_start'] = date('Y-m-10');
          $time = strtotime($data['debt_start']);
          $data['debt_end'] = date('Y-m-d', strtotime('+1 month', $time));

          $a = date('Y-m-10');
          $time = strtotime($a);
          $b = date('Y-m-d', strtotime('+1 month', $time));
          $awal = new DateTime($a);
          $akhir = new DateTime($b);
          $diff = $akhir->diff($awal);
          echo (($diff->format('%y') * 12) + $diff->format('%m'));

          if($this->Admin_model->create_bpjs_account($data)){
            echo "Akun BPJS KESEHATAN Berhasil Dibuat";
          }
          else {
            echo "Akun User Gagal Dibuat";
          }
        }
        else {
          echo "Akun User Gagal Dibuat";
        }
      }
      else {
        echo "Akun Login Gagal Dibuat";
      }
    }
    else {
      echo "Username sudah dipakai";
    }
  }

  public function index(){
    $data = array(
            'rs' => $this->Admin_model->select_all()->result()
          );
    $this->load->view('admin/view_index',$data);
  }

  public function show(){
    $id = $this->input->get('id_user');
    $this->check_debt($id);
  #  $data = $this->Admin_model->select($id)->row();
    #echo var_dump($data);
  #  $this->load->view('admin/view_show',$data);
  }

  public function check_debt($id){
    $data['debt_end'] = $this->Admin_model->select($id)->row('debt_end');
    if(date('Y-m-d') > $data['debt_end']){
      $data['debt_end'] = date('Y-m-10', strtotime('+1 month', $time));
      $this->Admin_model->update($id);
    }
  }

  public function delete(){
    $id = $this->input->get('id_user');
    $this->Admin_model->delete($id);
    $this->index();
  }

  public function update(){
    $data['id'] = $this->input->post('id');
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');
    if($this->Login_model->create($data)){
      echo "Akun Berhasil Dibuat";
    }
    else {
      echo "Akun Gagal Dibuat";
    }
  }
}

 ?>
