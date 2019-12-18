<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Sistem_model extends CI_Model{

	public function getCabangById($id){
		return $this->db->get_where('cabang', ['id' => $id])->row_array();
	}
	public function getRole(){
		$hasil = $this->db->query("SELECT * FROM role");
		 return $hasil;
	}
	public function getCabang(){
		$hasil=$this->db->query("SELECT * FROM cabang");
        return $hasil;
	}
	public function getUser(){
		$this->db->select('user.*,role.role_id,role.role_name,cabang_nama');
		$this->db->join('role','user.role=role.role_id');
		$this->db->join('cabang','user.cabang_id=cabang.id');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function pengadaan(){
		$this->db->select('pengadaan.*,barang.*,cabang.*');
		$this->db->join('cabang','pengadaan.cabang_id=cabang.id');
		$this->db->join('barang','pengadaan.barang_id=barang.barang_id');
		$this->db->from('pengadaan');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getPengCabang(){
		$this->db->select('pengadaan.*,barang.*,cabang.*,user.*');
		$this->db->join('cabang','pengadaan.cabang_id=cabang.id');
		$this->db->join('user','cabang.id=user.cabang_id');
		$this->db->join('barang','pengadaan.barang_id=barang.barang_id');
		$this->db->from('pengadaan');
		// $this->db->where('user', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getBarang(){
		$hasil=$this->db->query("SELECT * FROM barang");
        return $hasil;
	}
	public function getInvent(){
		$this->db->select('inventaris.*,pengadaan.*,golongan.*,barang.*');
		$this->db->join('golongan','golongan.gol_id=inventaris.gol_id');
		$this->db->join('pengadaan','pengadaan.pengadaan_id=inventaris.pengadaan_id');
		$this->db->join('barang','pengadaan.barang_id=barang.barang_id');
		$this->db->from('inventaris');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function editInvent($inventaris,$barang,$jumlah,$kondisi){
		// $sql = "INSERT INTO helpdesk SELECT inventaris.inventaris_id, barang.barang_id, pengadaan.jumlah, inventaris.kondisi FROM inventaris JOIN pengadaan on pengadaan.pengadaan_id=inventaris.pengadaan_id join barang on barang.barang_id=pengadaan.barang_id WHERE inventaris.kondisi=\'rusak ringan\'";
		$this->db->insert('helpdesk');
		$this->db->select('inventaris.inventaris_id,barang.barang_id,pengadaan.pengadaan_id,inventaris.kondisi');
		$this->db->join('pengadaan','pengadaan.pengadaan_id=inventaris.pengadaan_id');
		$this->db->join('barang','barang.barang_id=pengadaan.barang_id');
		$query = $this->db->get_where('inventaris',['kondisi'=>$this->input->post($kondisi)]);
		return $query->result_array();
	}
	public function getGol(){
		$hasil=$this->db->query("SELECT * FROM golongan");
        return $hasil;
	}
	 function update(){
        $pengadaan=$this->input->post('pengadaan_id');
        
        $status=$this->input->post('status');
        $data=$this->m_barang->update_barang($kobar,$nabar,$harga);
        echo json_encode($data);
    }
    public function getHelpdesk(){
    	
    	$this->db->select('helpdesk.*,pengadaan.*,inventaris.*,barang.*');
		$this->db->join('inventaris','inventaris.inventaris_id=helpdesk.inventaris');
		$this->db->join('pengadaan','pengadaan.pengadaan_id=inventaris.pengadaan_id');
		$this->db->join('barang','barang.barang_id=pengadaan.barang_id');
		$this->db->from('helpdesk');
		$query = $this->db->get();
		return $query->result_array();
    }
}