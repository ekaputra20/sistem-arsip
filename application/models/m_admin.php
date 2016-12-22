<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

	
        
        public function get_admin($username){
                $this->db->select('*');
		$this->db->from('iuser');
		$this->db->where('userNama', $username);
		$query = $this->db->get();
		
		return $query->row();
        }
        
        public function update_admin($id,$data){
            $this->db->where('userId',$id);
            $update = $this->db->update('iuser',$data);
            return $update;
        }
}
