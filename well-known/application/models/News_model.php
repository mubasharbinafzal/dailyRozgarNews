  <?php 
class News_model extends CI_model{

	public function __construct()
    {
      parent::__construct();
     
    }

    public function get_newpaper(){
        $q = "select * from newspaper ORDER BY newspaper_id DESC LIMIT 1";
        $q = $this->db->query($q);
       return $q->result_array();
       
    }
 
}

?>


