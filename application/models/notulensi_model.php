<?php

	class notulensi_model extends CI_Model
	{
		protected $table = 'notulensi';

		public function tampil()
		{
		  	return $this->db->get('notulensi');
		}
		public function ambil($id)
		{
			return $this->db->get_where('notulensi',array(
				'id'=>$id
			));
		}

		public function edit_data($id, $data)
		{
		      return $this->db
		  		->where('id',$id)
		  		->update($this->table,$data);
		}
	}

?>
