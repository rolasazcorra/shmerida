<?php

class Post_Model extends CI_Model
{
    public function contrusct()
    {
        $this->load->database();
    }
    
    public function get_posts($slug=FALSE,$limit=FALSE,$offset=FALSE)
    {
        if($limit)
        {
            $this->db->limit($limit,$offset);
        }
        
        if($slug===FALSE)
        {
            $this->db->order_by('id','DESC');
           $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts',array('slug'=>$slug));
        return $query->row_array();
    }
    
    public function create_post()
    {
        $slug=url_title($this->input->post('title'));
        
        $data=array(
            'title'=>$this->input->post('title'),
            'slug'=>$slug,
            'body'=>$this->input->post('body'),
            'user_id'=>$this->session->userdata('user_id')
        );
        
        return $this->db->insert('posts',$data);
    }
    
    public function delete_post($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('posts');
        return true;
    }
    
    public function update_post()
    {
        $slug=url_title($this->input->post('title'));
       $data=array(
            'title'=>$this->input->post('title'),
            'slug'=>$slug,
            'body'=>$this->input->post('body')
        ); 
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }
    
    
    
    
    
    public function get_openings($title=FALSE)
    {
        if($title===FALSE)
        {
            $this->db->order_by('id','DESC');
           $query = $this->db->get('openings');
            return $query->result_array();
        }
        $query = $this->db->get_where('openings',array('title'=>$title));
        return $query->row_array();
    }
    
    public function create_opening()
    {
       
        
        $data=array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description')
        );
        
        return $this->db->insert('openings',$data);
    }
    
    public function delete_opening($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('openings');
        return true;
    }
    
    public function update_opening()
    {
        $slug=url_title($this->input->post('title'));
       $data=array(
            'title'=>$this->input->post('title'),
           
            'description'=>$this->input->post('description')
        ); 
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('openings',$data);
    }
    
    public function get_openings_id($id)
    {
       
        $query = $this->db->get_where('openings',array('id'=>$id));
        return $query->row_array();
    }
    
    
}
