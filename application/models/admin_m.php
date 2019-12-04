<?php

class Houseshare_m extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function displayUpdateDelete(){
    $querydisplay = $this->db->query('SELECT fname, lname, username, userrole from users');

    if ($querydisplay){
      return $querydisplay->result();
    }
  }
  public function fetchupdate($username){
    $this->db->SELECT('username,fname,lname,emailid,userrole,phnbr,guestOf');
    $this->db->FROM('users');
    $this->db->WHERE('username',$username);

    // $query = $this->db->query('SELECT username,fname,lname,emailid,userrole,phnbr,guestOf from users where username = $username');
    $query=$this->db->get();
    // print_r($query);
    if ($query) {
      // echo 'data fetched';
      return $query->result();
    }
  }

  public function delete($username) {
   $this->db->WHERE('username',$username);
     $this->db->delete('users');
  }

  public function dataupdate($data,$username){
    $this->db->where('username', $username);
    $this->db->update('users',$data);
    // $query=$this->db->get();
    // print_r($query);
  }


}
