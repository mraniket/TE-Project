<?php

 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
         $this->load->model('Admin_registration_model');
         $this->load->model('Participate_individual_model');
         $this->load->model('Participate_team_model');
         $this->load->library('session');
        
    }



    function index()
    {
    	if ($this->admin_permission() == FALSE) {
        	redirect('Dashboard/login', 'refresh');
		}
		else
		{
			$data['participate_team'] = $this->Participate_team_model->get_all_participate_team();
			$data['participate_individual'] = $this->Participate_individual_model->get_all_participate_individual();
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    	}
    }
    	
	function admin_permission()
	{
		$admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            return FALSE;
        }
        else {
        	return TRUE;
        }
	}
	function login()
	{
		if ($this->admin_permission() == TRUE) {
        	redirect('Dashboard/', 'refresh');
		}
		else
		{
			$this->load->view('login');
		}
	}
	function process_login()
	{
		if ($this->admin_permission() == TRUE) {
        	redirect('Dashboard/', 'refresh');
		}
		else{
			$username = $this->input->post('username');
	       	$password =($this->input->post('password')); // encrypted password (admin)

	        $result = $this->Admin_registration_model->login($username, $password);
	        
	        if($result)
	        {
	            redirect('Dashboard/', 'refresh' );
	        }
	        else {
	            $this->session->set_flashdata('alert','login_error');

	            redirect('Dashboard/login', 'refresh' );
	        }
		}
	}

     function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('username');
        redirect('Dashboard/');
    }
}
