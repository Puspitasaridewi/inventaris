<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run()==false){
			$this->load->view('auth/login');
		}else{
			$this->_login();
		}
		
	}
	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['username'=>$username])->row_array();
		if($user){
			//cek password
			if(password_verify($password, $user['password'])){
				$data =[
					'username' => $user['username'],
					'role'=>$user['role']];

					$this->session->set_userdata($data);
					if($user['role'] == 1){
						redirect('manajemen');
					}elseif($user['role']==2){
						redirect('owner');
					}else{
						redirect('admin');
					}

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Wrong password! </div>');
			redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Username is Not Registered! </div>');
			redirect('auth');
		}
	}
	public function registration(){
		
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[password1]',['matches' => 'password dont match!','min_length'=> 'password too short']);
		$this->form_validation->set_rules('password1','Password','required|trim|matches[password]');
		$this->form_validation->set_rules('hak_akses','Hak_akses','required');
		$this->form_validation->set_rules('cabang','Cabang','required');

		if($this->form_validation->run() == false){
			$this->load->view('auth/registration');
		}else {
			$data= [
				'username' => htmlspecialchars($this->input->post('username')),
				
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'role' => $this->input->post('hak_akses'),
				'cabang_id' =>$this->input->post('cabang'),
			];
			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Congratulation! </div>');
			redirect('manajemen/petugas');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Logout </div>');
		redirect('auth');
		
	}
}
