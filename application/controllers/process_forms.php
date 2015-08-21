<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Process_forms extends CI_Controller
{
	public function generate()
	{
		$word = array_merge(range('a', 'z'), range('A', 'Z'), range('0','9'));
		shuffle($word);
		$result = substr(implode($word), 0, 14);
		$random_word = $this->session->set_userdata('word', $result);
		if($this->session->userdata('count'))
		{
			$count = $this->session->userdata('count');
			$this->session->set_userdata('count', $count + 1);
		}
		else
		{
			$this->session->set_userdata('count', 1);			
		}
		redirect('home');
	}
}
?>