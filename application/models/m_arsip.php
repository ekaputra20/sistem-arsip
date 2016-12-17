<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_arsip extends CI_Model {
        function __construct(){
        parent::__construct();
        $this ->load ->database();
        //private $table_arsip="arsip";
        }
	
        public function get_data(){
        $this->db->select('*');
		$this->db->from('arsip');
		$query = $this->db->get();
		
		return $query->result();
        }
        public function get_data_by_id($id){
            $this->db->where('id_arsip',$id);
            $query = $this->db->get('arsip');
            
            return $query->row();
        }
        public function add_arsip($data){
            $query = $this->db->insert('arsip',$data);
            return $query;
        }
        
        //get now date
        public function get_now_date(){
            $query = $this->db->query('select curdate()');
            return $query->result();
        }
        
        //get all data where brgShow = 1 
        public function arsip_show(){
            $this->db->select('*');
            $this->db->from('arsip');
            $this->db->where('arsip_show',1);
            $this->db->order_by("tgl_kegiatan",'desc');
            $query = $this->db->get();
            return $query->result();
        }
        
        //this is delete function but actually not completely delete data, just to set brgShow = 0
        public function arsip_hide($id){
            $sql="UPDATE arsip SET arsip_show = 0 WHERE id_arsip = ? ";
            $query = $this->db->query($sql,$id);
            return $query;
        }
        
        public function get_subjek(){
            $query = $this->db->get('arsip');
            return $query->result();
        }

        public function get_lampiran(){
            $query = $this->db->get('arsip');
            return $query->result();
        }
        
        public function get_deskripsi(){
            $query = $this->db->get('arsip');
            return $query->result();
        }

        public function update_arsip($data){
           $sql="UPDATE arsip SET subjek = ?, tempat = ?, tgl_kegiatan = ? WHERE id_arsip = ? ";
            $query = $this->db->query($sql,$data);
            return $query;
        }
        
        public function get_detail_arsip_by_id($id){
            $this->db->where('id_arsip',$id);
            $query = $this->db->get('arsip');
            return $query->result();
        }

        public function more($id_arsip){
        $this->db->where('id_arsip',$id_arsip);
        return $this->db->get('arsip')->row();

        }

        
        public function search()
        {
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');

            // echo "bulan : $bulan";
            // echo "tahun : $tahun";
            //die();

            $this->session->set_userdata('bulan',$bulan);  
            $this->session->set_userdata('tahun',$tahun);

            if(empty($bulan) && empty($tahun)) {
                $conditon = 'and';
            }elseif(!empty($bulan) && !empty($tahun)) {
               $conditon = 'and';
            }else {

                $conditon = 'or';
            }

            $sql="select * from arsip where month(tgl_kegiatan) = '$bulan' $conditon year(tgl_kegiatan) = '$tahun'";
            //echo $sql;

            $query=$this->db->query($sql);
            // echo $bulan;
            // echo $tahun;
            // die();

            if ($query->num_rows() > 0){
                return $query->result_array();
            }
        
        }

        public function insertSync($param){
            $sql = "INSERT INTO arsip (tgl_kegiatan,subjek,tempat, tgl_kelola, userId) VALUES (?,?,?,?,?)";
            $query = $this->db->query($sql,$param);
            return $query;
        }

        public function insertSync2($param){
            $sql = "INSERT INTO lampiran (id_arsip,nama_file) VALUES (?,?)";
            $query = $this->db->query($sql,$param);
            return $query;
        }

        // public function insertSync3($param){
        //     $sql = "INSERT INTO mengelola (tgl_kelola,id_arsip,userId) VALUES (?,?,?)";
        //     $query = $this->db->query($sql,$param);
        //     return $query;
        // }

        public function arsipdetil($param){
            $sql = "SELECT a.id_arsip,a.tgl_kegiatan,a.subjek,a.tempat,a.tgl_kelola,a.userId,l.nama_file, u.userNamaLengkap from arsip a 
            
            join lampiran l on l.id_arsip=a.id_arsip
            join iuser u on u.userId=a.userId
            where a.id_arsip = ?";
            $query = $this->db->query($sql,$param);
            return $query->row();
        }

        public function lampiran($lam){
            $sql = "SELECT * from lampiran WHERE id_arsip = ?";
            $query = $this->db->query($sql,$lam);
            if ($query->num_rows() > 0 ) {

                return $query->result(); 
            }  
        }

        public function insertSync3($result3) {
        $sql="INSERT INTO riwayat (id_arsip, userId, tgl_edit) VALUES(?,?,?) ";
        $query = $this->db->query($sql,$result3);
        return $query;
    }

        public function riwayat($param){
            $sql = "SELECT u.userNamaLengkap, r.tgl_edit from riwayat r

            join iuser u on u.userId=r.userId
            where r.id_arsip = ?";
            $query = $this->db->query($sql,$param);
            return $query->result();
        }

}



