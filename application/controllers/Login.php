<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {



  public function index()
  {
    $this->load->view('login');
  }

  public function loginuser()
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $query=$this->db->get_where('users', array('username' => $username),1);
    $userdetails[]="";
    $errmsgs[]="";
    if(empty($query->result())){
       $errmsgs['username_err']= 'No account found with that username.';
       $this->load->view('login',$errmsgs);
     }
     else {
    foreach ($query->result() as $row) {
      $userdetails['uname']=$row->username;
      $userdetails['email']=$row->emailid;
      $userdetails['pass']=$row->password;
      $userdetails['urole']=$row->userrole;
      $userdetails['fname']=$row->fname;
      $userdetails['lname']=$row->lname;
      $userdetails['guestOf']=$row->guestOf;
      $userdetails['phnnbr']=$row->phnbr;
    }

    if ($password == $userdetails['pass']){
      $sesdata = array(
        'username'  =>   $userdetails['uname'],
        'email'     =>   $userdetails['email'],
        'fname' =>   $userdetails['fname'],
        'lname'  =>   $userdetails['lname'],
        'userrole' =>   $userdetails['urole'],
        'guestOf'  =>   $userdetails['guestOf'],
        'phnbr'=>$userdetails['phnnbr']
      );
      $this->session->set_userdata($sesdata);
      $this->load->view('userindex');

    }
    else {
      $errmsgs['password_err']="Password incorrect.";
      $this->load->view('login',$errmsgs);
    }
    }
    //echo $errmsgs['username_err'];
  }

}
