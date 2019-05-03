<?php
	if(! defined('BASEPATH')) exit('No direct sccript allowed');

class login_model extends CI_Model{

	protected $table = 'admin';

	public function __construct()
	{
		$this->admin = 'admin';
		$this->alumni = 'alumni';
	}

	function get_admin($params  = array()){
		$this->db->select('*');
		$this->db->from($this->admin);

		// fetch data by http_send_content_disposition(
		if (array_key_exists("conditions", $params)) {
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}

		if (array_key_exists("id", $params)) {
			$this->db->where('id',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
		} else {
			// set start and limit 
			if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['start']);
			} elseif (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['limit']);
			}
			$query = $this->db->get();
			if (array_key_exists("returnType", $params) & $params['returnType'] == 'count') {
				$result = $query->num_rows();
			} elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			} else {
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// return fetched array
		return $result;
	}

	function get_pengurus($params  = array()){
		$this->db->select('*');
		$this->db->from($this->admin);

		// fetch data by http_send_content_disposition(
		if (array_key_exists("conditions", $params)) {
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}

		if (array_key_exists("id", $params)) {
			$this->db->where('id',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
		} else {
			// set start and limit 
			if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['start']);
			} elseif (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['limit']);
			}
			$query = $this->db->get();
			if (array_key_exists("returnType", $params) & $params['returnType'] == 'count') {
				$result = $query->num_rows();
			} elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			} else {
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// return fetched array
		return $result;
	}

	function get_alumni($params  = array()){
		$this->db->select('*');
		$this->db->from($this->alumni);

		// fetch data by http_send_content_disposition(
		if (array_key_exists("conditions", $params)) {
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}

		if (array_key_exists("id", $params)) {
			$this->db->where('id',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
		} else {
			// set start and limit 
			if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['start']);
			} elseif (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
				$this->db->limit($params['limit']);
			}
			$query = $this->db->get();
			if (array_key_exists("returnType", $params) & $params['returnType'] == 'count') {
				$result = $query->num_rows();
			} elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			} else {
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// return fetched array
		return $result;
	}

	public function insert($data) {
		if (!array_key_exists("created", $data)) {
				$data['created'] = date("Y-m-d H:i:s");
			}
		if (!array_key_exists("modified", $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}

		$insert = $this->db->insert($this->alumni, $data);

		if ($insert) {
			return $this->db->insert_id();;
		} else {
			return false;
		}
	}

	public function get_member_by_username($username)
	{
		return $this->db->get_where('alumni', array('username'=>$username))->row();
	}

	public function get_member_by_id($id)
	{
		return $this->db->get_where('alumni', array('id'=>$id))->row();
	}

	public function register($data_alumni)
	{
		$this->db->insert('alumni', $data_alumni);
	}

	public function data()
	{
		return $this->db->get($this->alumni);
	}
}
