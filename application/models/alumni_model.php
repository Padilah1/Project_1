<?php

/**
 *
 */
class alumni_model extends CI_Model
{
  protected $table = 'alumni';
  public function tampil()
  {
    return $this->db->get('alumni');
  }
  public function info()
  {
    // $this->db->order_by("waktu","isi_info");
    return $this->db->get('info');//->result();
  }
  public function edit_data($id,$data)
  {
      return $this->db
      ->where('id',$id)
      ->update($this->table,$data);
  }
  public function data()
  {
    return $this->db->get($this->table);
  }
  public function hapus($id)
  {
    return $this->db->delete('alumni',array('id' => $id));
  }
  public function ambil($id)
  {
    return $this->db->get_where($this->table,array(
      'id'=>$id
    ));
  }
  public function get()
  {
    $query = $this->db->query('SELECT * FROM alumni');
    return $query->result();
  }
  // public function search()
  //   {
  //       $this->db->where('nama LIKE', '%'. $_GET['search'] .'%');
  //   }

}
