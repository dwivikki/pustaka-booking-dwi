<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model
{
    
    public function getSiswa()
    {
        return $this->db->get('siswa');
	}
    public function SimpanDataSiswa($data=null)
	{
       $this->db->insert('siswa',$data);
    }
    public function  siswaWhere($where)
    {
        return $this->db->get_where('siswa',$where);
    }
    public function  editDataSiswa($where,$data)
    {
       $this->db->update('siswa',$data,$where);
    }
    public function hapus($where=null)
    {
        $this->db->delete('siswa',$where);
    }
    
}