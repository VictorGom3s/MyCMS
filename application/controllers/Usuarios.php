<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Usuarios_model');
  }

  public function index(){
    $this->load->view('commons/header');
    $this->load->view('Usuarios/index');
    $this->load->view('commons/footer');
  }

  public function newUser($id = NULL){
    if($id != NULL){
      $data['id'] = $id;
    }
    
    if($this->input->post() && $id === NULL){
      $post = $this->input->post();
      unset($post['hidden']);
      $post['senha'] = md5($post['senha']);
      $insert = $this->Usuarios_model->insertUser($post);

      if($insert){
        echo "Registro inserido com sucesso!";
        exit;
      }else{
        echo "Erro ao inserir registro!";
        exit;
      }
    }
    $this->load->view('commons/header');
    $this->load->view('Usuarios/register', (isset($data) && $data) ? $data : '');
    $this->load->view('commons/footer');
  }

}