<?php

/**
 *
 */
class akun_model extends CI_Model
{
	protected $userTbl = 'admin';
	public function tampil()
	{
    	return $this->db->get('alumni');
	}

	public function getRows($params  = array())
	{
		$this->db->select('*');
		$this->db->from($this->userTbl);

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
	
}
?>
