<?php

class info_model extends CI_Model
{
	protected $table = 'info';

	public function tampil()
	{
	  	return $this->db->get('info');
	}

  // public function simpan($data)
	// {
	// 	return $this->db->insert('info', $data);
	// }

	public function ambil($id)
	{
		return $this->db->get_where('info',array(
			'id'=>$id
		));
	}

	public function edit_data($id, $data)
	{
	      return $this->db
	  		->where('id',$id)
	  		->update($this->table,$data);
	}

	// public function hapus($id)
	// {
	// 	return $this->db->delete('data_alumni',array('id' => $id));
	// }

	// public function get_detail($id = NULL)
	// {
	// 	$query = $this->db->get_where('data_alumni', array('id' => $id))->row();
	// 	return $query;
	// }
}
?>
