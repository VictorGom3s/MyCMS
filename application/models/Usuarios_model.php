<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
  function insertUser($data){

    if(!$data && $data == NULL){
      echo "Erro ao inserir usuario";
      return false;
    }

    $data['created_at'] = date('Y/m/d H:m:s');

    if($this->db->insert('usuarios', $data)){
      echo "Usuário inserido com sucesso!";
      return true;
    }

    return false;
  }

  function updateUser($data, $id){
    
  }

  function selectUser($email, $senha){
    $existe = false;

    if($email != NULL && $senha != NULL){
      $query = $this->db->query("SELECT nome, email, senha FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'"); // query SQL
      if($query->result() != NULL){ // Se houver resultados da query anterior, verifica se as credencias batem com algum resultado
        foreach($query->result() as $row){
          if($row->email === $email && $row->senha === $senha){
            $existe = true;
            $data = $row;            
          }
        }
      }
    }

    if($existe){
      return $data; // Se existir, retorna as info do user
    }else {
      return false;
    }
  }

  public function deleteUser($id = NULL){
    if($id === NULL){
      echo "Nenhum usuario especificado!";
      exit;
    }

    if($this->db->delete('usuarios', array('id' => $id))){
      echo "Usuário excluido com sucesso!";
      exit;
      return true;
    }else{
      echo 'Erro ao deletar user';
      exit;
    }

    return false;
  }
}