<?php

    class users extends CI_Controller
    {
        public function register()
        {
            $data['title']= "User Registration";
            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
            $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('password2','Password2','matches[password]');
           
            if($this->form_validation->run()===FALSE)
            {
                $this->load->View('Secciones/SignUp',$data);
            }
            else
            {
                $enc_password=md5($this->input->post('password'));
                
                $this->user_model->register($enc_password);
                
                $this->session->set_flashdata('user_registered','You are now registered and can log in');
                
                redirect('principal/dashboard');
                
            }
                
                
        }
        
        public function check_email_exists($email)
        {
            $this->form_validation->set_message('check_email_exists','The email is already registered!. Forgot account?');
            
            if($this->user_model->check_email_exists($email))
            {
                return true;
            }
            else
            {
                return false;
            }
            
            
        }
        
         public function check_username_exists($username)
        {
            $this->form_validation->set_message('check_username_exists','The Username is taken!. Please choose a different one');
            
            if($this->user_model->check_username_exists($username))
            {
                return true;
            }
            else
            {
                return false;
            }
            
            
        }
        
        
        public function login()
        {
             $data['title']= "Sign In";
         
    
            
   
            $this->form_validation->set_rules('username','Username','required');
          
            $this->form_validation->set_rules('password','Password','required');
       
           
            if($this->form_validation->run()===FALSE)
            {
                   $this->load->View('Secciones/Login',$data);
            }
            else
            {
                $username=$this->input->post('username');
                
                $password =md5($this->input->post('password'));
                
                $user_id=$this->user_model->login($username,$password);
                
                if($user_id)
                {
                    $user_data=array(
                    'user_id'=>$user_id, 
                    'username'=>$username,
                    'logged_in'=>true
                    );
                    
                    $this->session->set_userdata($user_data);
                    
                    $this->session->set_flashdata('user_logged','You are now logged in');
                    redirect('principal/dashboard');
                }
                else
                {
                    
                    $this->session->set_flashdata('login_failed','Login is invalid');
                    redirect('users/login');
                }
                
               
                
            }
                
                
        }
        
        
        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');
            $this->session->set_flashdata('logged_out','You are now Logged_Out');
            redirect('users/login');
        }
        
    }
?>
