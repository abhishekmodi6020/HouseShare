<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userinfo extends CI_Controller {



  public function index()
  {
    /*fetch data from session variables for Userinfo*/
    $details['uname']=$this->session->userdata('username');
    $details['email']=$this->session->userdata('email');
    $details['fname']=$this->session->userdata('fname');
    $details['lname']=$this->session->userdata('lname');
    $details['urole']=$this->session->userdata('userrole');
    $details['guestOf']=$this->session->userdata('guestOf');
    $details['phnnbr']=$this->session->userdata('phnnbr');
    $query=$this->db->get_where('users', array('username' =>$details['guestOf'] ));
    foreach ($query->result() as $det) {
      $details['gof']=$det->fname;
      $details['gof2']=$det->lname;
    }

    /*pass the data on to the view and load the view*/
    $this->load->view('userinfo',$details);
  }

}
