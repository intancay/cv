<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("wa_models");
		$this->load->library('form_validation');
	}

	public function index()
	{   
		$data['wa'] = $this->wa_models->getWa();
		// var_dump($data);
		$this->load->view('admin/wa/index', $data);
	}

	public function add()
	{
		$wa = $this->wa_models;
		$validation = $this->form_validation;
		$validation->set_rules($wa->rules());
		if ($validation->run()){
			$wa->save();
			$this->session->set_flashdata('success', 'Data whatsapp Berhasil ditambahkan');
			redirect(site_url('admin/wa'));
		}
		$this->load->view("admin/wa");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/wa');

		$wa =$this->wa_models;
		$validation = $this->form_validation;
		$validation->set_rules($wa->rules());

		if ($validation->run()) {
			$wa->update();
			$this->session->set_flashdata('succes', 'Data whatsapp Berhasil dirubah');
			redirect(site_url('admin/wa'));

		}

		$data["wa"] = $wa->getById($id);
		if (!$data["wa"]) show_404();

		$this->load->view("admin/wa/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->wa_models->delete($id)) {
			redirect(site_url('admin/wa'));
		}
	}
}
