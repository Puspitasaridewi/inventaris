<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Dashboard";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebaradmin');
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/footer');
	}
	public function pengadaan(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['data'] = $this->sistem_model->getPengCabang();
		
		$data['title']= "Pengadaan";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebaradmin');
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/pengadaan',$data);
		$this->load->view('templates/footer');
	}
	public function inventaris(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Inventaris";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebaradmin');
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/inventaris',$data);
		$this->load->view('templates/footer');
	}
}