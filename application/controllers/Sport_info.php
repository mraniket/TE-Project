<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Sport_info extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sport_info_model');
    } 

    /*
     * Listing of sport_info
     */
    function index()
    {
        $data['sport_info'] = $this->Sport_info_model->get_all_sport_info();
        
        $data['_view'] = 'sport_info/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new sport_info
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('game_name','Game Name','required');
		$this->form_validation->set_rules('from_date','From Date','required');
		$this->form_validation->set_rules('to_date','To Date','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'game_name' => $this->input->post('game_name'),
				'from_date' => date('Y-m-d',strtotime($this->input->post('from_date'))),
				'to_date' => date('Y-m-d',strtotime($this->input->post('to_date'))),
            );
            
            $sport_info_id = $this->Sport_info_model->add_sport_info($params);
            redirect('sport_info/index');
        }
        else
        {            
            $data['_view'] = 'sport_info/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a sport_info
     */
    function edit($id)
    {   
        // check if the sport_info exists before trying to edit it
        $data['sport_info'] = $this->Sport_info_model->get_sport_info($id);
        
        if(isset($data['sport_info']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('game_name','Game Name','required');
			$this->form_validation->set_rules('from_date','From Date','required');
			$this->form_validation->set_rules('to_date','To Date','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'game_name' => $this->input->post('game_name'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
                );

                $this->Sport_info_model->update_sport_info($id,$params);            
                redirect('sport_info/index');
            }
            else
            {
                $data['_view'] = 'sport_info/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sport_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting sport_info
     */
    function remove($id)
    {
        $sport_info = $this->Sport_info_model->get_sport_info($id);

        // check if the sport_info exists before trying to delete it
        if(isset($sport_info['id']))
        {
            $this->Sport_info_model->delete_sport_info($id);
            redirect('sport_info/index');
        }
        else
            show_error('The sport_info you are trying to delete does not exist.');
    }
    
}
