<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function usersIndex(){
    $this->load->view('commons/header');
    $this->load->view('Users/index');
    $this->load->view('commons/footer');
  }

}