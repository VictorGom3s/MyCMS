<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('session');
    $this->load->model('Usuarios_model');

  }

  public function index()
  {
    $this->load->view('commons/header');
    $this->load->view('login');
    $this->load->view('commons/footer');
  }

  public function login(){

    $post = $this->input->post();

    if(isset($post['email']) && isset($post['senha'])){
      $email = $post['email'];
      $senha = md5($post['senha']);

      $user = $this->Usuarios_model->select($email, $senha);
      
      if($user){
        $this->session->set_userdata('logado', true);
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('senha', $user->senha);
        $this->session->set_userdata('nome', $user->nome);

        $logado = $this->session->userdata('logado');

        $this->session->set_flashdata('Usuario logado com sucesso!');
        redirect(base_url('/'));
      }else{
        $this->session->set_flashdata("E-mail ou senha incorretos!");
        redirect(base_url('login'));
      }     
    }
  }

  public function logout(){

    if($this->session->userdata('logado')){
      $this->session->unset_userdata('logado');
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('senha');
    }

    redirect(base_url('Login/index'));
  }

  public function recoverPassword(){

  }
}