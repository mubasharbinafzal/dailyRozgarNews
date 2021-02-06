  <?php 
class Users_model extends CI_model{

	public function __construct()
    {
      parent::__construct();
     
    }

    public function getNewspost_image(){
	  $q = "select image from news ORDER BY RAND () limit 6";
        $q = $this->db->query($q);
       return $q->result_array();
		}
    public function get_latest_new(){
        $q = "select * from news where type = 'Latest_News' ORDER BY id DESC limit 10";
        $q = $this->db->query($q);
       return $q->result_array();
       
    }
    public function get_latest_side() {
         $q = "select * from news where type = 'Latest_News' ORDER BY RAND () limit 5";
        $q = $this->db->query($q);
       return $q->result_array();
    }
    
     public function get_popular_news() {
         $q = "select * from news  ORDER BY RAND () limit 5";
        $q = $this->db->query($q);
       return $q->result_array();
    }
    public function get_latest_new_Politics(){
        $q = "select * from news where type = 'Politics' ORDER BY id DESC limit 4";
        $q = $this->db->query($q);
       return $q->result_array();
       
    }
    public function get_latest_new_Health(){
        $q = "select * from news where type = 'Health' ORDER BY id DESC limit 4";
        $q = $this->db->query($q);
       return $q->result_array();
       
    }
    public function get_latest_new_Mixed(){
        $q = "select * from news where type = 'Mixed' ORDER BY id DESC limit 4";
        $q = $this->db->query($q);
       return $q->result_array();
       
    }
    public function post_detail($id){
        $q = "select * from news where id =".$id;
        $q = $this->db->query($q);
        $q = $q->result_array();
        return $q[0];
    }
    public function contact_us($data){
        return $this->db->insert('contact',$data);
    }
}

?>


