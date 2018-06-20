<?php if  ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('panel_model');
		
	}

	public function index()
	{	
		$data['title']= "Software House Mérida - Real Programmers : Real Solutions";
		/*$data['current']= "0";
        $this->load->view('Secciones/Construction',$data);
		
	}
    
    public function home()
	{	
		$data['title']= "Software House Mérida - Real Programmers : Real Solutions";*/
		$data['current']= "1";
		
		$this->load->view('Secciones/Home',$data);
		
	}

	public function about_us()
	{	
		$data['title']= "Software House Mérida - About Us";
		$data['current']= "2";
		
		$this->load->view('Secciones/About_us',$data);
		
	}
    
    

    public function careers()
	{	
		$data['title']= "Software House Mérida - Careers";
		$data['current']= "3";
		$data['openings'] =$this->Post_model->get_openings();
		$this->load->view('Secciones/Careers',$data);
		
	}
	
     public function careerinfo()
    {
        $data['title']= "Software House Mérida - Careers";
        $data['id'] = $this->uri->segment(3);
        $data['openings'] =$this->Post_model->get_openings_id($this->uri->segment(3));
        $this->load->view('Secciones/careerinfo',$data);

    }
    
	public function contact()
	{	
		$data['title']= "Software House Mérida - Contact Us";
		$data['current']= "4";
		
		$this->load->view('Secciones/Contact',$data);
		
	}
    
    public function portfolio()
	{	
		$data['title']= "Software House Mérida - Portfolio";
		$data['current']= "4";
		
		$this->load->view('Secciones/Portfolio',$data);
		
	}
    
    
    public function news($offset=0)
	{	
        
          
        
        $config['base_url']=base_url().'index.php/principal/news';
        $config['total_rows']=$this->db->count_all('posts');
        $config['per_page'] = 3;
        $config['uri_segment']=3;
        $config['use_page_numbers'] = TRUE;
 
        $config['attributes']=array('class'=>'pagination-link');
       
        $this->pagination->initialize($config); 
      
       
        
		$data['title']= "Software House Mérida - News";
		$data['current']= "5";
		$data['posts'] =$this->Post_model->get_posts(FALSE,$config['per_page'],$offset);
       
		$this->load->view('Secciones/News',$data);
		
	}
    
     public function posts()
	{	
		$data['title']= "Dashboard - Posts";
		$data['current']= "9";
		$data['posts'] =$this->Post_model->get_posts();
       
		$this->load->view('Secciones/Posts',$data);
		
	}
    
       public function jobs()
	{	
		$data['title']= "Dashboard - Jobs";
		$data['current']= "10";
		$data['openings'] =$this->Post_model->get_openings();
       
		$this->load->view('Secciones/Jobs',$data);
		
	}
     
     
    
     public function openings()
	{	
		$data['title']= "Software House Mérida - Openings";
		$data['current']= "8";
		$data['openings'] =$this->Post_model->get_openings();
       
		$this->load->view('Secciones/News',$data);
		
	}
    
     public function view($slug=NULL)
	{	

		$data['post'] =$this->Post_model->get_posts($slug);
         if(empty($data['post']))
         {
             show_404();
                 
         }
        $data['title']= $data['post']['title'];
		$this->load->view('Secciones/View',$data);
		
	}
    
    
    public function create()
    {   
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
         $data['title']='Create Post';
         $this->form_validation->set_rules('title','Title','required');
         $this->form_validation->set_rules('body','Body','required');
        
        if($this->form_validation->run()===FALSE)
        {
            $this->load->view('Secciones/Create',$data);
        }
        else
        {
            $this->Post_model->Create_post(); 
            
             $this->session->set_flashdata('post_created','Your Post has been Published');
            
           redirect('principal/news'); 
        }
        
         
    }
    
    public function delete($id)
    {
         if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
        $this->Post_model->delete_post($id);
        $this->session->set_flashdata('post_deleted','Your Post has been deleted');
        redirect('principal/posts'); 
    }
    
    public function edit($slug)
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
        
        $data['post'] =$this->Post_model->get_posts($slug);
        
        if($this->session->userdata('user_id')!=$this->Post_model->get_posts($slug)['user_id'])
        {
             $this->session->set_flashdata('user_cant_edit','The post that you are trying to edit was created by another user');
            redirect('principal/posts');
        }
        
        
         if(empty($data['post']))
         {
             show_404();
                 
         }
        $data['title']= 'Edit Post';
        
		$this->load->view('Secciones/Update',$data);
    }
    
    public function update($id)
    {
         if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
        $this->Post_model->update_post();
          $this->session->set_flashdata('post_updated','Your Post has been updated');
         redirect('principal/news'); 
    }
    
    public function create_job()
        {
         if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }

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
    
    
    
    public function delete_job($id)
    {
         if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
        $this->Post_model->delete_opening($id);
        $this->session->set_flashdata('job_deleted','Your Job has been deleted');
        redirect('principal/jobs'); 
    }
    
    public function edit_job($id)
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
            
       $data['openings'] =$this->Post_model->get_openings_id($id);        
      
        
        
         if(empty($data['openings']))
         {
            show_404();
            
         }
        $data['title']= 'Edit Opening';
        
		$this->load->view('Secciones/UpdateJob',$data);
    }
    
     public function update_job($id)
    {
         if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        
        $this->Post_model->update_opening();
          $this->session->set_flashdata('job_updated','Your Job Opening has been updated');
         redirect('principal/careers'); 
    }
    
    
	public function email()
	{
		
		$nombre = $this->input->post('nombre',TRUE);
		$email = $this->input->post('email',TRUE);
        $asunto= $this->input->post('asunto',TRUE);
        $celular= $this->input->post('celular',TRUE);
		$mensaje= $this->input->post('mensaje',TRUE);
	
		//$interes= $this->input->post('interes',TRUE);
		//$tratamiento= $this->input->post('tratamiento',TRUE);
		$destino = 'info@shmerida.mx';
		$bcc	= '';
		
		$msg='
		Nombre: '.$nombre.'
		</br>
		Email: '.$email.'
		</br>
		Teléfono: '.$celular.'
		</br>
		
		Mensaje: '.$mensaje.'
		';
		
		$config['mailtype']			   = 'html';
        $config['charset']  		   = 'utf-8';
        $config['newline']  		   = "\r\n";
        $config['wordwrap']            = TRUE;	
		
		
		$this->load->library('email');
		$this->email->initialize($config);
		
		$this->email->from($email, $nombre );
		$this->email->to($destino); 
		$this->email->bcc($bcc); 

		$this->email->subject($asunto);
		$this->email->message($msg);
        
        $this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');
 

		if($this->email->send())
        {
            $this->session->set_flashdata('email_sent','Your email was Sent satisfactory');
            redirect('principal/contact');
        }
        else
        {
            $this->session->set_flashdata('email_failed','Your email was not sent');
            redirect('principal/contact');
        }
			
		//redirect('principal/contact');

	}
    
    
    
   
    

    public function recaptcha($str='')
    {
      $google_url="https://www.google.com/recaptcha/api/siteverify";
      $secret='6Ld21jYUAAAAALpGZG_GGSb-U2zYSKKWpCFcNNK6';
      $ip=$_SERVER['REMOTE_ADDR'];
      $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_TIMEOUT, 10);
      curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
      $res = curl_exec($curl);
      curl_close($curl);
      $res= json_decode($res, true);
      //reCaptcha success check
      if($res['success'])
          {
            return TRUE;
          }
          else
          {
            $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
            return FALSE;
          }
    }
	
}