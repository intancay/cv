<?php
class Home_models extends CI_Model{
    public function getAll()
    {
        return $this->db->get('info')->row_array();
    }
    public function getBiodata()
    {
        return $this->db->get('biodata')->row_array();
    }
    public function getPendidikan()
    {
        return $this->db->get('pendidikan')->result();
    }
    public function getPengalaman()
    {
        return $this->db->get('pengalaman')->result();
    }
    public function getPortofolio()
    {
        return $this->db->get('portofolio')->row_array();
    }
    public function getKontak()
    {
        return $this->db->get('kontak')->row_array();
    }
    public function getSkill()
    {
        return $this->db->get('Skill')->result();
    }
    public function getIg()
    {
        return $this->db->get('ig')->row_array();
    }
    public function getWa()
    {
        return $this->db->get('whatsapp')->row_array();
    }
    public function getUser()
    {
        return $this->db->get('user')->row_array();
    }

    public function getByid($id)
    {
        return $this->db->get_where('info',["id"=> $id])->row();
        return $this->db->get_where('biodata',["id"=> $id])->row();
        return $this->db->get_where('pendidikan',["id"=> $id])->row();
        return $this->db->get_where('pengalaman',["id"=> $id])->row();
        return $this->db->get_where('portofolio',["id"=> $id])->row();
        return $this->db->get_where('kontak',["id"=> $id])->row();
        return $this->db->get_where('skill',["id"=> $id])->row();
        return $this->db->get_where('ig',["id"=> $id])->row();       
        return $this->db->get_where('whatsapp',["id"=> $id])->row();
        return $this->db->get_where('user',["id"=> $id])->row();

    }

}
?>