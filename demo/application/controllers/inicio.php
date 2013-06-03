<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helpers('ns_fw');
		$this->load->model('demo_m');
	}

	public function index()
	{
		$this->load->view('index_demo');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */