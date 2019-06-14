<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function login(){
    $this->load->view('commons/header');
    $this->load->view('login');
    $this->load->view('commons/footer');
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

    $this->load->view('commons/header');
    $this->load->view('Users/register', (isset($data) && $data) ? $data : '');
    $this->load->view('commons/footer');
  }

}