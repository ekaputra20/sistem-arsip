 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Pengelola extends CI_Model {
        function __construct(){
        parent::__construct();
        $this ->load ->database();
        //private $table_arsip="arsip";
        }
	
        public function get_data(){
        $this->db->select('*');
		$this->db->from('iuser');
        
		$query = $this->db->get();
		
		return $query->result();
        }
        public function get_data_by_id($id){
            $this->db->where('userId',$id);
            $query = $this->db->get('iuser');
            
            return $query->row();
        }
        public function add_pengelola($data){
            $query = $this->db->insert('iuser',$data);
            return $query;
        }
        
        // //get now date
        // public function get_now_date(){
        //     $query = $this->db->query('select curdate()');
        //     return $query->result();
        // }
        
        // //get all data where brgShow = 1 
        // // public function arsip_show(){
        // //     $this->db->select('*');
        // //     $this->db->from('arsip');
        // //     $this->db->where('arsip_show',1);
        // //     $query = $this->db->get();
        // //     return $query->result();
        // // }
        
        // //this is delete function but actually not completely delete data, just to set brgShow = 0
        public function delete($id){
            $sql="delete from iuser where userId = '".$id."' ";
            $query = $this->db->query($sql,$id);
            return $query;
        }
        
        public function get_userNama(){
            $query = $this->db->get('iuser');
            return $query->result();
        }

        public function get_userNamaLengkap(){
            $query = $this->db->get('iuser');
            return $query->result();
        }
        
        public function get_NIP(){
            $query = $this->db->get('iuser');
            return $query->result();
        }

        public function get_userLevel(){
            $query = $this->db->get('iuser');
            return $query->result();
        }

        public function get_userPass(){
            $query = $this->db->get('iuser');
            return $query->result();
        }

        public function update_pengelola($id,$data){
            $this->db->where('userId',$id);
            $update = $this->db->update('iuser',$data);
            return $update;
        }
        
        public function get_detail_pengelola_by_id($id){
            $this->db->where('userId',$id);
            $query = $this->db->get('iuser');
            return $query->result();
        }

        // //contoh model more pada drive
        // // function more($almNIU){
        // // $this->db->where('almNIU',$almNIU);
        // // return $this->db->get($this->table_alumni)->row();
        // // }

        public function more($userId){
        $this->db->where('userId',$userId);
        return $this->db->get('iuser')->row();

        }
}