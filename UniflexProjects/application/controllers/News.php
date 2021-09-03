<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('allow_url_fopen',1);

class News extends CI_Controller {

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
	public function __construct(){  
        parent::__construct();

    }

    public function index(){

    }
 
   function get_ars() 
	{
	    // Load RSS Parser
	    $this->load->library('rssparser');
	    $data = array();

	    // Get 6 items from arstechnica
	    $rss = $this->rssparser->set_feed_url('https://miningzimbabwe.com/feed/')->set_cache_life(30)->getFeed(5);
	    // echo "<pre>", print_r($rss); exit;

	    foreach ($rss as $item)
	    {
	        $data['title'][] = $item['title'];
	        $data['description'][] = $item['description'];
	        $data['pubDate'][] = $item['pubDate'];
	        $data['link'][] = $item['link'];
	        $data['author'][] = $item['author'];

	    }
	    // echo "<pre>", print_r($data); exit;
		$this->load->view('news', $data);

	}
}
