<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Inbox";
		$data['inbox'] = true;
		$data['js'] = "js/inbox_js.php";
		$data['content'] = "inbox_view.php";
		$data['themes'] = "claro";
		$this->load->view('template',$data);
	}

	public function jsonInbox(){
		header("Content-type: application/json");
		$json = "{ identifier: \"ID\",
		items: ".json_encode($this->m_message->get_inbox())."}";
		echo $json;
	}
}

/* End of file inbox.php */
/* Location: ./application/controllers/inbox.php */