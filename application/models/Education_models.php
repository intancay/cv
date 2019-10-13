<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class Education_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],
            ['field' => 'nama_pend',
            'label' => 'nama_pend',
            'rules' => 'required'],
            ['field' => 'ket_pend',
            'label' => 'ket_pend',
            'rules' => 'required']
        ];
    }
    public function getPendidikan()
    {
        $hasil = $this->db->get('pendidikan');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('pendidikan', ["id => $id"])->row();
    }
    public function save ()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_pend = $post["nama_pend"];
        $this->ket_pend = $post["ket_pend"];
        $this->db->insert('pendidikan', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_pend = $post["nama_pend"];
        $this->ket_pend = $post["ket_pend"];
        $this->db->update('pendidikan', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('pendidikan', array("id" => $id));
    }
}