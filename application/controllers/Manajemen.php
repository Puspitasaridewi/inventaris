<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('sistem_model');
    }

	public function index(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();

		$data['title']= "Dashboard";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$data);
		$this->load->view('manajemen/index',$data);
		$this->load->view('templates/footer');
	}
	public function barang(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['title']= "Daftar Barang";
		$data['barang'] = $this->db->get('barang')->result_array();

		$this->form_validation->set_rules('barang_nama','Barang_nama','required|is_unique[barang.barang_nama]');
		$this->form_validation->set_rules('barang_satuan','Barang_satuan','required');
		if($this->form_validation->run()== false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar',$data);
			$this->load->view('manajemen/barang',$data);
			$this->load->view('templates/footer');
		}else{
			$this->db->insert('barang',['barang_nama'=> $this->input->post('barang_nama'),
				'barang_satuan'=> $this->input->post('barang_satuan')]);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> New menu added! </div>');
			redirect('Manajemen/barang');
		}
	}

	public function cabang(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['cabang'] = $this->db->get('cabang')->result_array();
		$data['title']= "Daftar Cabang";

		$this->form_validation->set_rules('cabang_nama','Cabang_nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('no_telp','No_telp','required');
		if($this->form_validation->run()== false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar',$data);
			$this->load->view('manajemen/cabang',$data);
			$this->load->view('templates/footer');
		}else{
			$this->db->insert('cabang',['cabang_nama'=> $this->input->post('cabang_nama'),
				'alamat'=> $this->input->post('alamat'),
				'no_telp'=> $this->input->post('no_telp')]);
			redirect('Manajemen/cabang');
		}
		
	}
	public function ubah(){
		echo json_encode($this->model('Sistem_model')->getCabangById($_POST['id']));
	}
	public function pengadaan(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['barang']=$this->sistem_model->getBarang();
		$data['cabang']=$this->sistem_model->getCabang();
		$data['data'] = $this->sistem_model->pengadaan();
		$data['title']= "Pengadaan Barang";

		$this->form_validation->set_rules('tgl_pengadaan','Tgl_pengadaan','required');
		$this->form_validation->set_rules('cabang','Cabang','required');
		$this->form_validation->set_rules('barang','Barang','required');
		$this->form_validation->set_rules('jumlah','No_telp','required');
		$this->form_validation->set_rules('harga','No_telp','required');
		if($this->form_validation->run()== false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar',$data);
			$this->load->view('manajemen/pengadaan',$data);
			$this->load->view('templates/footer');
		}else{
			$this->db->insert('pengadaan',['tgl_pengadaan'=> $this->input->post('tgl_pengadaan'),
				'cabang_id'=> $this->input->post('cabang'),
				'barang_id'=> $this->input->post('barang'),
				'jumlah'=> $this->input->post('jumlah'),
				'harga'=> $this->input->post('harga'),
				'status'=>'tidak setujui']);
			redirect('Manajemen/pengadaan');
		}

		
	}
	public function updateStatus(){
		
	}
	public function inventaris(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['golongan']=$this->sistem_model->getGol();
		$data['barang']=$this->sistem_model->getInvent();

		$data['title']= "Inventaris";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$data);
		$this->load->view('manajemen/inventaris',$data);
		$this->load->view('templates/footer');
	}
	public function edit(){
		$inventaris = $this->input->post('inventaris_id');
		$barang = $this->input->post('barang');
		$jumlah = $this->input->post('jumlah');
		$kondisi = $this->input->post('kondisi');
		$this->sistem_model->editInvent($inventaris,$barang,$jumlah,$kondisi);
		redirect('manajemen/helpdesk');

	}
	public function helpdesk(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['data']=$this->sistem_model->getHelpdesk();
		$data['title']= "Daftar Helpdesk";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$data);
		$this->load->view('manajemen/helpdesk',$data);
		$this->load->view('templates/footer');
	}
	public function petugas(){
		$data['user'] = $this->db->get_where('user',['username'=> 
		$this->session->userdata('username')])->row_array();
		$data['petugas']=$this->sistem_model->getRole();

		$data['data'] = $this->sistem_model->getUser();
		$data['cabang']=$this->sistem_model->getCabang();
		$data['title']= "Daftar Petugas";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$data);
		$this->load->view('manajemen/petugas',$data);
		$this->load->view('templates/footer');
	}
}