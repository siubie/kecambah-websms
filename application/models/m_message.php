<?php

class M_message extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function get_inbox(){
		$this->db->select('ReceivingDateTime, SenderNumber, TextDecoded, Flag');
		$this->db->order_by("ReceivingDateTime", "desc");
		$query = $this->db->get('inbox');
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

	function get_outbox(){
		$this->db->select('SendingDateTime, DestinationNumber, TextDecoded, CreatorID');
		$this->db->order_by("SendingDateTime", "desc");
		$query = $this->db->get('outbox');
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

	function get_sentitems(){
		$this->db->select('SendingDateTime, DestinationNumber, TextDecoded, CreatorID, Status');
		$this->db->order_by("SendingDateTime", "desc");
		$query = $this->db->get('sentitems');
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return FALSE;
	}

}

/* End of file m_message.php */
/* Location: ./application/models/m_message.php */