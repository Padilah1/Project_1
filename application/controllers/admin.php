<?php

/**
 * controller untuk admin
 */
class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('login_model');

	}

	public function index()
	{
		if($this->session->userdata('akses')=='1'){
	    	$data['admin'] = $this->admin_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('adminId'));
			$user_admin=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user' => $user_admin
			));
			$this->load->view('tampil/admin', $data);
			$this->load->view('layout/footer');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
		
	}

	public function edit($id)
	{
		$data['admin'] = $this->admin_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('adminId'));
			$user_admin=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user' => $user_admin
			));
		$admin = $this->admin_model->ambil($id);
		if($admin->num_rows() < 1){
			show_404();
		}

		$this->load->view('edit/admin', array(
			'admin'=> $admin->row()
		));
		$this->load->view('layout/footer');
	}

	public function do_edit($id)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'photo' =>$this->input->post('photo'),
			'password' => md5($this->input->post('password')),
		 );
		 $config['upload_path']          = './foto/';
		 $config['allowed_types']        = 'gif|jpg|png';
		 $config['max_size']             = 2048;
		 $config['max_width']            = 2000;
		 $config['max_height']           = 2000;

		 $this->load->library('upload', $config);

		 $this->upload->do_upload('photo');
		 $data['photo']=$this->upload->data('file_name');

		$this->admin_model->edit_data($id,$data);
		redirect(base_url('admin'));
	}

	public function delete($id)
	{
		$data = $this->admin_model->hapus($id);
		redirect(base_url('admin'));
	}

	public function grafik()
	{
		$bekerja = $this->db->from('alumni')->where('status','bekerja')->get()->num_rows();
		$belum_bekerja = $this->db->from('alumni')->where('status','belum_bekerja')->get()->num_rows();

		$data['admin'] = $this->admin_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('adminId'));
			$user_admin=$this->login_model->get_admin($con);

			$this->load->view('layout/header', array(
				'user' => $user_admin
			));
		$this->load->view('others/d_chart');
		$this->load->view('layout/g_footer', array('pekerja'=> array($bekerja,$belum_bekerja)));
		
	}
	
	}
