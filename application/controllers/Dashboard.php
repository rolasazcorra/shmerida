<?php if  ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller {
    public function admin()
    {	
    /*  if(!$this->session->userdata('logged_in'))
        {
                redirect('users/login');
        } */
        
        $data['title']= "Dashboard";    
        $data['openings'] =$this->Post_model->get_openings();    
        $this->load->view('Secciones/Dashboard',$data);
        
    }

    public function delete_job($id)
    {
        /*  if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        } */
        
        $this->Post_model->delete_opening($id);
        $this->session->set_flashdata('job_deleted','Your Job has been deleted');
        redirect('dashboard/admin'); 
    }
    
    public function edit_job($id)
    {
        /* if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        } */
        
            
       $data['openings'] =$this->Post_model->get_openings_id($id);        
      
        
        
         if(empty($data['openings']))
         {
            show_404();
            
         }
        $data['title']= 'Edit Opening';
        
		$this->load->view('Secciones/UpdateJob',$data);
    }

    public function create_job()
    {
        /* if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        } */

         $data['title']='Create Job Opening';
         $this->form_validation->set_rules('title','Title','required');
         $this->form_validation->set_rules('description','Description','required');

        if($this->form_validation->run()===FALSE)
        {
            $this->load->view('Secciones/CreateJob',$data);
        }
        else
        {
            $this->Post_model->Create_opening(); 
            $this->session->set_flashdata('job_created','The Job Opening has been Published');
            redirect('principal/jobs'); 
        }
    }

    public function team_admin()
    {
        $data['title']= "Team Management";    
        //$data['openings'] =$this->Post_model->get_openings();    
        $this->load->view('Secciones/TeamAdmin',$data);
    }

    

    public function add_employee()
    {
        /* if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        } */

         $data['title']='Add New Team Member';
         $this->form_validation->set_rules('title','Title','required');
         $this->form_validation->set_rules('description','Description','required');

        if($this->form_validation->run()===FALSE)
        {
            $this->load->view('Secciones/AddEmployee',$data);
        }
        else
        {
            $this->Post_model->Create_opening(); 
            $this->session->set_flashdata('job_created','The Job Opening has been Published');
            redirect('principal/jobs'); 
        }
    }






    public function client_admin()
    {
        $data['title']= "Client Management";    
        //$data['openings'] =$this->Post_model->get_openings();    
        $this->load->view('Secciones/clientAdmin',$data);
    }

    public function add_client()
    {
        /* if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        } */

         $data['title']='Add New Client';
         $this->form_validation->set_rules('title','Title','required');
         $this->form_validation->set_rules('description','Description','required');

        if($this->form_validation->run()===FALSE)
        {
            $this->load->view('Secciones/AddClient',$data);
        }
        else
        {
            $this->Post_model->Create_opening(); 
            $this->session->set_flashdata('job_created','The Job Opening has been Published');
            redirect('principal/jobs'); 
        }
    }


}