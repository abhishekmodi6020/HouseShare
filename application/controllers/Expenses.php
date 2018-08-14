<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function index()
	{
		$query="";
		if ($this->session->userdata('username')==null) {
			$this->load->view('login');
		}
		else{
    $userrole = $this->session->userdata('userrole');
    if ($userrole=="owner"){
      $query = $this->db->get('expenses');
    }
    else {
      $guestof = $this->session->userdata('guestOf');
      $query = $this->db->get_where('expenses', array('toBePayedBy' => $guestof));
    }
    $expenses =  $query->result();


    $expns['expense'] = $expenses;
    $expns['usrole'] = $userrole;
		$this->load->view('manageexpenses.php',$expns);
		}
	}


  public function createexpense()
  {
    echo "create expense";
    $this->load->view('createexpense');
  }

  public function addnewexpense()
  {
    $incurer=$this->session->userdata('username');
    $payer="";
    $userrole = $this->session->userdata('userrole');

    if ($userrole=='owner'){
      $payer=$incurer;
    }
    else{
      $payer=$this->session->userdata('guestOf');
      echo "inside else";
    }

    $this->load->model('Expense_Model');

         $data = array(
            'toBePayedBy'=>$payer,
            'IncurrerId' => $incurer,
            'Description' =>$this->input->post('desc'),
            'Amount' =>$this->input->post('amt'),
            'EDate' =>date('Y-m-d', strtotime($this->input->post('edate'))),
            'Remarks' => $this->input->post('remarks'),
         );

         $this->Expense_Model->insert($data);
         $this->index();
  }

  public function delete_expense() {
         $this->load->model('Expense_Model');
         $expenseid = $this->uri->segment('3');
         $this->Expense_Model->delete($expenseid);
         $this->index();
      }

  public function update()
  {
			$expenseid = $this->uri->segment('3');
			$query=$this->db->get_where('expenses', array('ExpenseId' => $expenseid));
			$expns[]="";
			foreach($query->result() as $row){
				$expns['expenseid']= $expenseid;
				$expns['desc']= $row->Description;
				$expns['amt']= $row->Amount;
				$expns['edate']= $row->EDate;
				$expns['remarks']= $row->Remarks;
			}
			echo $expns['desc'];
			echo $expns['amt'];
			echo $expns['edate'];
			echo $expns['remarks'];
      $this->load->view('updateexpense',$expns);

  }

	public function update_expense()
  {
			$this->load->model('Expense_Model');
			$edate=date('Y-m-d', strtotime($this->input->post('edate')));
			$expenseid=$this->input->post('expenseid');
			$description=$this->input->post('desc');
			$amount=$this->input->post('amt');
			$remarks=$this->input->post('remarks');

			$data = array(
				 'Description' =>$this->input->post('desc'),
				 'Amount' =>$this->input->post('amt'),
				 'EDate' =>date('Y-m-d', strtotime($this->input->post('edate'))),
				 'Remarks' => $this->input->post('remarks'),
			);
			$this->Expense_Model->update($data,$expenseid);
      $this->index();

  }





}
