<?php

/**
 * controller untuk pengurus
 */
class pengurus extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengurus_model');
		$this->load->model('login_model');

	}

	public function index()
	{
		if($this->session->userdata('akses')=='2'){
	    	$data['pengurus'] = $this->pengurus_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
			$this->load->view('tampil/pengurus', $data);
			$this->load->view('layout/footer');
	    }else{
	      echo "Anda tidak berhak mengakses halaman ini";
	    }
		
	}

	public function edit($id)
	{
		$data['pengurus'] = $this->pengurus_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
		$pengurus = $this->pengurus_model->ambil($id);
		if($pengurus->num_rows() < 1){
			show_404();
		}

		$this->load->view('edit/pengurus', array(
			'pengurus'=> $pengurus->row()
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

		$this->pengurus_model->edit_data($id,$data);
		redirect(base_url('pengurus'));
	}

	public function delete($id)
	{
		$data = $this->pengurus_model->hapus($id);
		redirect(base_url('pengurus'));
	}

	public function grafik()
	{
		$bekerja = $this->db->from('alumni')->where('status','bekerja')->get()->num_rows();
		$belum_bekerja = $this->db->from('alumni')->where('status','belum_bekerja')->get()->num_rows();

		$data['pengurus'] = $this->pengurus_model->tampil();
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('pengurusId'));
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
		$this->load->view('others/d_chart');
		$this->load->view('layout/g_footer', array('pekerja'=> array($bekerja,$belum_bekerja)));
		
	}
	
	}
