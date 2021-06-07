<?php
defined('BASEPATH') /*OR exit('No direct script access allowed')*/;

class student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
		
		$this->load->library('session');
		$this->load->model('Student_registartion_model');
		$this->load->model('Sport_info_model');
		

       
	}
	public function index()
	{
		if ($this->club_permission() == FALSE) {
        	redirect('student/login', 'refresh');
		}
		else
		{	 $data['sport_info'] = $this->Sport_info_model->get_all_sport_info();
			 $student_id = $this->session->userdata('student_id');
        $data['student_registartion'] = $this->Student_registartion_model->get_student_registartion($student_id);
			if(isset($data['student_registartion']['id']))
        {
			$this->load->view('student_dashboard',$data);	
			}
        else
            show_error('The student_registartion you are trying to edit does not exist.');
		}
		
	}
	function club_permission()
	{
		$student_id = $this->session->userdata('student_id');
        if ($student_id == NULL) {
            return FALSE;
        }
        else {
        	return TRUE;
        }
	}
	function login()
	{
		if ($this->club_permission() == TRUE) {
        	redirect('student/', 'refresh');
		}
		else
		{
			$this->load->view('student_login');
		}
	}
	function process_login()
	{
		if ($this->club_permission() == TRUE) {
        	redirect('student/', 'refresh');
		}
		else{
			$username = $this->input->post('username');
	        $password = ($this->input->post('password')); // encrypted password (123456)
//exit();
	        $result = $this->Student_registartion_model->login($username, $password);
	        
	        if($result)
	        {
	            redirect('student/', 'refresh' );
	        }
	        else {
	            $this->session->set_flashdata('alert','login_error');

	            redirect('student/login', 'refresh' );
	        }
		}
	}

    public function logout() {
        $this->session->unset_userdata('student_id');
        $this->session->unset_userdata('student_name');
        redirect('student/login');
    }

     
}