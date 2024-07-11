<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

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
	public function indek()
	{
		$this->load->model('EmployeeModel');
		$employee = $this->EmployeeModel->getEmployee();
		$this->load->view('Frontend/employee', ['employee' => $employee]);
        $this->load->view('template/header');
        $this->load->view('template/footer');
	}
     
    public function create()
	{
		
		$this->load->view('Frontend/firstform');
        $this->load->view('template/header');
        $this->load->view('template/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('first_name', 'first_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
        

		if($this->form_validation->run()){
			$data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
			];

			$this->load->model('EmployeeModel','emp');
            $this->emp->insertEmployee($data);
			$this->session->set_flashdata('status', 'Employee Data Inserted Successfully');
			redirect(base_url('employee'));

		} else {
            $this->create();
		}
	
	}

	public function edit($id) {
		$this->load->view('template/header');
		$this->load->model("EmployeeModel");

		$data['employee'] = $this->EmployeeModel->editEmployee($id);
		
		$this->load->view('Frontend/edit', $data);
        $this->load->view('template/footer');
	}


	public function update($id) {

		$this->form_validation->set_rules('first_name', 'first_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
        

		if($this->form_validation->run()){
        $data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
		];
        
		$this->load->model("EmployeeModel");
	    $this->EmployeeModel->updateEmployee($data, $id);
		$this->session->set_flashdata('status', 'Employee Data Updated Successfully');
		redirect(base_url('employee'));
	    }
	    else{
			$this->edit($id);
		}
			
		
		
		
	}

	public function delete($id){
		$this->load->model("EmployeeModel");
		$this->EmployeeModel->deleteEmployee($id);
		$this->session->set_flashdata('status', 'Employee Data Deleted Successfully');
		redirect(base_url('employee'));
	}


}
