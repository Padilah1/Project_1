<?php

/**
 *
 */
class info extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('info_model');
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

			$data['info'] = $this->info_model->tampil();
			$this->load->view('tampil/info',$data);

	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }

	}

	public function alumni()
	{
		$con['returnType'] = 'single' ;
		$con['conditions'] = array(
			'id'=>$this->session->userdata('userId'));
		$user_alumni=$this->login_model->get_alumni($con);


		$this->load->view('layout/alumni_header', array(
			'user' => $user_alumni
		));
		$data['info'] = $this->info_model->tampil();
		$this->load->view('tampil/info_alm',$data);
		$this->load->view('layout/footer');
	}
	public function pengurus()
	{

		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
	    	$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));

			$data['info'] = $this->info_model->tampil();
			$this->load->view('tampil/info_prs',$data);

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
		$info = $this->info_model->ambil($id);
		if($info->num_rows() < 1){
			show_404();
		}

		$this->load->view('/edit/info', array(
			'info'=> $info->row()
		));
		$this->load->view('layout/footer');
	}
	public function edit_prs($id)
	{
		$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
		$info = $this->info_model->ambil($id);
		if($info->num_rows() < 1){
			show_404();
		}

		$this->load->view('/edit/info_prs', array(
			'info'=> $info->row()
		));
		$this->load->view('layout/footer');
	}
	public function do_edit($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'waktu' => $this->input->post('waktu'),
			'isi_info' => $this->input->post('isi_info'),
		 );
		//
		// var_dump($data); die;

		$this->info_model->edit_data($id, $data);
		redirect(base_url('info'));
	}
	public function do_edit_prs($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'waktu' => $this->input->post('waktu'),
			'isi_info' => $this->input->post('isi_info'),
		 );
		//
		// var_dump($data); die;

		$this->info_model->edit_data($id, $data);
		redirect(base_url('info/pengurus'));
	}
}

?>
