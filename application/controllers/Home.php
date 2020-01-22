<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data = array();

		$data['headerlink'] = $this->load->view('frontend_template/headerlink', $data, TRUE);
		$data['header'] = $this->load->view('frontend_template/header', $data, TRUE);
		$data['footer'] = $this->load->view('frontend_template/footer', $data, TRUE);
		$data['footerlink'] = $this->load->view('frontend_template/footerlink', $data, TRUE);

		$data['home_content'] = $this->load->view('home_content', $data, TRUE);

		$this->load->view('main_content', $data);
	}

	public function about()
	{
		$data = array();

		$data['headerlink'] = $this->load->view('frontend_template/headerlink', $data, TRUE);
		$data['header'] = $this->load->view('frontend_template/header', $data, TRUE);
		$data['footer'] = $this->load->view('frontend_template/footer', $data, TRUE);
		$data['footerlink'] = $this->load->view('frontend_template/footerlink', $data, TRUE);

		$data['home_content'] = $this->load->view('about_us', $data, TRUE);

		$this->load->view('main_content', $data);
	}

	public function service()
	{
		$data = array();

		$data['headerlink'] = $this->load->view('frontend_template/headerlink', $data, TRUE);
		$data['header'] = $this->load->view('frontend_template/header', $data, TRUE);
		$data['footer'] = $this->load->view('frontend_template/footer', $data, TRUE);
		$data['footerlink'] = $this->load->view('frontend_template/footerlink', $data, TRUE);

		$data['home_content'] = $this->load->view('service', $data, TRUE);

		$this->load->view('main_content', $data);
	}

	public function contact()
	{
		$data = array();

		$data['headerlink'] = $this->load->view('frontend_template/headerlink', $data, TRUE);
		$data['header'] = $this->load->view('frontend_template/header', $data, TRUE);
		$data['footer'] = $this->load->view('frontend_template/footer', $data, TRUE);
		$data['footerlink'] = $this->load->view('frontend_template/footerlink', $data, TRUE);

		$data['home_content'] = $this->load->view('contact_us', $data, TRUE);

		$this->load->view('main_content', $data);
	}
}
