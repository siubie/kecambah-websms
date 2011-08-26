<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Websms extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Status";
		$data['status'] = true;
		$data['js'] = "js/status_js.php";
		$data['content'] = "status_view.php";
		$data['phone'] = $this->m_status->get_phone();
		$this->load->view('template',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */