<?php
namespace Apps;
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller extends \CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	private function getConfig(){

	}

	public function setConfig(){

	}
	public function header(){
		$menu = $this->db->get("menu")->result();
		$this->load->view('header',["menu" => $menu]);
	}

	public function footer(){
		$this->load->view('footer');
	}
	
	public function sendmail($to, $subject, $msg){
		$this->load->library('email'); // Note: no $config param needed
		$this->email->from('thietkewebvip@gmail.com', 'thietkewebvip@gmail.com');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($msg);
		$this->email->send();
	}
}