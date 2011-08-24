<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['inbox'] = json_encode($this->m_message->get_inbox());
		$data['title'] = "Inbox";
		$data['js'] = "js/inbox_js.php";
		$data['content'] = "inbox_view.php";
		$this->load->view('template',$data);
	}

	public function jsonInbox(){
		echo json_encode($this->m_message->get_inbox());
	}
}

/* End of file inbox.php */
/* Location: ./application/controllers/inbox.php */