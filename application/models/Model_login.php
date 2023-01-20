<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

 public function ambillogin($username,$password)
 {
  $this->db->where('username', $username);
  $this->db->where('password', $password);
  $query = $this->db->get('user');
  if ($query->num_rows()>0){
   foreach ($query->result() as $row) {
    $sess = array ('username' => $row->username,
        'password' => $row->password
      );
   }
  $this->session->set_userdata($sess);
  redirect('welcome');
  }
  else{
   $this->session->set_flashdata('info','<div class="alert alert-danger alert-message" role="alert">Login Gagal!! Username atau Password Salah</div>');
   redirect('login');
  }
 }


 public function keamanan(){
  $username = $this->session->userdata('username');
  if(empty($username)){
   $this->session->sess_destroy();
   redirect('login');
  }
 }

}