<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('products');
	}
	public function summary(){
		$this->load->view('summary');

	}
	public function conveyor_belts(){
		$this->load->view('conveyor_belts');

	}
	public function idler_rollers(){
		$this->load->view('idler_rollers');

	}
	public function flanged_hoses(){
		$this->load->view('flanged_hoses');
	}
	public function vibrating_feeders(){
		$this->load->view('vibrating_feeders');
	}
}
