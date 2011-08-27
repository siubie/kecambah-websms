<?php

class M_message extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function get_inbox(){
		$query_string = "Select ID, DATE_FORMAT(ReceivingDateTime, '%d-%m-%Y') AS ReceivingDate, DATE_FORMAT(ReceivingDateTime, '%T') AS ReceivingTime, SenderNumber, TextDecoded, Flag from inbox ORDER BY ReceivingDateTime DESC";
		$query = $this->db->query($query_string);
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

	function get_outbox(){
		$query_string = "Select ID, DATE_FORMAT(SendingDateTime, '%d-%m-%Y') AS SendingDate, DATE_FORMAT(SendingDateTime, '%T') AS SendingTime, DestinationNumber, TextDecoded, Flag from outbox ORDER BY SendingDateTime DESC";
		$query = $this->db->query($query_string);
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

	function get_sentitems(){
		$query_string = "Select ID, DATE_FORMAT(SendingDateTime, '%d-%m-%Y') AS SendingDate, DATE_FORMAT(SendingDateTime, '%T') AS SendingTime, DestinationNumber, TextDecoded, Status, Flag from sentitems ORDER BY SendingDateTime DESC";
		$query = $this->db->query($query_string);
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

}

/* End of file m_message.php */
/* Location: ./application/models/m_message.php */