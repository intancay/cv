<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class Wa_models extends CI_Model
{
    public function rules()
    {
        return[
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],
            ['field' => 'link',
            'label' => 'link',
            'rules' => 'required']
        ];
    }
    public function getWa()
    {
        $hasil = $this->db->get('wa');
        return $hasil->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('wa', ["id" => $id])->row_array();
    }
    public function save ()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->link = $post["link"];
        $this->db->insert('wa', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->link = $post["link"];
        $this->db->update('wa', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('wa', array("id" => $id));
    }
}           