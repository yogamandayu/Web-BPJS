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
    $this->load->model('Admin_model');
    require 'cloudinary/autoload.php';
    require 'cloudinary/src/Helpers.php';
    \Cloudinary::config(array(
      "cloud_name" => "yogamandayu",
      "api_key" => "722227313554865",
      "api_secret" => "9jxvGCG9Tpfeu4EQhdSbxraRXF8"
    ));
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
    $this->check_debt($data->id_user);
    $data->foto = cl_image_tag($data->image, array("width"=>200, "crop"=>"scale", "alt" => "Foto Profil" ));
    $this->load->view('user/view_show',$data);
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
}
?>
