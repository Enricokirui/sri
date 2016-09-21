<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');		
	}

	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function news()
	{
		$this->load->view('templates/header');
		$this->load->view('news');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}


	public function addnews()
	{
		$this->load->view('templates/header');
		$this->load->view('addnews');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function editnews()
	{
		$this->load->view('templates/header');
		$this->load->view('editnews');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function deletenews()
	{
		$this->load->view('templates/header');
		$this->load->view('deletenews');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function users()
	{
		$this->load->view('templates/header');
		$this->load->view('users');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}


	public function addusers()
	{
		$this->load->view('templates/header');
		$this->load->view('addusers');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function deleteuser()
	{
		// $this->load->view('templates/header');
		$this->load->view('deleteuser');
		// $this->load->view('templates/footer');
		// $this->load->view('templates/sidebar');
	}

	public function callaction()
	{
		$this->load->view('templates/header');
		$this->load->view('callaction');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function introduction()
	{
		$this->load->view('templates/header');
		$this->load->view('introduction');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function features()
	{
		$this->load->view('templates/header');
		$this->load->view('features');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function sliders()
	{
		$this->load->view('templates/header');
		$this->load->view('sliders');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function footers()
	{
		$this->load->view('templates/header');
		$this->load->view('footers');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function contacts()
	{
		$this->load->view('templates/header');
		$this->load->view('contacts');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function abstracts()
	{
		$this->load->view('templates/header');
		$this->load->view('abstracts');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function readabstracts()
	{
		$this->load->view('templates/header');
		$this->load->view('readabstracts');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

	public function researchers()
	{
		$this->load->view('templates/header');
		$this->load->view('researchers');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}

}
