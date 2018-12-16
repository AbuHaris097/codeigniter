<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('query');
		$posts=$this->query->getpost();
		$this->load->view('welcome_message',['post'=>$posts]);
	}
	public function create()
	{
		$this->load->view('create');
	}
	public function save()
	{
		// $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			print_r($data);
			unset($data['submit']);
			$this->load->model('query');
			$this->query->addpost();
			if($this->query->addpost()){
				$this->session->set_flashdata('msg','saved success');
			}
			else{
				$this->session->set_flashdata('msg','saved failed');

			}
			return redirect('Welcome');
		}
		else
		{
			rdirect('create');
		}
	}
}
