<?php

  /**
   *
   */
  class Admin_c extends CI_Controller{

    // public function index(){
    //   $this->load->model('houseshare_m');
    //   $this->displayUser();
    // }

    public function index() {
  		$this->load->model('admin_m');
      $this->load->view('templates/header');
      $this->load->view('houseshare/adminmanageuser');
      // $this->load->view('templates/footer');
		}

    // public function view($page = 'adminmanageuser'){
		// 	if(!file_exists(APPPATH.'views/houseshare/'.$page.'.php')){
		// 		show_404();
		// 	}
		// 	$data['title'] = ucfirst($page);
		// 	$this->load->view('templates/header');
		// 	$this->load->view('houseshare/'.$page, $data);
		// 	// $this->load->view('templates/footer');
    //
		// }

    public function adminmanageuser(){
      $this->load->view('templates/header');
      $this->load->view('houseshare/adminmanageuser');
    }

    public function displaUser(){
      $data['alluser'] = $this->houseshare_m->displayUpdateDelete();
      $this->load->view('houseshare/index', $data);
    }

    // public function adduser(){
    //
    // }

    public function adminupdatedelete(){
      $this->load->model('houseshare_m');
      $data['userdata'] = $this->houseshare_m->displayUpdateDelete();
      $this->load->view('templates/header');
      $this->load->view('houseshare/adminupdatedelete',$data);
    }

    public function adminupdate(){
      $this->load->model('houseshare_m');
      $username = $this->uri->segment('3');
      $data1['user1'] = $this->houseshare_m->fetchupdate($username);
      // $data['userdata'] = $this->houseshare_m->displayUpdateDelete();
      $this->load->view('templates/header');
      $this->load->view('houseshare/adminupdate',$data1);
    }

    public function admindelete(){
      $this->load->model('houseshare_m');
      $username = $this->uri->segment('3');
      $this->houseshare_m->delete($username);
      $this->adminupdatedelete();
    }

    public function updatevalidation(){
      $this->load->model('houseshare_m');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('fname','First Name','trim|required');
      $this->form_validation->set_rules('lname', 'Last Name','trim|required');
      $this->form_validation->set_rules('email','E-mail','valid_email|trim|required');
      $this->form_validation->set_rules('phone','Phone','regex_match[/^[0-9]{8}$/]');
      if ($this->form_validation->run() == FALSE){
        echo 'validation failed';
        $this->adminupdate();
      }
      else{
        $username =$this->input->post("username");
        $data = array(
          'fname' => $this->input->post("fname"),
          'lname' => $this->input->post("lname"),
          'emailid' => $this->input->post("email"),
          'phnbr' => $this->input->post("phone")
          );
          echo  $this->input->post("fname");
          echo $username;
          $this->houseshare_m->dataupdate($data,$username);
          $this->adminupdatedelete();

      }
    }

  }
