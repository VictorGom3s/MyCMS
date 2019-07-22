<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
  function insertUser($data){

    if(!$data || $data == NULL){
      return false;
    }

    $data['created_at'] = date('Y/m/d H:m:s');

    if($this->db->insert('usuarios', $data)){
      return true;
    }

    return false;
  }

  function updateUser($data, $id){
    if(!$data || $data == NULL){
      return false;
    }
    
    if(!$id || $id == NULL){
      return false;
    }
    $data['updated_at'] = date('Y/m/d H:m:s');
    
    $this->db->where('id', $id);
    if($this->db->update('usuarios', $data)){
      return true;
    }else{
      return false;
    }
  }

  function selectUserByEmailPasswd($email, $senha){
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

  function selectUserByID($id){
    $existe = false;

    if(isset($id) && $id){
      $query = $this->db->select('nome, email, senha, nivel')->from('usuarios')->where('id', $id)->get();

      if($query->result() != NULL){
        $existe = true;
        return $query->row();
      }
    }

    return false;
  }

  function selectAllUsers(){
    $data['users'] = $this->db->select('*')->from('usuarios')->get()->result();

    if($this->db->count_all_results() > 0){
      return $data;
    }else{
      return false;
    }
  }

  public function deleteUser($id){
    if($id === NULL){
      return false;
    }

    if($this->db->delete('usuarios', array('id' => $id))){
      return true;
    }else{
      return false;
    }
  }
}