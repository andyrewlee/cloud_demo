<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

  public function index()
  {
    $this->load->model('Quote');
    $data['quotes'] = $this->Quote->all();
    $this->load->view('index', $data);
  }
}

//end of main controller
