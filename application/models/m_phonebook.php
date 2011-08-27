<?php

class M_phonebook extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function get_name($number){

		$this->db->select('Name');

		if (substr($number,0,1) == '0'){
			$this->db->where('Number',$number);
			$this->db->or_where('Number',"+62".substr($number,1));
		}
		elseif (substr($number,0,1) == '+'){
			$this->db->where('Number',$number);
			$this->db->or_where('Number',"0".substr($number,3));
		}
		else{
			return $number;
		}
		$query = $this->db->get('pbk');
		if ($query->num_rows() > 0)
			return $query->row()->Name;
		else
			return $number;

	}

}

/* End of file m_phonebook.php */
/* Location: ./application/models/m_phonebook.php */