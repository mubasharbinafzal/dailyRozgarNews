<?php 
 class Newspaper extends CI_Controller {
     
     public function index(){
         
          
         $get_popular_news = $this->Users_model->get_popular_news();
         $get_related_news = $this->Users_model->get_latest_new();
         $get_latest_new = $this->Users_model->get_latest_new();
         $get_newpaper = $this->News_model->get_newpaper(); 
         $this->load->view('Users/newspaper',[ 
                                                 'get_popular_news' => $get_popular_news ,
                                                 'get_related_news' => $get_related_news, 
                                                 'get_latest_new' => $get_latest_new,
                                                 'get_newpaper' => $get_newpaper
                                                ]);  
          
     }
     
   
     

   
    
      
 
     
 }

?>