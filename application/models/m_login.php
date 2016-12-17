<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	
	public function validate($username,$password)
	{
            //menselec database codeigniter yang dari tabel user
		$this->db->select('*');
		$this->db->from('iuser');
		// di mana username = $username
		$this->db->where('userNama', $username);
		// di mana password = $password
		$this->db->where('userPass', $password);

		$this->db->where('userAktif',1);

		$this->db->limit(1);



		// $query = "SELECT * FROM iuser WHERE userNama='$username' AND userPass='$password' AND userAktif=1";
		// $data = $this->db->query($query);
		// $data = $data->result_array();

		//membuat query yang mengambil datase
		$query = $this->db->get();
		return $query->row_array();
		// print_r($data);
		// die();
		
		// kembali ke query
		//return $data;

	}
        
        public function get_user($username){
                $this->db->select('*');
		$this->db->from('iuser');
		$this->db->where('userNama', $username);
		$query = $this->db->get();
		
		return $query->row();
        }

        public function cekUser($id){
        	$date = date('Y-m-d');
        	$sql = "SELECT DATEDIFF('$date',userLastLogin) as diff, userLastLogin, userId from iuser where userAktif =1 AND userLevel='pengelola' AND userNama = ? LIMIT 1";
        	$query = $this->db->query($sql, $id);

        	if ($query->num_rows() > 0){
        		// foreach ($query->row_array() as $key) {
        			$key = $query->row_array();
                   // print_r($key);
        			//die();

        			if($key['diff'] > 120){
        				$sqlUpdate = "UPDATE iuser SET userAktif = 0 WHERE userId = '$key[userId]'";
        				$q=$this->db->query($sqlUpdate);
        				return $q;
        			} else{
        				return false;
        			}

        			
        		// }
        	}
        	
        }

        public function setLastLogin($id){
        	$date = date('Y-m-d');
        	$sql = "UPDATE iuser SET userLastLogin='$date' WHERE userId = ?";
        	$q = $this->db->query($sql, $id);
            return $q;
            

        }
}
