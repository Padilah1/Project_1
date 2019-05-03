<?php

/**
 *
 */
class notulensi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('notulensi_model');
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
			$data['notulensi'] = $this->notulensi_model->tampil();
			$this->load->view('tampil/notulensi',$data);
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
			$user_pengurus=$this->login_model->get_pengurus($con);

			$this->load->view('layout/header', array(
				'user_pengurus' => $user_pengurus
			));
			$data['notulensi'] = $this->notulensi_model->tampil();
			$this->load->view('tampil/notulensi_prs',$data);
			$this->load->view('layout/footer');
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
		$data['notulensi'] = $this->notulensi_model->tampil();
		$this->load->view('tampil/notulensi_alm',$data);
		$this->load->view('layout/footer');
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
		$notulensi = $this->notulensi_model->ambil($id);
		if($notulensi->num_rows() < 1){
			show_404();
		}

		$this->load->view('/edit/notulensi', array(
			'notulensi'=> $notulensi->row()
		));
		$this->load->view('layout/footer');
	}
	public function do_edit($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'waktu' => $this->input->post('waktu'),
			'tgl_rapat' => $this->input->post('tgl_rapat'),
			'isi' => $this->input->post('isi'),
			'tempat' => $this->input->post('tempat'),
			'pimpinan' => $this->input->post('pimpinan'),
			'jml_kehadiran' => $this->input->post('jml_kehadiran'),
			'foto' => $this->input->post('foto'),
		 );
			$config['upload_path']          = './foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 2000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);

			$this->upload->do_upload('foto');
			$data['foto']=$this->upload->data('file_name');

		$this->notulensi_model->edit_data($id, $data);
		redirect(base_url('notulensi'));
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
		$notulensi = $this->notulensi_model->ambil($id);
		if($notulensi->num_rows() < 1){
			show_404();
		}

		$this->load->view('/edit/notulensi_prs', array(
			'notulensi'=> $notulensi->row()
		));
		$this->load->view('layout/footer');
	}
	public function do_edit_prs($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'waktu' => $this->input->post('waktu'),
			'tgl_rapat' => $this->input->post('tgl_rapat'),
			'isi' => $this->input->post('isi'),
			'tempat' => $this->input->post('tempat'),
			'pimpinan' => $this->input->post('pimpinan'),
			'jml_kehadiran' => $this->input->post('jml_kehadiran'),
			'foto' => $this->input->post('foto'),
		 );
			$config['upload_path']          = './foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 2000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);

			$this->upload->do_upload('foto');
			$data['foto']=$this->upload->data('file_name');

		$this->notulensi_model->edit_data($id, $data);
		redirect(base_url('notulensi/pengurus'));
	}
}

?>
