<?php
class users extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('alumni_model');
		$this->load->helper(array('form', 'url' ));
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('layout/u_header');
		$this->load->view('users/login_alumni');
		$this->load->view('layout/u_footer');
	}

	function admin(){
		$this->load->view('layout/u_header');
		$this->load->view('users/login_admin');
		$this->load->view('layout/u_footer');
	}
	function pengurus(){
		$this->load->view('layout/u_header');
		$this->load->view('users/login_pengurus');
		$this->load->view('layout/u_footer');
	}

	public function akun_admin() {
		$con['returnType'] = 'single' ;
		$con['conditions'] = array(
			'id'=>$this->session->userdata('adminId'));
		$user_admin=$this->login_model->get_admin($con);


		$this->load->view('layout/header', array(
			'user' => $user_admin
		));
		$data = array();
		if ($this->session->userdata('userMasuk')){
			$data['login_model']	= $this->login_model->get_admin(array(
				'id'=>$this->session->userdata('adminId')));
			// load The view 
			$this->load->view('tampil/akun_admin', $data);
		} else {
			redirect('users/login');
		}
		$this->load->view('layout/footer');
	}

	public function akun_alumni() {
			$con['returnType'] = 'single' ;
			$con['conditions'] = array(
				'id'=>$this->session->userdata('userId'));
			$user_alumni=$this->login_model->get_alumni($con);


			$this->load->view('layout/alumni_header', array(
				'user' => $user_alumni
			));
			$data = array();
			if ($this->session->userdata('userMasuk')){
				$data['login_model']	= $this->login_model->get_alumni(array(
					'id'=>$this->session->userdata('userId')));
				// load The view 
				$this->load->view('tampil/akun_alumni', $data);
			} else {
				redirect('users/login');
			}
			$this->load->view('layout/footer');

		}
		public function akun_pengurus() {
		$con['returnType'] = 'single' ;
		$con['conditions'] = array(
			'id'=>$this->session->userdata('pengurusId'));
		$user_pengurus=$this->login_model->get_pengurus($con);


		$this->load->view('layout/header', array(
			'user_pengurus' => $user_pengurus
		));
		$data = array();
		if ($this->session->userdata('userMasuk')){
			$data['login_model']	= $this->login_model->get_pengurus(array(
				'id'=>$this->session->userdata('pengurusId')));
			// load The view 
			$this->load->view('tampil/akun_pengurus', $data);
		} else {
			redirect('users/login');
		}
		$this->load->view('layout/footer');
	}
	public function login_admin(){
		if ($this->session->has_userdata('adminId')) {
			redirect('page');
		}
		$data	= array();
		if ($this->session->userdata('succes_msg')) {
			$data['succes_msg'] = $this->session->userdata('succes_msg');
			$this->session->unset_userdata('succes_msg');
		}
		if ($this->session->userdata('error_msg')) {
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
		}
		if ($this->input->post('loginSubmit')) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == true) {
				$con['returnType'] = 'single' ;
				$con['conditions'] = array(
					'username'=>$this->input->post('username'),
					'password' =>md5($this->input->post('password')),
					'level' => '1'
				);
				$checkLogin	= $this->login_model->get_admin($con);
				if ($checkLogin ) {
					$this->session->set_userdata('akses', '1' );
					$this->session->set_userdata('userMasuk', TRUE);
					$this->session->set_userdata('adminId',$checkLogin['id']);
					redirect('page');
				} else {
					$data['error_msg'] = 'Wrong email or Password, please try again';
				}
			}
		}
		$this->load->view('layout/u_header');
		// $this->load->view('layout2/footer');
		$this->load->view('users/login_admin', $data);
		$this->load->view('layout/u_footer');
	}
	public function login_alumni(){
		if ($this->session->has_userdata('userId')) {
			redirect('page/alumni');
		}

		$data	= array();
		if ($this->session->userdata('succes_msg')) {
			$data['succes_msg'] = $this->session->userdata('succes_msg');
			$this->session->unset_userdata('succes_msg');
		}
		if ($this->session->userdata('error_msg')) {
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
		}
		if ($this->input->post('loginSubmit')) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == true) {
				$con['returnType'] = 'single' ;
				$con['conditions'] = array(
					'username'=>$this->input->post('username'),
					'password' =>md5($this->input->post('password')),
				);
				$checkLogin	= $this->login_model->get_alumni($con);
				if ($checkLogin) {
					$this->session->set_userdata('akses', '3' );
					$this->session->set_userdata('userMasuk', TRUE);
					$this->session->set_userdata('userId',$checkLogin['id']);
					// redirect('page');
					redirect('page/alumni');
				} else {
					$data['error_msg'] = 'Wrong email or Password, please try again';
				}
			} else {
				echo "Login Gagal";
			}
		} else {
			echo "tidak Tertekan";
		}
	}
	public function login_pengurus(){
		if ($this->session->has_userdata('pengurusId')) {
			redirect('page');
		}
		$data	= array();
		if ($this->session->userdata('succes_msg')) {
			$data['succes_msg'] = $this->session->userdata('succes_msg');
			$this->session->unset_userdata('succes_msg');
		}
		if ($this->session->userdata('error_msg')) {
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
		}
		if ($this->input->post('loginSubmit')) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == true) {
				$con['returnType'] = 'single' ;
				$con['conditions'] = array(
					'username'=>$this->input->post('username'),
					'password' =>md5($this->input->post('password')),
					'level' => '2'
				);
				$checkLogin	= $this->login_model->get_pengurus($con);
				if ($checkLogin ) {
					$this->session->set_userdata('akses', '2' );
					$this->session->set_userdata('userMasuk', TRUE);
					$this->session->set_userdata('pengurusId',$checkLogin['id']);
					redirect('page/pengurus');
				} else {
					$data['error_msg'] = 'Wrong email or Password, please try again';
				}
			}
		}
		$this->load->view('layout/u_header');
		// $this->load->view('layout2/footer');
		$this->load->view('users/login_pengurus',$data);
		$this->load->view('layout/u_footer');
	}

	public function registration()
	{
		$this->session->unset_userdata('userMasuk');
		$this->session->unset_userdata('userId');
		$this->session->sess_destroy();

		$this->load->view('layout/u_header');
		$status = $this->alumni_model->data();

		$this->load->view('users/registration', array(
			'status'=> $status
		));
		$this->load->view('layout/u_footer');
	}

	public function register(){
		if (!$this->session->userdata('userId')) {
			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');	
			$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');	
			$this->form_validation->set_rules('agama', 'Agama', 'required');	
			$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('status', 'Status');
			$this->form_validation->set_rules('tempat_bekerja', 'Tempat Bekerja');
			$this->form_validation->set_rules('jabatan', 'Jabatan');
			$this->form_validation->set_rules('username', 'Username', 'required');	
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');	
			$this->form_validation->set_rules('no_hp', 'Nomor telepon', 'required|numeric');	
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[retype_password]');	
			$this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[5]|matches[password]');	

			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('failed', validation_errors('<div class="alert alert-danger">','</div>'));
				redirect('users/registration');				
			} else {	
				// proses upload gmabar
				$config['upload_path']         = 'foto/';  // folder upload 
	            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
	            $config['max_size']             = 3000;
	            $config['max_width']            = 1024;
	            $config['max_height']           = 768;
	 
	            $this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('photo')) //sesuai dengan name pada form 
		            {
		                echo 'anda gagal upload';
		            }
		            $file = $this->upload->data();	
					$gambar = $file['file_name'];

					//proses register
					$data_alumni = array(
						'nama' =>$this->input->post('nama'),
						'alamat' =>$this->input->post('alamat'),
						'tgl' =>$this->input->post('tgl'),
						'agama' =>$this->input->post('agama'),
						'jurusan' =>$this->input->post('jurusan'),
						'status' =>$this->input->post('status'),
						'tempat_bekerja' =>$this->input->post('tempat_bekerja'),
						'jabatan' =>$this->input->post('jabatan'),
						'username' =>$this->input->post('username'),
						'email' =>$this->input->post('email'),
						'no_hp' =>$this->input->post('no_hp'),
						'photo' =>$gambar,
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
					);
					$this->login_model->register($data_alumni);
						
					//proses login
					$alumni=$this->login_model->get_member_by_username($this->input->post('username'));
					$this->session->set_userdata(array(
						'userId' => $alumni->id,
						'userNama' => $alumni->nama,
						'userEmail' => $alumni->email,
						'userMasuk' => TRUE
					));
				}
		}redirect('users');
	}

	public function logout_admin(){
		$this->session->unset_userdata('userMasuk');
		$this->session->unset_userdata('adminId');
		$this->session->sess_destroy();
		redirect('users/admin');
	}

	public function logout_alumni(){
		$this->session->unset_userdata('userMasuk');
		$this->session->unset_userdata('userId');
		$this->session->sess_destroy();
		redirect('users');
	}
	public function logout_pengurus(){
		$this->session->unset_userdata('userMasuk');
		$this->session->unset_userdata('pengurusId');
		$this->session->sess_destroy();
		redirect('users/pengurus');
	}

	public function email_check($str){
		$con['returnType'] = 'count';
		$con['conditions'] = array('email'=>$str);
		$checkEmail = $this->_model->getRows($con);
		if ($checkEmail > 0) {
			$this->form_validation->set_message('email_check','Email Sudah Ada');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
