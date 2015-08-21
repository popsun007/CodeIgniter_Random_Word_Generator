<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('count'))
		{
			$words = $this->session->userdata;
			$this->load->view('result', $words);
		}
		else
		{
			$this->load->view('index');
		}
	}
}
?>