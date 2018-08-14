<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {



  public function index()
  {
    $ses_vars=array("username", "email", "fname", "lname","userrole","guestOf");
    $this->session->unset_userdata($ses_vars);
    $this->load->view('publichome');

  }

}
