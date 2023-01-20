<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function index()
 {
    $this->form_validation->set_rules('username', 'username', 'required|trim|valid_username', [
        'required' => 'Email Harus diisi!!',
        'valid_username' => 'Email Tidak Benar!!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
        'required' => 'Password Harus diisi'
    ]);
  $this->load->view('v_login');
 }

 public function ceklogin(){

  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $this->load->model('model_login');
  $this->model_login->ambillogin($username,$password);

 }

 public function logout(){
  $this->session->set_userdata('username', FALSE);
  $this->session->sess_destroy();
  redirect('login');
  }
 
}