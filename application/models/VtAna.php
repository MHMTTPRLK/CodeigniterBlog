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
        $result=$this->db->select('*')->from('duyurular')->get()->result();
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
}