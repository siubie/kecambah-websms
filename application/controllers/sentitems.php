<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sentitems extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Sent Items";
		$data['sentitems'] = true;
		$data['js'] = "js/sentitems_js.php";
		$data['content'] = "sentitems_view.php";
		$data['themes'] = "claro";
		$this->load->view('template',$data);
	}

	public function jsonSentitems(){
		header("Content-type: application/json");
		$json = "{ identifier: \"ID\",
		items: ".json_encode($this->m_message->get_sentitems())."}";
		echo $json;
	}
}

/* End of file outbox.php */
/* Location: ./application/controllers/outbox.php */