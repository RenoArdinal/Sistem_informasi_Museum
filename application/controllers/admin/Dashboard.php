<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['logged_in'])) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pengunjung');

	}
	function index()
	{
		$data['data'] = $this->m_pengunjung->get_all_pengunjung();
		$this->load->view('admin/v_sidebar', $data);
		$this->load->view('admin/v_dashboard', $data);
	}
}
