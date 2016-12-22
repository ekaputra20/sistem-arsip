<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengelola extends CI_Controller {

	public function __construct() {
            parent::__construct();
            if($this->session->userdata('isLogin') == FALSE || $this->session->userdata('level') == 'pengelola')
            {
            //kembali ke login
            redirect('login');
            }
            //load model
            $this->load->model('m_login');
                        //load barang
            $this->load->model('m_pengelola');
            $this->load->helper('tglindo_helper');
            

        }
	public function index() {
            $user = $this->session->userdata('username');
            $data_user['pengguna'] = $this->m_login->get_user($user);
            // $data['data_arsip']=$this->m_arsip->get_data();

            $data['data_pengelola']=$this->m_pengelola->get_data();
           // $data_user['active'] = 'active';

             // $query = array(
             
             //     'userNama' => $this->m_pengelola->get_userNama()
             //     );
               
            $this->load->view('themes/header',$data_user);
            $this->load->view('pengelola', $data);
            $this->load->view('themes/footer');
            

        }  

         
        public function insert_pengelola(){

            $this->form_validation->set_rules('userNama', 'Username', 'required|trim|xss_clean|is_unique[iuser.userNama]');

            if ($this->form_validation->run() === true) {
                $user = $this->session->userdata('username');
                $data = array(
                	'userNama' => $this->input->post('userNama'),
                  	'userNamaLengkap' => $this->input->post('userNamaLengkap'),   
                  	'userNIP' => $this->input->post('userNIP'),
                  	'userPass'=> md5($this->input->post('userPass')),
                  	'userLevel'=>$this->input->post('userLevel'),
                    'userAktif'=>1
                );
                
                $execute = $this->m_pengelola->add_pengelola($data);
                
                if($execute){
                $this->session->set_flashdata('success','Data berhasil tersimpan');
                redirect('pengelola');       

                }
                else {
                $this->session->set_flashdata('error','Data gagal tersimpan');
                redirect('pengelola');       

                }
            } else {
                 $this->session->set_flashdata('error','Username sudah ada');
                    redirect('pengelola');       

            }

           
            
        }
        
        public function delete(){
            $id = $this->uri->segment(3);
            $delete = $this->m_pengelola->delete($id);
            if ($delete) {
                    $this->session->set_flashdata('success','Data berhasil di hapus');
                    redirect('pengelola');       

                }
                else {
                     $this->session->set_flashdata('error','Data gagal di hapus');
                    redirect('pengelola');    
    }
        }


        public function pengelola_detil($userId){
        $user = $this->session->userdata('username');
        $peng['pengguna'] = $this->m_login->get_user($user);

        $id = $this->uri->segment(3);

        $data['hasil']=$this->m_pengelola->more($userId);

        $this->load->view('themes/header', $peng);
        $this->load->view('pengelola_detil',$data);
        $this->load->view('themes/footer');    
    }    
        
        public function  update_pengelola(){
            $this->load->library('user_agent');
            $user = $this->session->userdata('username');
            $segment = $this->input->server('HTTP_REFERER');
            // echo $segment;
            // die();
            $tgl = date("Y-m-d");
            //$id =  $this->uri->segment(3);
            $id = $this->input->post('id');
            $data = array(
              'userNama' => $this->input->post('userNama'),
              'userNamaLengkap' => $this->input->post('userNamaLengkap'),   
              'userNIP' => $this->input->post('userNIP'),
              'userLevel'=>$this->input->post('userLevel'),
              'userAktif'=>$this->input->post('userAktif')
            );

            if ($this->input->post('userPass')){
              $data['userPass'] =md5($this->input->post('userPass'));
            }

            $execute = $this->m_pengelola->update_pengelola($id,$data);
            
            if($execute){
                $this->session->set_flashdata('success','Data berhasil di edit');
                 redirect($_SERVER['HTTP_REFERER'], 'refresh');
                    
            //  $this->session->set_flashdata('success','Data telah tersimpan');
            // redirect('pengelola/pengelola_detil/'. urldecode($id)); 
          
                          

                }
                else {
                     $this->session->set_flashdata('error','Data gagal tersimpan');
                    redirect('pengelola_detil');       

                }
            }
        }


        