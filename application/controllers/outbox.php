<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Outbox";
		$data['outbox'] = true;
		$data['js'] = "js/outbox_js.php";
		$data['content'] = "outbox_view.php";
		$data['themes'] = "claro";
		$this->load->view('template',$data);
	}

	public function jsonOutbox(){
		header("Content-type: application/json");
		$json = "{ identifier: \"ID\",
		items: ".json_encode($this->m_message->get_outbox())."}";
		echo $json;
	}
}

/* End of file outbox.php */
/* Location: ./application/controllers/outbox.php */