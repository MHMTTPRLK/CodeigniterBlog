<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori  extends CI_Controller
{

    public function index(){
        $this->load->model('Vt');
       $rows= $this->Vt->kategoriCek();
        $mesaj= $this->Vt->mesajCek();
        $this->load->view('Yonetim/kategoriler',compact('rows','mesaj'));

    }
     public function ekle()
    {
         $this->load->model('Vt');
         $mesaj= $this->Vt->mesajCek();
        $this->load->view('Yonetim/kategoriEkle',compact('mesaj'));
    }
     public function  kategoriPost()
    {
        $name=$this->input->post('name');
      
      
       // $yazi="ÇÇÇ FFF ĞĞĞĞ ";
      //  echo sef($yazi);
        $data=array('name'=>$name,
            
            
            'kasef'=>sef($name),
            );
        $this->load->model('Vt');
        $insert=$this->Vt->kategoriEkle($data);
        if($insert)
        {
            $this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            Tebrikler Kategori Başarıyla Eklendi.
     
            </div>');
            redirect('yonetim/kategori');
        }
        else{
            echo "hatalı";
        }
    }
    public function updatePage($id)
    {
         /*$id=$this->uri->segment('3');
          $this->load->model('Vt');
         $this->load->view('yonetim/duyuruGuncelle');*/
         $id=$this->uri->segment('3');
        $this->load->model('Vt');
        $info=$this->Vt->kategoriInfo($id);
        /*print_r($info);
        die();*/
    $mesaj= $this->Vt->mesajCek();
       $this->load->view('yonetim/kategoriGuncelle',compact('info','mesaj'));
      
    }
    
    public function update($id)
    {
        $name=$this->input->post('name');
        
        $data=array('name'=>$name,'kasef'=>sef($name));
       $id=$this->uri->segment('3');
       $this->load->model('Vt');
       $info=$this->Vt->kategoriGuncelle($id,$data);
       if($info)
       {
    $this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible">
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                Tebrikler Duyuru Başarıyla Güncellendi.
         
                </div>');
                redirect('yonetim/kategori');
       }
   
 
    }
     public function sil($id)
    {

        $id=$this->uri->segment('3');

        $this->load->model('Vt');
        $silinen=$this->Vt->kategoriSil($id);
        if($silinen)
        {
        redirect('Kategori/');
        }
       
    }
  
}