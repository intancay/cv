<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model("home_models");
	}
	public function index()
	{
		$data["info"] = $this->home_models->getAll();
		$data["biodata"] = $this->home_models->getBiodata();
		$data["pendidikan"] = $this->home_models->getPendidikan();
		$data["pengalaman"] = $this->home_models->getPengalaman();
		$data["portofolio"] = $this->home_models->getPortofolio();
		$data["kontak"] = $this->home_models->getKontak();
		$data["user"] = $this->home_models->getUser();
		$data["skill"] = $this->home_models->getSkill();
		$data["ig"] = $this->home_models->getIg();
		$data["whatsapp"] = $this->home_models->getWa();
		// var_dump($data);
		$this->load->view('home',$data);
	}
}
