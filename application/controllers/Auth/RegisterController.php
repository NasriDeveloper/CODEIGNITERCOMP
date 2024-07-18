<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct(){
        parent::__construct();


        $this->load->helper('form');
       $this->load->library('form_validation');
	   $this->load->model("UserModel");
     }



    public function indep(){
		$this->load->view('auth/Register');
        $this->load->view('template/header');
        $this->load->view('template/footer');
	}

	public function register(){
		$this->form_validation->set_rules('first_name', 'first_name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'last_name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else {
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);
             $register_user = new UserModel;
			 $checking = $register_user->registerUser($data); 
			 if($checking) {
				$this->session->set_flashdata('status', 'Registered Successfully or go to Login Page');
				redirect(base_url('login'));
			 } else {
				$this->session->set_flashdata('status', 'Registration failed or go to Register Page');
				redirect(base_url('register'));
			 }
				
			

		}
	}
          
         
	
}
