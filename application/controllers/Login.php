<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('session');

    $logado = $this->session->userdata('logado');
    if($logado){
      redirect('base_url()');
    }

  }

  public function login(){

    $post = $this->input->post();

    if(isset($post['email']) && isset($post['senha'])){
      


    }
  }

  public function logout(){

  }

  public function recoverPassword(){

  }
}