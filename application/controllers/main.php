<?php

/**
 *
 */
class main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('info_model');
	}
	public function index()
	{
		$data['info'] = $this->info_model->tampil();
		$this->load->view('tampil/index',$data);
	}
}
?>
