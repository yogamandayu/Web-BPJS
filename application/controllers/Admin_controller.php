<?php

class Admin_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('Admin_model');
    require 'cloudinary/autoload.php';
    require 'cloudinary/src/Helpers.php';
    \Cloudinary::config(array(
      "cloud_name" => "",
      "api_key" => "",
      "api_secret" => ""
    ));
    if($this->session->userdata('status') != "login"){
			redirect(site_url(''));
		}
  }

  public function view_create(){
    $this->session->set_userdata('create',' ');
    $this->load->view('admin/view_create');
  }

  public function view_home()
  {
    $this->load->view('admin/view_homeadmin');
  }

  public function create(){
    $username = $this->input->post('username');
    if($this->check_username($username)){
      $this->params_login($username,$this->input->post('password'));
      $id_user = $this->Admin_model->get_data_login($this->input->post('username'))->row('id_login');
      $this->params_user(
        $id_user,
        $this->input->post('name'),
        $this->input->post('address'),
        $this->input->post('image'),
        $this->input->post('date_of_birth')
      );
      $this->params_account(
        $id_user,
        $this->input->post('id_class'),
        $this->input->post('health_facility'),
        date('Y-m-10')
      );
        $this->session->set_userdata('create','success');
        $this->load->view('admin/view_create');
    }
    else {
      $this->session->set_userdata('create','username');
      $this->load->view('admin/view_create');
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
    $data->foto = cl_image_tag($data->image, array("width"=>200, "crop"=>"scale", "alt" => "Foto Profil" ));
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
    $this->index();
  }

  private function check_username($username){
    if($this->Admin_model->get_data_login($username)->num_rows()==0){
      return true;
    }
    else {
      return false;
    }
  }

  private function params_login($username,$password){
    $array = array(
      'username' => $username,
      'password' => $password
    );
    #var_dump($array);
    $this->Admin_model->create_login($array);
  }
  private function params_user($id_user,$name,$address,$photo,$date_of_birth){
    $array = array(
      'id_user' => $id_user,
      'name' => $name,
      'address' => $address,
      'date_of_birth' => $date_of_birth,
      'image' => $this->upload_image($photo)
    );
    #var_dump($array);
    $this->Admin_model->create_user($array);
  }
  private function params_account($id_user,$id_class,$health_facility,$debt_start){
    $count = $this->count_month($debt_start);
    $array = array(
      'id_user' => $id_user,
      'id_class' => $id_class,
      'health_facility' => $health_facility,
      'debt_start' => $debt_start,
      'debt_end' => $count['debt_end'],
      'debt_month' => $count['debt_month'],
      'id_status' => 0
    );
    #var_dump($array);
    $this->Admin_model->create_bpjs_account($array);
  }

  private function count_month($debt_start){
      $debt_end = date('Y-m-d', strtotime('+1 month', strtotime($debt_start)));
      $awal = new DateTime($debt_start);
      $akhir = new DateTime($debt_end);
      $diff = $akhir->diff($awal);
      $debt_month = ($diff->format('%y') * 12) + $diff->format('%m');
      $id_status = 0;
      $array = array(
        'debt_end' => $debt_end,
        'debt_month' => ($diff->format('%y') * 12) + $diff->format('%m'),
      );
      return $array;
  }

  private function upload_image($data){
    $hash = \Cloudinary\Uploader::upload('/home/yogamandayu/Pictures/'.$data);
    return $hash['public_id'];#http://[::1]/web_bpjs/assets:image:
  }
}
 ?>
