<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMaster extends CI_Model
{
   	public function getAll($table)
	{
		return $this->db->get($table);
	}
	
	public function getBy($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
 
	public function add($table, $data)
	{
		$this->db->insert($table, $data);
	}
 
	public function edit($table, $where, $data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function joinTargetUserPelanggan()
    {
        $this->db->select('target.id_target, target.id_pelanggan, target.id_user, pelanggan.noreg_pelanggan, pelanggan.nama_pelanggan, target.noba_target, target.ket_target, user.nama_user, target.id_status, target.tgl_ba');
        $this->db->from('target');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = target.id_pelanggan');
		$this->db->join('user', 'user.id_user = target.id_user', 'left');
        
		return $this->db->get();
    }
	
	public function getByCondition($where)
	{
		$this->db->select('target.*, pelanggan.noreg_pelanggan, pelanggan.nama_pelanggan, user.nama_user');
        $this->db->from('target');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = target.id_pelanggan');
		$this->db->join('user', 'user.id_user = target.id_user', 'left');
		$this->db->where($where);
        
		return $this->db->get();
	}
}