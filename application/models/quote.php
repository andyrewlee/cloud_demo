<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends CI_Model {
  function all() {
    return $this->db->query("SELECT * FROM quotes")->result_array();
  }
}

// end of quote model
