<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Usuarios_model');
  }

  public function index(){
    $data = $this->Usuarios_model->selectAllUsers();

    $this->load->view('commons/header');
    $this->load->view('Usuarios/index', $data);
    $this->load->view('commons/footer');
  }

  public function newUser($id = NULL){
    
    if($id != NULL){     
      /* Caso haja um ID, traz os dados do usuario */
      $data = $this->Usuarios_model->selectUserByID($id);
      if($data == NULL){
        echo '<h6>Usuário não encontrado!</h6>';   
        redirect(base_url('usuarios'));   
      }     
    }

    if($this->input->post()){     
      $post = $this->input->post();
      unset($post['hidden']);

      if(isset($post['senha'])){
        $post['senha'] = md5($post['senha']);
      }
      if($id){
        $update = $this->Usuarios_model->updateUser($post, $id);

        if($update){
          echo "Dados atualizados com sucesso!";
          redirect(base_url('editar/' . $id));
        }else{
          echo "Erro ao atualizar dados do usuário";
          redirect(base_url('editar/' . $id));
        }
      }else{
        $insert = $this->Usuarios_model->insertUser($post);
  
        if($insert){
          echo "Registro inserido com sucesso!";
          redirect(base_url('usuarios'));
        }else{
          echo "Erro ao inserir registro!";
          redirect(base_url('usuarios'));
        }
      }      
    }

    $this->load->view('commons/header');
    $this->load->view('Usuarios/register', (isset($data) && $data) ? $data : '');
    $this->load->view('commons/footer');
  }

  public function deleteUser($id = NULL){
    if($id === NULL){
      echo "Usuário não encontrado!";
      exit;
    }

    $retorno = $this->Usuarios_model->deleteUser($id);

    if($retorno){
      echo "Usuário excluido com sucesso!";
    }else{
      echo "Erro ao excluir usuário!";
    }
  }

}