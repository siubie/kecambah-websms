<?php

class M_status extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function get_phone(){
		$this->db->select('IMEI, Client, Battery, Signal');
		$query = $this->db->get('phones');
		if ($query->num_rows() > 0)
			return $query->row_array();
		else
			return FALSE;
	}

}

/* End of file m_status.php */
/* Location: ./application/models/m_status.php */