<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Challenge_Admin extends CI_Controller {

	public $layout = 'admin';
	
	public function __construct() {
		parent::__construct();
		$this->load->model('challenge_model');
		$this->load->model('post_model');

		// Load the URL helper so redirects work.
		$this->load->helper('url');
	}

	public function index() {
		$data['challenges'] = $this->challenge_model->get_all();
		$data['title'] = 'Challenges List';

		$this->load->view('challenge_admin/index', $data);
	}

	public function view($id)	{
		$data['challenge'] = $this->challenge_model->get($id);

		if (empty($data['challenge'])) {
			show_404();
		}

		$data['title'] = 'Challenge';

		$this->load->view('challenge_admin/view', $data);
	}

 	public function edit($id) {
 		$data['challenge'] = $this->challenge_model->get($id);

 		if (empty($data['challenge'])) {
 			show_404();
 		}

 		$this->load->helper('form');
 		$this->load->library('form_validation');

 		$data['title'] = 'Edit a Challenge';

 		$this->load->view('challenge_admin/edit');
 	}

 	public function update() {
 		$this->load->helper('form');
 		$this->load->library('form_validation');
			
 		$this->form_validation->set_rules('text', 'Challenge', 'required');

 		if ($this->form_validation->run() === FALSE) {
 			$data['title'] = 'Edit a challenge';

 			$this->load->view('challenge_admin/edit');
 		}
 		else {
 			$this->challenge_model->update();
 			redirect('challenge_admin/index');
 		}
 	}

	public function create($id) {
		$this->init();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['post'] = $this->content_item_model->get($id);
		
		if (empty($data['content_item'])) {
			show_404();
		}
		
		$data['title'] = 'Add challenge';
		$data['email'] = $this->email;
		$data['id'] = $id;

		$this->load->view('challenge_admin/create');
	}

	public function save() {
		$this->init();
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Add challenge';

		$this->form_validation->set_rules('text', 'Challenge', 'required');

		if ($this->form_validation->run() === FALSE) {
			create($this->input->post('id'));
		}
		else {
			$this->challenge_model->insert($this->userid, $this->input->post('id'));
			redirect('challenge_admin/index');
		}
	}
}
