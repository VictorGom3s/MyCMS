<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Usuarios_model');
  }

  public function usersIndex(){
    $this->load->view('commons/header');
    $this->load->view('Users/index');
    $this->load->view('commons/footer');
  }

  public function usersRegister($id = NULL){
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
    $this->load->view('Users/register', (isset($data) && $data) ? $data : '');
    $this->load->view('commons/footer');
  }

}