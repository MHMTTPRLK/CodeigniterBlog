<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->model('Vt');
		$rows=$this->Vt->duyuruCek();
            $datas=$this->Vt->kategoriCek();
		$this->session->set_userdata('title','Blog');
		$this->load->view('anasayfa',compact('rows','datas'));
	}
    public function login()
    {
        $this->load->view('yonetim/login');
    }

    public function duyuruCek($id)
    {

    	$id=$this->uri->segment('2');
    	/*echo $id;
    	die();*/
    	$this->load->model('Vt');
    	$info=$this->Vt->duyuruInfo($id);
    	/*print_r($info);
    	die();*/
    	$this->session->set_userdata('title',$info->baslik);
    	$this->load->view('duyurular',compact('info'));
    }

    public function iletisimPage()
    {

    	$this->load->view('contact');
    }
    public function iletisimSend()
    {

    	$adsoyad=$this->input->post('adsoyad');
    	$email=$this->input->post('email');
    	$telefon=$this->input->post('telefon');
    	$mesaj=$this->input->post('mesaj');
    	$tarih=date('Y-m-d');
    	/*print_r($this->input->post());
    	die();*/
    	$this->load->model('Vt');
    	$data=array('adsoyad'=>$adsoyad,'email'=>$email,'telefon'=>$telefon,'mesaj'=>$mesaj,'tarih'=>$tarih);
    	$insert=$this->Vt->iletisimGonder($data);
    	if($insert){
    		$this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            Tebrikler Mesajınız İletildi.
     
            </div>');
            redirect('iletisim');
    	}
    }
    public function notFound(){
        $this->load->view('404');
    }
   

}
