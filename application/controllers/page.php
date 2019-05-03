<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
   //  if($this->session->userdata('masuk') != TRUE){
			// $url=base_url();
			// redirect($url);
		// }
    $this->load->model('login_model');
    $this->load->model('admin_model');
  }

  function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $data['admin'] = $this->admin_model->tampil();
      $con['returnType'] = 'single' ;
      $con['conditions'] = array(
        'id'=>$this->session->userdata('adminId'));
      $user_admin=$this->login_model->get_admin($con);

      $this->load->view('layout/header', array(
        'user' => $user_admin
      ));
      $this->load->view('tampil/dashboard');
      $this->load->view('layout/footer');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function alumni(){
    if($this->session->userdata('userMasuk')=='TRUE'){
      $con['returnType'] = 'single' ;
      $con['conditions'] = array(
        'id'=>$this->session->userdata('userId'));
      $user_alumni=$this->login_model->get_alumni($con);


      $this->load->view('layout/alumni_header', array(
        'user' => $user_alumni
      ));
      $this->load->view('tampil/dashboard');
      $this->load->view('layout/footer');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function pengurus(){
    if($this->session->userdata('akses')=='2'){
      $con['returnType'] = 'single' ;
      $con['conditions'] = array(
        'id'=>$this->session->userdata('pengurusId'));
      $user_pengurus=$this->login_model->get_pengurus($con);


      $this->load->view('layout/header', array(
        'user_pengurus' => $user_pengurus
      ));
      $this->load->view('tampil/dashboard');
      $this->load->view('layout/footer');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function data_alumni(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('layout/header');
      $this->load->view('tampil/alumni');
      $this->load->view('layout/footer');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function about(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){

      $data['admin'] = $this->admin_model->tampil();
      $con['returnType'] = 'single' ;
      $con['conditions'] = array(
        'id'=>$this->session->userdata('adminId'));
      $user_admin=$this->login_model->get_admin($con);

      $this->load->view('layout/header', array(
        'user' => $user_admin
      ));
      $this->load->view('others/about');
      $this->load->view('layout/footer');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
