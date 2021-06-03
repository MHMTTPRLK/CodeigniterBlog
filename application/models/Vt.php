<?php
class Vt extends CI_Model{
    function loginControl($kadi,$sifre)
    {
        $result=$this->db->where('ykadi',$kadi)
            ->where('ysifre',$sifre)
            ->get('yonetici')
            ->row();

        if(is_countable($result))
        {
            return false;
        }
        else{
            return $result;
        }
    }
    function duyuruEkle($data=array())
    {
        $result=$this->db->insert('duyurular',$data);
        return $result;
    }
    function duyuruCek()
    {
        $result=$this->db->select('*')
        ->from('duyurular')
        ->order_by('duyuru_id','desc')
        ->get()
        ->result();
        return $result;
    }
    function duyuruSil($id)
    {
        $result=$this->db->delete('duyurular',array('duyuru_id'=>$id));
        return $result;
    }
     function duyuruInfo($id)
    {
         $result=$this->db->where('duyuru_id',$id)->get('duyurular')->row();
         return $result;
    }

    function duyuruGuncelle($id,$data)
    {
            $result=$this->db->update('duyurular',$data,array('duyuru_id'=>$id));

             return $result;
    }

    function iletisimGonder($data=array())
    {
         $result=$this->db->insert('iletisim',$data);
        return $result;
    }
    function mesajCek()
    {
        $result=$this->db->select('*')
        ->from('iletisim')
        ->order_by('id','desc')
        ->get()
        ->result();
        return $result;
    }
    function mesajSil($id)
    {
        $result=$this->db->delete('iletisim',array('id'=>$id));
        return $result;
    }

    function mesajFind($id)
    {
        $result = $this->db
        ->where('id',$id)
        ->get('iletisim')
        ->row();
        return $result; 
    }
     function kategoriCek()
    {
        $result=$this->db->select('*')
        ->from('kategori')
        ->get()
        ->result();
        return $result;
    }
     function kategoriEkle($data=array())
    {
        $result=$this->db->insert('kategori',$data);
        return $result;
    }
     function kategoriInfo($id)
    {
         $result=$this->db->where('id',$id)->get('kategori')->row();
         return $result;
    }
    function kategoriSil($id)
    {
        $result=$this->db->delete('kategori',array('id'=>$id));
        return $result;
    }

    function kategoriGuncelle($id,$data)
    {
            $result=$this->db->update('kategori',$data,array('id'=>$id));

             return $result;
    }
}