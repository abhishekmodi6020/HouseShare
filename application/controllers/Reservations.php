<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservations extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('username')==null) {
			$this->load->view('login');
		}
		else {

     if ($this->session->userdata('userrole')=='guest'){
			 $this->viewReservations();
		 }
		 else {
			 $this->load->view('reservations.php');
		 }

		}
	}

  public function bookroom()
  {
    /*Get Reservation details from form inputs after checking availability and validation */
    $checkin=date('Y-m-d', strtotime($this->input->post('cIn')));
    $checkout=date('Y-m-d', strtotime($this->input->post('cOut')));
    $nbrRooms=$this->input->post('nbrRooms');
    $firstname=$this->input->post('fname');
    $lastname=$this->input->post('lname');

    $bookedby=$this->session->userdata('username');
    $cndtnbfr=$this->input->post('roomCondition');
    $roomid[0]=$this->input->post('room1');
		$roomid[1]=$this->input->post('room2');
		$resId[]="";
    /* -----------Note To Self----------------
    Fetch Occupant user id from users table to keep track of occupant details in reservations
      Considering Combination of first name and last name to be unique.
      Should consider email id of the occupant as unique. Needs to be implemented.
    */
    $occupantid="";
    $query = $this->db->get_where('users', array('fname' => $firstname, 'lname' => $lastname),1);
    foreach ($query->result() as $row) {
      $occupantid=$row->username;
    }

    /*Reservation details ready, proceeding with
    1.loading Reservation_Model model
    2.associative array preparation
    3.Calling insert function of the model;
    4.handling any error if required.
    */

    $this->load->model('Reservation_Model');
		for ($i=0; $i < $nbrRooms; $i++) {
			# code...
			$rid=uniqid('rs_');
			$data = array(
				 'ReservationId' =>$rid ,
				 'RoomId' => $roomid[$i],
				 'OccupantId' =>$occupantid ,
				 'NbrOccupants' =>'2',
				 'DateFrom' => $checkin,
				 'DateTo' => $checkout,
				 'BookingStatus' =>'1',
				 'ConditionBefore' => $cndtnbfr,
				 'BookedBy' => $bookedby

			);
			$this->Reservation_Model->insert($data);
			$nm="r".$i;

			$resId[$nm]=$rid;
		}
			$resId['room1']=$roomid[0];
			$resId['room2']=$roomid[1];

					 $this->load->view('bookingconfirmation',$resId);


  }

  public function searchRoom()
  {
		$cIn=$this->input->post('cIn');
		$cOut=$this->input->post('cOut');
		$checkin=date('Y-m-d', strtotime($this->input->post('cIn')));
    $checkout=date('Y-m-d', strtotime($this->input->post('cOut')));
    $nbrRooms=$this->input->post('nbrRooms');
    $firstname=$this->input->post('fname');
    $lastname=$this->input->post('lname');
    $cndtnbfr=$this->input->post('roomCondition');
		$roomType=$this->input->post('roomType');
		echo $roomType;

		/*
		$this->db->select('BookID');
$this->db->from('Orders');
$sub_query = $this->db->get_compiled_select();

$this->db->select('BookID, BookName, AuthorName');
$this->db->from('Books');
$this->db->where("BookID IN ($sub_query)");
$query = $this->db->get()->result();

// Produces SQL:
// SELECT BookID, BookName, AuthorName
// FROM Books
// WHERE BookID IN (SELECT BookID FROM Orders);
		*/

		$this->db->select('RoomId');
		$this->db->from('reservation');
		/* For Reference Custom where
		$where = "name='Joe' AND status='boss' OR status='active'";
		$this->db->where($where);
		*/
		$where="(DateFrom <='".$checkin."' AND DateTo >='".$checkin."') OR (DateFrom <= '".$checkout."' AND DateTo >= '".$checkout."')";
		$this->db->where($where);
		$sub_query= $this->db->get_compiled_select();

		$this->db->select('RoomNbr,RoomType');
		$this->db->from('propertyinfo');
		$this->db->where("RoomNbr NOT IN ($sub_query)");
		if($roomType!='Any'){
		$this->db->where('RoomType', ucfirst($roomType));
		}
		$query=$this->db->get();

		$roomdetails=$query->result();
		$rm['roomdetails']=$roomdetails;
		$rm['cIn']=$cIn;
		$rm['cOut']=$cOut;
		$rm['nbrRooms']=$nbrRooms;
		$rm['fname']=$firstname;
		$rm['lname']=$lastname;
		$rm['roomCondition']=$cndtnbfr;
		$rm['srchstatus']=1;
		$rm['roomType']=$roomType;
		echo $rm['roomType'];
		$this->load->view('reservations',$rm);

  }

	public function viewReservations()
	{
		$userrole = $this->session->userdata('userrole');
		$usernm = $this->session->userdata('username');
		$query="";
    if ($userrole=="owner"){
      $query = $this->db->get_where('reservation', array('BookedBy' => $usernm));
		}
    else {
      $query = $this->db->get_where('reservation', array('OccupantId' => $usernm));
	}
	$reservations=$query->result();
	$res['reservations']=$reservations;
	$this->load->view('viewreservation',$res);
}



}
