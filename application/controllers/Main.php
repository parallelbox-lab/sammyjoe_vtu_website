<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
   
        $this->load->library('cart');   
    }

public function index(){

		  $data['title'] = '';
	    $this->load->view('config/header');
		$this->load->view('pages/index',$data);
		$this->load->view('config/footer');

}
public function ecomm(){
        
	$data['title'] = '';
  $this->load->view('config/header');
  $this->load->view('pages/ecommerce');
  $this->load->view('config/footer');

}
}