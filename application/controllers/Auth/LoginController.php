<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
     }



     public function index(){
    
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
     }




     public function login(){
        $this->form_validation->set_url('email_id','Email Address','trim|required|valid_email');
        $this->form_validation->set_url('password','Password','trim|required');
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else{
            $data = [
                'email' = $this->input->post('email_id');
                'password' = $this->input->post('password_id');
            ];
            $user = new UserModel;
        }
     }
	
}
