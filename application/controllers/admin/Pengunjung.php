<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_pengunjung'); // Menggunakan model M_pengunjung
    }

    public function index() {
        $data['data'] = $this->m_pengunjung->get_all_pengunjung();
        $this->load->view('admin/v_sidebar', $data); // Mengambil data dari model M_pengunjung
        $this->load->view('admin/v_pengunjung', $data); // Mengirim data ke view
    }
}