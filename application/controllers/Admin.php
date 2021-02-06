  <?php 
  class Admin extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      if(! $this->session->userdata('id')){
        return redirect('auth');
      }
        
    } 
    public function index(){
        
        $config =[
            'base_url' => base_url('admin/index'),
            'per_page' => 50,
            'total_rows' => $this->Admin_model->num_rows(),

            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
           
            'next_tag_open' => "<li class='page-item'>", // <a class="page-link"></a> add class in jquery 
            'next_tag_close' => "</li>",

            'first_tag_open' => "<li class='page-item'>",
            'first_tag_close' => "</li>",

            'last_tag_open' => "<li class='page-item'>",
            'last_tag_close' => "</li>",

            'prev_tag_open' => "<li class='page-item'>",
            'prev_tag_close' => "</li>",

            'num_tag_open' => "<li class='page-item'>",
            'num_tag_close' => "</li>",
            'anchor_class' => 'class="page-link" ',

            'cur_tag_open' => "<li class='page-item'><a class='active' href='#'>",
            'cur_tag_close' => "</a></li>",
        ];
      $this->pagination->initialize($config);
      $news_posts =$this->Admin_model->news_post($config['per_page'],$this->uri->segment(3));
      $this->load->view('admin/dashbord',['news_posts' => $news_posts]);
    }
      
    public function add_news_post(){
      $this->load->view('admin/add_news_post');

    }
    public function add_newspaper(){
      $this->load->view('admin/add_newspaper');

    }
    public function postValidation(){
       
      $config =  [
        'upload_path' => './upload/',
        'allowed_types' => 'gif|jpg|png',
      ];
       $this->load->library('upload',$config);
      if($this->form_validation->run('add_news_post') && $this->upload->do_upload('image')){
            $post = $this->input->post();
            $data = $this->upload->data();
            $image_path = $data['file_name'];
            $post['image'] = $image_path;
             if($this->Admin_model->add_news_post($post)){
                $this->session->set_flashdata('msg'," Added successfully");
                $this->session->set_flashdata('msg_class',"alert-success");
            }else{
                $this->session->set_flashdata('msg',"Post not added please try again !!");
                $this->session->set_flashdata('msg_class',"alert-danger");
            }  
        return redirect('admin');
      }else{ 
        $upload_error=$this->upload->display_errors();
        $this->load->view('admin/add_news_post',compact('upload_error'));
      }



  }
      public function postValidation_news(){
      
      $config =  [
        'upload_path' => './newspaper/',
        'allowed_types' => 'pdf',
      ];
       $this->load->library('upload',$config);
      if($this->form_validation->run('add_news_paper') && $this->upload->do_upload('newspaper_file')){
            $post = $this->input->post();
            $data = $this->upload->data();
            $post['newspaper_file'] = $data['file_name']; 
             if($this->Admin_model->add_newspaper_post($post)){
                $this->session->set_flashdata('msg'," Added successfully");
                $this->session->set_flashdata('msg_class',"alert-success");
            }else{
                $this->session->set_flashdata('msg',"Post not added please try again !!");
                $this->session->set_flashdata('msg_class',"alert-danger");
            }  
        return redirect('admin');
      }else{  
        $upload_error=$this->upload->display_errors();
        $this->load->view('admin/add_newspaper',compact('upload_error'));
      }



  }
  public function edituser($id){

   $data = $this->Admin_model->find_article($id);
   $this->load->view('admin/edit_article',['article'=>$data]);

  }
  public function update_news_post($id){
        if($this->form_validation->run('add_news_post')){//'add_article_rules'
                $post = $this->input->post();
                if ($post['type'] == ""){
                        $type_pre = $this->Admin_model->get_type_news_post($id);
                        $post['type'] = $type_pre;
                    }
                    
                            $config =  [
                                'upload_path' => './upload/',
                                'allowed_types' => 'gif|jpg|png',
                                ];
                            $this->load->library('upload',$config);
                            if ($this->upload->do_upload('image')){
                                   
                                   // delete image start
                                    $image_pre = $this->Admin_model->get_image_news_post($id);
                                    unlink('./upload/'.$image_pre);
                                    // delete image End
                                    $data = $this->upload->data();
                                    $image_path = $data['file_name'];
                                    $post['image'] = $image_path;
                                    
                                  
                            }else{
                                $image_pre = $this->Admin_model->get_image_news_post($id);
                                $post['image'] = $image_pre;
                            }
                               

                     if($this->Admin_model->update_news_post($id,$post)){ // admin is a model name
            
                          $this->session->set_flashdata('msg',"Edit successfully");
                          $this->session->set_flashdata('msg_class',"alert-success");
            
                    }else{
                          $this->session->set_flashdata('msg',"Please try again !!");
                          $this->session->set_flashdata('msg_class',"alert-danger");
                    }  
        return redirect('admin/index');
      }else{ 

        $data = $this->Admin_model->find_news_post($id);
        $this->load->view('admin/edit_article',['data'=>$data]);
        
      }
      

  }
  public function delete_news_post(){

     $id = $this->input->post('id');
     $image_name  = $this->Admin_model->delete_news_post($id);
     
    if (unlink('./upload/'.$image_name)){

          $this->session->set_flashdata('msg',"Delete successfully Record");
          $this->session->set_flashdata('msg_class',"alert-success");
          return redirect('admin/index');

    }else{
          $this->session->set_flashdata('msg',"please try again !!");
          $this->session->set_flashdata('msg_class',"alert-danger");
          return redirect('admin/index');
    }

    }

    public function view_message(){
        $view_message  = $this->Admin_model->view_message();
        $this->load->view('admin/view_message',['view_message'=>$view_message]);
        
    }



}
?>