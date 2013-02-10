<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Jeff Risberg
 * @since 2012
 */
class Challenge extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('solution_model');
		$this->load->model('challenge_model');
	}

  public function index() {
    $data['challenges'] = $this->challenge_model->get_all();
    $data['title'] = 'Challenges List';

    $this->load->view('challenge/index', $data);
  }
}

/* End of file challenge.php */
/* Location: ./application/controllers/challenge.php */