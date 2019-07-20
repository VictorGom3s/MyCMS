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

  public function newUser(){
        
    if($this->input->post()){
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

  public function updateUser($id){
    $data = $this->Usuarios_model->selectUserByID($id);

    if($this->input->post() && $data != false){
      $post = $this->input->post();
      $update = $this->Usuarios_model->updateUser($post, $id);

      if($update){
        echo "Dados atualizados com sucesso!";
      }else{
        echo "Erro ao atualizar dados do usuário";
      }

    }else if($data == false){
      echo '<h6>Usuário não encontrado!</h6>';
    }

    $this->load->view('commons/header');
    $this->load->view('Usuarios/register', (isset($data) && $data) ? $data : '');
    $this->load->view('commons/footer');
  }

}