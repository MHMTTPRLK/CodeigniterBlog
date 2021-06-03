<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaj  extends CI_Controller
{

    public function index(){

        
        $this->load->model('Vt');

       $mesaj= $this->Vt->mesajCek();
       $rows= $this->Vt->mesajCek();

        $this->load->view('yonetim/mesajlar',compact('rows','mesaj'));

    }
    
   
   
    public function silMesaj($id)
    {
       /* echo "Başarılı";
        die();*/
        $id=$this->uri->segment('3');
        $this->load->model('Vt');
        $silinen=$this->Vt->mesajSil($id);
        if($silinen)
        {
        redirect('yonetim/mesajlar');
        }
       
    }

   
}