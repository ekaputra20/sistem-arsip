<?php
class M_laporan extends CI_Model
{
	
	public function tampilSemua()
	{
		$kegiatan=$_SESSION['kegiatans'];
		$tahun=$_SESSION['tahun'];
		$sql="select * from arsip where k.id=$kegiatan AND YEAR(pk.tgl_dari)=$tahun";
		$query=$this->db->query($sql);
		if ($query->num_rows > 0)
		{
			return $query->result_array();
		}
		
	}
	public function tampilKegiatan()
	{
		$sql="select * from arsip";
		$query=$this->db->query($sql);
		if ($query->num_rows > 0)
		{
			return $query->result_array();
		}
		
	}
	
	

	public function filters()
	{
		//$id=$this->input->post('kegiatans');
		$sql= 'select * from arsip';


		 $query=$this->db->query($sql, array($this->input->post('kegiatans')));
		if ($query->num_rows > 0)
		{
			return $query->result_array();
		 }
	}

	public function restore($param)
	{
		$sql="UPDATE arsip SET arsip_show = 1 WHERE id_arsip = ? ";
        $query = $this->db->query($sql,$param);
        return $query;
	}

}
?>
		
	