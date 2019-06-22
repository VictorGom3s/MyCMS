<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
  function save($data){
    
  }

  function alter($data){

  }

  function select($email, $senha){
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
}