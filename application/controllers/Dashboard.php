<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

  function __construct(){
    parent::__construct();
  }

  public function index(){

    $this->load->view('commons/header');
    $this->load->view('dashboard');
    $this->load->view('commons/footer');

  }

}