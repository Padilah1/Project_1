<?php

/**
 *
 */
class alumni extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('alumni_model');
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
	    	$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('adminId'));
			$user_admin=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user' => $user_admin
			));
	    	$data['alumni'] = $this->alumni_model->tampil();
			$this->load->view('tampil/alumni',$data);
			$this->load->view('layout/footer');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	}

	public function pengurus()
	{
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
	    	$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
	    	$data['alumni'] = $this->alumni_model->tampil();
			$this->load->view('tampil/alumni',$data);
			$this->load->view('layout/footer');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
	}

	public function edit($id)
	{
		$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('adminId'));
			$user_admin=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user' => $user_admin
			));
		$alumni = $this->alumni_model->ambil($id);
		$status = $this->alumni_model->data();
		if($alumni->num_rows() < 1){
			show_404();
		}

		$this->load->view('/edit/alumni', array(
			'alumni'=> $alumni->row(),
			'status'=> $status
		));
		$this->load->view('layout/footer');
	}

	public function do_edit($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'tgl' => $this->input->post('tgl'),
			'photo' =>$this->input->post('photo'),
			'agama' => $this->input->post('agama'),
			'jurusan' => $this->input->post('jurusan'),
			'alamat' => $this->input->post('alamat'),
			'status' => $this->input->post('status'),
			'tempat_bekerja' => $this->input->post('tempat_bekerja'),
			'jabatan' => $this->input->post('jabatan'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
		 );
		 $config['upload_path']          = './foto/';
		 $config['allowed_types']        = 'gif|jpg|png';
		 $config['max_size']             = 1000;
		 $config['max_width']            = 2000;
		 $config['max_height']           = 2000;

		 $this->load->library('upload', $config);

		 $this->upload->do_upload('photo');
		 $data['photo']=$this->upload->data('file_name');

		$this->alumni_model->edit_data($id,$data);
		redirect(base_url('alumni'));
	}

	public function detail($id)
	{
		
		$alumni = $this->alumni_model->ambil($id);
		$status = $this->alumni_model->data();
		if($alumni->num_rows() < 1){
			show_404();
		}

		$this->load->view('tampil/detail', array(
			'alumni'=> $alumni->row(),
			'status'=> $status
		));
	}

	public function delete($id)
	{
		$data = $this->alumni_model->hapus($id);
		redirect(base_url('/alumni'));
	}

	public function show($id)
	{
		$show = $this->alumni_model->ambil($id); 
		$this->load->view('tampil/detail_alumni', array(
			'detail' => $show->row()
		));
	}
}
