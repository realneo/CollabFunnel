<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solution_Admin extends CI_Controller {

	public $layout = 'admin';
	
	public function __construct() {
		parent::__construct();
		$this->load->model('solution_model');
		$this->load->model('challenge_model');

		// Load the URL helper so redirects work.
		$this->load->helper('url');
	}

	public function index() {
		$data['solutions'] = $this->solution_model->get_all();
		$data['title'] = 'Solutions List';

		$this->load->view('solution_admin/index', $data);
	}
}
