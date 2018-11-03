<?php

class Admin_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('Admin_model');
    if($this->session->userdata('status') != "login"){
			redirect(site_url(''));
		}
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

          $awal = new DateTime($data['debt_start']);
          $akhir = new DateTime($data['debt_end']);
          $diff = $akhir->diff($awal);
          $data["debt_month"] = ($diff->format('%y') * 12) + $diff->format('%m');
          $data["id_status"] = 0;
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
    $data = $this->Admin_model->select($id)->row();
    #echo var_dump($data);
    $this->load->view('admin/view_show',$data);
  }

  public function check_debt($id){
    $data['debt_start'] = $this->Admin_model->select($id)->row('debt_start');
    $data['debt_end'] = $this->Admin_model->select($id)->row('debt_end');
    if(date('Y-m-d') > $data['debt_end']){
      $time = strtotime($data['debt_end']);
      $data['debt_end'] = date('Y-m-10', strtotime('+1 month', $time));

      $awal = new DateTime($data['debt_start']);
      $akhir = new DateTime($data['debt_end']);
      $diff = $akhir->diff($awal);

      $data["debt_month"] = ($diff->format('%y') * 12) + $diff->format('%m');
      $data["id_status"] = 0;
      $this->Admin_model->update_account($id,$data);
    }
  }

  public function delete(){
    $id = $this->input->get('id_user');
    $this->Admin_model->delete($id);
    $this->index();
  }

  public function view_update(){
    $id = $this->input->get('id_user');
    $data = $this->Admin_model->select($id)->row();
    #echo var_dump($data);
    $this->load->view('admin/view_update',$data);
  }

  public function update(){
    $id = $this->input->get('id_user');
    $data_account = array(
      'health_facility' => $this->input->post('health_facility'),
      'id_class' => $this->input->post('id_class')
    );
    $data_user = array(
      'name' => $this->input->post('name'),
      'address' => $this->input->post('address'),
      'date_of_birth' => $this->input->post('date_of_birth')
    );
    $this->Admin_model->update_account($id,$data_account);
    $this->Admin_model->update_user($id,$data_user);
  }
}

 ?>
