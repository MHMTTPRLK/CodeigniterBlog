<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duyuru  extends CI_Controller
{

    public function index(){
        $this->load->model('Vt');
       $rows= $this->Vt->duyuruCek();
        $mesaj= $this->Vt->mesajCek();
        $this->load->view('Yonetim/duyurular',compact('rows','mesaj'));

    }
    public function ekle()
    { $this->load->model('Vt');
     $mesaj= $this->Vt->mesajCek();
        $this->load->view('Yonetim/duyuruEkle',compact('mesaj'));
    }
    public function  duyuruPost()
    {
        $baslik=$this->input->post('baslik');
        $aciklama=$this->input->post('aciklama');
        $tarih=date('Y-m-d');
       // $yazi="ÇÇÇ FFF ĞĞĞĞ ";
      //  echo sef($yazi);
        $data=array('baslik'=>$baslik,
            'aciklama'=>$aciklama,
            'tarih'=>$tarih,
            'link'=>sef($baslik),
            'tiksayisi'=>0);
        $this->load->model('Vt');
        $insert=$this->Vt->duyuruEkle($data);
        if($insert)
        {
            $this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            Tebrikler Duyuru Başarıyla Eklendi.
     
            </div>');
            redirect('yonetim/duyurular');
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
        $info=$this->Vt->duyuruInfo($id);
        /*print_r($info);
        die();*/

       $this->load->view('yonetim/duyuruGuncelle',compact('info'));
      
    }
    public function update($id)
    {
        $baslik=$this->input->post('baslik');
        $aciklama=$this->input->post('aciklama');
        
        $data=array('baslik'=>$baslik,'aciklama'=>$aciklama,'link'=>sef($baslik));
       $id=$this->uri->segment('3');
       $this->load->model('Vt');
       $info=$this->Vt->duyuruGuncelle($id,$data);
       if($info)
       {
    $this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible">
                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
                Tebrikler Duyuru Başarıyla Güncellendi.
         
                </div>');
                redirect('yonetim/duyurular');
       }
   

       /* 
        
       $this->load->view('yonetim/duyuruGuncelle',compact('info'));
       print_r($info);
       die();*/
        
    }
    public function sil($id)
    {
        $id=$this->uri->segment('3');
        $this->load->model('Vt');
        $silinen=$this->Vt->duyuruSil($id);
        if($silinen)
        {
        redirect('Duyuru/');
        }
       
    }
}