<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('isLogin') == FALSE)
        {
            //kembali ke login
            redirect('login');
        }
		$this->load->model('m_laporan'); 
		$this->load->model('m_login');
		$this->load->helper('tglindo_helper');
		
	}

	function index()
	{
		$this->load->model('m_arsip');
		$data['record']=$this->m_arsip->search();
		$user = $this->session->userdata('username');	
        $data['pengguna'] = $this->m_login->get_user($user);

		$this->load->view('themes/header', $data);
        $this->load->view('laporan',$data);
        $this->load->view('themes/footer');
	}

	// function filter(){
	// 	$data['rekam']=$this->m_laporan->filters();
	// 	$data['show']=$this->m_laporan->tampilTerima();
	// 	$this->load->model('m_arsip');
	// 	$data['record']=$this->m_laporan->tampilKegiatan();
	// }

	function cetak ()
	{
		
		define('FPDF_FONTPATH', $this->config->item('fonts_path'));
		$this->load->model('m_arsip');
		$data['record']=$this->m_arsip->search();
		
		// print_r($data);
		// die();

		$this->load->view('cetak', $data);

	}

	function excel ()
	{
		
		
		$this->load->model('m_arsip');
		 $data['record']=$this->m_arsip->search();
		$this->load->view('excel', $data);

	}

	function restore($param)
	{
		$restore = $this->m_laporan->restore($param);
		if ($restore) {
                    $this->session->set_flashdata('success','Data berhasil di kembalikan');
                    redirect('laporan');       

                }
                else {
                     $this->session->set_flashdata('error','Data gagal di kembalikan');
                    redirect('laporan');    
    }


	}


}