<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Jeff Risberg
 * @since 2012
 */
class About extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('challenge_model');
		$this->load->model('solution_model');
	}
	
	public function index() {
		$data['title'] = "About";
		$this->load->view('about/index', $data);
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */