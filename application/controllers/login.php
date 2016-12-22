<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
            parent::__construct();
            
            //load model
            $this->load->model('m_login');
        }
	public function index()
	{
		$this->load->view('login');
	}
        public function validate_login(){

        
        

        //memberi validasi pa da username dan password
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</div>');
		//jika form yang di isi salah , akan kembali lagi ke form_login
		if($this->form_validation->run()==FALSE){
			$this->index();
		}else{

		//jika form yang di isi benar 
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->m_login->cekUser($username);
		
		$cek = $this->m_login->validate($username, $password);

		if($cek == TRUE){
			//!!!!disini 
			

		$this->m_login->setLastLogin($cek['userId']);
		//$this->m_login->setLastLogin($id);
	
		$this->session->set_userdata('isLogin', TRUE);
		$this->session->set_userdata('username',$username);
		$this->session->set_userdata('level',$cek['userLevel']);
		$this->session->set_userdata('userId',$cek['userId']);
		//$this->session->set_userdata('level',$userLevel);

		redirect('admin');
		}else{
		// jika salah
		echo "
			<script>
			alert('Gagal Login: Cek username dan password anda!');
			history.go(-1);
			</script>
                    ";
			
			}
		}

        }


        
        function logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */