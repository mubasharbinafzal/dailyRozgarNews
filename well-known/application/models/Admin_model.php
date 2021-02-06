<?php 
class admin_model extends CI_model{
		
	public function add_news_post($data){
		return $this->db->insert('news',$data);
	}
	public function add_newspaper_post($data){
		return $this->db->insert('newspaper',$data);
	}
	
 
	
    public function news_post($limit , $offset){
        
		  $q =$this->db->select()
				-> from('news') 
                ->limit($limit, $offset)
				-> get();
				return $q->result();
	}
    
    public function delete_news_post($id){
		
	 	$q= $this->db->select(['id','image']) ->where('id',$id) ->get('news');
    	$q = $q->result();
    	$this->db->delete('news',['id'=> $id]);
    	return $image_name = $q[0]->image;

	}
	public function get_image_news_post($id){
		
	 	$q= $this->db->select(['id','image']) ->where('id',$id) ->get('news');
    	$q = $q->result(); 
    	return $image_name = $q[0]->image;

	}
	public function get_type_news_post($id){
		
	 	$q= $this->db->select(['id','type']) ->where('id',$id) ->get('news');
    	$q = $q->result(); 
    	return $type_name = $q[0]->type;

	}
    public function num_rows(){
        $id = $this->session->userdata('id');
        $q = $this->db->select()
                ->from('news') 
                ->get();
        return $q->num_rows();
    }

    public function find_news_post($id){
    	$q= $this->db->select('*')
    			->where('id',$id)
    			->get('news');
    			return $q->row();
    }
    public function update_news_post($id ,Array $news_post){

       return $this->db->where('id',$id)
                       -> update('news',$news_post);
    }
    
    public function view_message(){
        $q= $this->db->select('*') 
    			->get('contact');
    			return $q->result(); 
        
    }
}


?>