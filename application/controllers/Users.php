<?php 
 class Users extends CI_Controller {
     
     public function index(){
         
        $getNewspost_image = $this->Users_model->getNewspost_image();
        $get_latest_new = $this->Users_model->get_latest_new();
        $get_latest_side = $this->Users_model->get_latest_side();
        $get_popular_news = $this->Users_model->get_popular_news();
        $get_latest_new_Politics = $this->Users_model->get_latest_new_Politics();
        $get_latest_new_Health = $this->Users_model->get_latest_new_Health();
        $get_latest_new_Mixed = $this->Users_model->get_latest_new_Mixed();
        
        $this->load->view('Users/homepage',[
                            'getNewspost_image' => $getNewspost_image,
                            'get_latest_new' => $get_latest_new,
                            'get_latest_side' => $get_latest_side,
                            'get_popular_news' => $get_popular_news,
                            'get_latest_new_Politics' => $get_latest_new_Politics,
                            'get_latest_new_Health' => $get_latest_new_Health,
                            'get_latest_new_Mixed' => $get_latest_new_Mixed,
                            ]); 
       
     }
     
     public function post_detail($id){
         $post_detail = $this->Users_model->post_detail($id);
         $get_popular_news = $this->Users_model->get_popular_news();
         $get_related_news = $this->Users_model->get_latest_new();
         $get_latest_new = $this->Users_model->get_latest_new();
         $this->load->view('Users/post_detail',[ 'post_detail' => $post_detail,
                                                 'get_popular_news' => $get_popular_news ,
                                                 'get_related_news' => $get_related_news, 
                                                 'get_latest_new' => $get_latest_new
                                                ]); 
     }
     

     
     public function about(){
       
         $get_popular_news = $this->Users_model->get_popular_news();
         $get_related_news = $this->Users_model->get_latest_new();
         $get_latest_new = $this->Users_model->get_latest_new();
         $this->load->view('Users/about',[
                'get_popular_news' => $get_popular_news,
                'get_related_news' => $get_related_news,
                'get_latest_new' => $get_latest_new
                ]); 
     }
    
         public function contactUs(){
         
          if($this->form_validation->run('contact_us')){ //'add_article_rules' 
             $post = $this->input->post();
              
              if($this->Users_model->contact_us($post)){
                $this->session->set_flashdata('msg',"Message Sent to Admin successfully");
                $this->session->set_flashdata('msg_class',"alert-success");
                    return redirect('users/contactUs');
            }else{
                $this->session->set_flashdata('msg',"Post not added please try again !!");
                $this->session->set_flashdata('msg_class',"alert-danger");
            }  
           } 
              
             $get_popular_news = $this->Users_model->get_popular_news();
             $get_related_news = $this->Users_model->get_latest_new();
             $get_latest_new = $this->Users_model->get_latest_new();
             $this->load->view('Users/contactUs',[
                    'get_popular_news' => $get_popular_news,
                    'get_related_news' => $get_related_news,
                    'get_latest_new' => $get_latest_new
                    ]); 
     } 
 
     
 }

?>