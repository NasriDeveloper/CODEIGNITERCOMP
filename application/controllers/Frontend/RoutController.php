<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoutController extends CI_Controller {

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


     public function rout()
     {
         
         $this->load->view('rout');
         $this->load->view('template/header');
         $this->load->view('template/footer');
     }

     public function storey()
     {
         $this->form_validation->set_rules('slug', 'slug', 'required');
         $this->form_validation->set_rules('controller', 'controller', 'required');
         $this->form_validation->set_rules('method', 'method', 'required');
         $this->form_validation->set_rules('category', 'category', 'required');
         
 
         if($this->form_validation->run()){
             $data = [
                 'slug' => $this->input->post('slug'),
                 'controller' => $this->input->post('controller'),
                 'method' => $this->input->post('method'),
                 'category' => $this->input->post('category'),
             ];
 
             $this->load->model('EmployeeModel','emp');
             $this->emp->insertRoutes($data);
             $this->session->set_flashdata('status', 'Employee Data Inserted Successfully');
             redirect(base_url('rout'));
 
         } else {
             $this->rout();
         }
     
     }
          
         
	
}
