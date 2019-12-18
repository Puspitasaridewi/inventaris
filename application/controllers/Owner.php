<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
	public function index(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Dashboard Pimpinan";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebarowner');
		$this->load->view('templates/topbar',$data);
		$this->load->view('pimpinan/index',$data);
		$this->load->view('templates/footer');
	}
	public function pengadaan(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Laporan Pengadaan Barang";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebarowner');
		$this->load->view('templates/topbar',$data);
		$this->load->view('pimpinan/index',$data);
		$this->load->view('templates/footer');
	}
	public function inventaris(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Laporan Inventaris";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebarowner');
		$this->load->view('templates/topbar',$data);
		$this->load->view('pimpinan/index',$data);
		$this->load->view('templates/footer');
	}
	public function petugas(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Daftar Petugas";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebarowner');
		$this->load->view('templates/topbar',$data);
		$this->load->view('pimpinan/index',$data);
		$this->load->view('templates/footer');
	}
}