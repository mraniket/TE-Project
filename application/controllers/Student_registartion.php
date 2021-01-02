<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Student_registartion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
       $this->load->library('session');
        $this->load->model('Student_registartion_model');
    } 

    /*
     * Listing of student_registartion
     */
    function index()
    {
        $data['student_registartion'] = $this->Student_registartion_model->get_all_student_registartion();
        
        $data['_view'] = 'student_registartion/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new student_registartion
     */
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
    function add()
    {   

        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email_id','Email Id','valid_email|required');
		$this->form_validation->set_rules('mobile_no','Mobile No','required');
		$this->form_validation->set_rules('class','Class','required');
		$this->form_validation->set_rules('year','Year','required');
		
		if($this->form_validation->run())     
        {   
                
            $params = array(
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'email_id' => $this->input->post('email_id'),
				'mobile_no' => $this->input->post('mobile_no'),
				'class' => $this->input->post('class'),
				'year' => $this->input->post('year'),
            );
            
            $student_registartion_id = $this->Student_registartion_model->add_student_registartion($params);
            redirect('student/index');

        if($student_registartion_id > 0){
            
            $this->session->set_flashdata('success_msg','Registered successfully.');
            return redirect('student/index');
        }else{
            
            $this->session->set_flashdata('error_msg','registration error.');
            return redirect('Student_registartion/add');
        }
    }
        else
        {            
           /* $data['_view'] = 'student_registartion/add';*/
            $this->load->view('student_registartion/add');
        }
    }  

    /*
     * Editing a student_registartion
     */
    function edit()
    {   
        if ($this->club_permission() == FALSE) {
            redirect('student/login', 'refresh');
        }
        else
        {
        // check if the student_registartion exists before trying to edit it
            $student_id = $this->session->userdata('student_id');
        $data['student_registartion'] = $this->Student_registartion_model->get_student_registartion($student_id);
        
        if(isset($data['student_registartion']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email_id','Email Id','valid_email|required');
			$this->form_validation->set_rules('mobile_no','Mobile No','required');
			$this->form_validation->set_rules('class','Class','required');
			$this->form_validation->set_rules('year','Year','required');
		
			if($this->form_validation->run())     
            {   
                /*$student_id = $this->session->userdata('student_id');*/
                $params = array(
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'email_id' => $this->input->post('email_id'),
					'mobile_no' => $this->input->post('mobile_no'),
					'class' => $this->input->post('class'),
					'year' => $this->input->post('year'),
                );

                $this->Student_registartion_model->update_student_registartion($student_id,$params);            
                redirect('student/index');
            }
            else
            {
                /*$data['_view'] = 'student_registartion/edit';*/
                $this->load->view('student_registartion/edit',$data);
            }
        }
        else
            show_error('The student_registartion you are trying to edit does not exist.');
    } 
}

    /*
     * Deleting student_registartion
     */
    function remove($id)
    {
        $student_registartion = $this->Student_registartion_model->get_student_registartion($id);

        // check if the student_registartion exists before trying to delete it
        if(isset($student_registartion['id']))
        {
            $this->Student_registartion_model->delete_student_registartion($id);
            redirect('student_registartion/index');
        }
        else
            show_error('The student_registartion you are trying to delete does not exist.');
    }
    
}