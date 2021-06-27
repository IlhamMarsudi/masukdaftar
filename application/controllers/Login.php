<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('daftar');
		$this->load->view('fungsi/footer');
	}

	public function masuk()
	{
		$this->load->view('fungsi/header');
		$this->load->view('masuk');
		$this->load->view('fungsi/footer');
	}

	public function daftarpencaker()
	{
		$this->load->view('fungsi/header');
		$this->load->view('daftarpencaker');
		$this->load->view('fungsi/footer');
	}
	public function daftarperusahaan()
	{
		$this->load->view('fungsi/header');
		$this->load->view('daftarperusahaan');
		$this->load->view('fungsi/footer');
	}
	public function veremail()
	{
		$this->load->view('fungsi/header');
		$this->load->view('veremail');
		$this->load->view('fungsi/footer');
	}
	public function setpasspencaker()
	{
		$this->load->view('fungsi/header');
		$this->load->view('setpasspencaker');
		$this->load->view('fungsi/footer');
	}
	public function setpassperusahaan()
	{
		$this->load->view('fungsi/header');
		$this->load->view('setpassperusahaan');
		$this->load->view('fungsi/footer');
	}
	public function dokperusahaan()
	{
		$this->load->view('fungsi/header');
		$this->load->view('dokperusahaan');
		$this->load->view('fungsi/footer');
	}
	public function lupasandi()
	{
		$this->load->view('fungsi/header');
		$this->load->view('lupasandi');
		$this->load->view('fungsi/footer');
	}
	public function ubahsandi()
	{
		$this->load->view('fungsi/header');
		$this->load->view('ubahsandi');
		$this->load->view('fungsi/footer');
	}
}
