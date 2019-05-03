<?php

/**
 *
 */
class pengurus_model extends CI_Model
{
	protected $table = 'admin';

	public function tampil()
	{    
	  	return $this->db->get('admin');
	}
	
  	public function simpan($data)
	{
		return $this->db->insert('info', $data);
	}

	public function ambil($id)
	{
		return $this->db->get_where('admin',array(
			'id'=>$id
		));
	}
	
	public function edit_data($id,$data)
	{
      return $this->db
  		->where('id',$id)
  		->update($this->table,$data);
	}
  	
  	public function hapus($id)
	{
		return $this->db->delete($this->table,array('id' => $id));
	}
}
