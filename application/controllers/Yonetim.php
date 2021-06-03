<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller {


    public function cikis()
    {
        $this->session->sess_destroy();
        $this->load->view('yonetim/login');

    }
	public function index()
	{
		$mesaj= $this->Vt->mesajCek();
		if($this->session->userdata('info')){
			$this->load->view('yonetim/anasayfa',compact('mesaj'));
		}
		else{
			$this->load->view('yonetim/login');
		}
	}

		
	public function login()
	{


		$this->load->library('form_validation');
		$this->form_validation->set_rules('kadi','Kullanıcı Adını','required|trim');
		$this->form_validation->set_rules('sifre','Şifreyi','required|trim');
		$this->form_validation->set_message('required','<div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
           %s Boş  Bırakmayınız
            </div>');
		if($this->form_validation->run())
		{
            $kadi=$this->input->post('kadi');
            $sifre=$this->input->post('sifre');
			$this->load->model('vt');
			$mesaj= $this->Vt->mesajCek();

			$sonuc=$this->vt->loginControl($kadi,$sifre);
			//print_r($sonuc);
            if($sonuc)
            {
            	
                $this->session->set_userdata('kontrol',true);
                $this->session->set_userdata('info',$sonuc);
                $this->session->set_userdata('mesaj',$mesaj);
               redirect('yonetim');
            }
            else{
                $this->session->set_flashdata('hata','<div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
          Kullanıcı adı ve Şife yanlış!
     
            </div>');

              redirect('yonetim/login');
            }

		}else{

			$this->load->view('yonetim/login');
		}
	 /*$rows =$this->db->get('yonetici')->row();
		print_r($rows) ;*/
		
	}

	
}
