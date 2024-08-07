<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_portfolio');
		$this->load->model('m_galeri');
	}

	function index()
	{
		$x['fasilitas'] = $this->m_portfolio->get_portofolio_home();
		$x['galeri'] = $this->m_galeri->get_galeri_home();
		$this->load->view('v_home', $x);
	}

	function success()
	{
		$this->load->view('v_success');
	}
}
