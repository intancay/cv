<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("info_models");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['info'] = $this->info_models->getAll();
		var_dump($data);
		$this->load->view('admin/info/index', $data);
	}

	public function add()
	{
		$info = $this->info_models;
		$validation = $this->form_validation;
		$validation->set_rules($info->rules());
		if ($validation->run()){
			$info->save();
			$this->session->set_flashdata('success', 'Data Info Berhasil ditambahkan');
			redirect(site_url('admin/info'));
		}
		$this->load->view("admin/info");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/info');

		$info =$this->info_models;
		$validation = $this->form_validation;
		$validation->set_rules($info->rules());

		if ($validation->run()) {
			$info->update();
			$this->session->set_flashdata('succes', 'Data Info Berhasil dirubah');
			redirect(site_url('admin/info'));

		}

		$data["info"] = $info->getById($id);
		if (!$data["info"]) show_404();

		$this->load->view("admin/info/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->info_models->delete($id)) {
			redirect(site_url('admin/info'));
		}
	}
}
