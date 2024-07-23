<?php 
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_tiket');
	}

	public function index(){
		$this->load->view('v_tiket');
	}

	public function search(){
		$keyword = $this->input->post('tiket');
		$this->db->select('*');
		$this->db->from('v_pembayaran');
		$this->db->like('email', $keyword);
		$this->db->or_like('kode_tiket', $keyword);
		$data['tikets'] = $this->db->get()->result_array();
		$this->load->view('v_tiket', $data);
	}

	public function add(){
		//validasi form yang masuk
		$this->form_validation->set_rules('keperluan', 'KEPERLUAN KUNJUNGAN','required');
		$this->form_validation->set_rules('email','EMAIL','required');
		$this->form_validation->set_rules('tgl_kunjungan','TANGGAL KUNJUNGAN','required');
		$this->form_validation->set_rules('jam_kunjungan','JAM KUNJUNGAN','required');
		$this->form_validation->set_rules('jumlah_dewasa','JUMLAH TIKET DEWASA','required');
		$this->form_validation->set_rules('jumlah_anak','JUMLAH TIKET ANAK-ANAK','required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('notif',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Terjadi Kesalahan!</strong> Terjadi kesalahan pada data yang anda inputkan.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect ('tiket');
		}else{
			$keperluan = $this->input->post('keperluan');
			$email = $this->input->post('email');
			$tgl_kunjungan = $this->input->post('tgl_kunjungan');
			$jam_kunjungan = $this->input->post('jam_kunjungan');

			$nama_dewasa = $this->input->post('nama_dewasa');
			$pekerjaan_dewasa = $this->input->post('pekerjaan_dewasa');
			$jenis_kelamin_dewasa = $this->input->post('jenis_kelamin_dewasa');
			$tipe_pengunjung_dewasa = $this->input->post('tipe_pengunjung_dewasa');

			$nama_anak = $this->input->post('nama_anak');
			$pekerjaan_anak = $this->input->post('pekerjaan_anak');
			$jenis_kelamin_anak = $this->input->post('jenis_kelamin_anak');
			$tipe_pengunjung_anak = $this->input->post('tipe_pengunjung_anak');

			// Data untuk tbl_tiket
			$kode_tiket = time(); // Menggunakan timestamp sebagai kode tiket
			$data_tiket = [
				'kode_tiket' => $kode_tiket,
				'email' => $this->input->post('email'),
				'jumlah_orang' => $this->input->post('jumlah_dewasa') + $this->input->post('jumlah_anak'),
				'total_biaya' => $this->input->post('tottal'),
			];
			$this->db->insert('tbl_tiket', $data_tiket);
			$id_tiket = $this->db->insert_id();

			// Data untuk tbl_pengunjung
			$pengunjung_dewasa = $this->input->post('nama_dewasa');
			$pengunjung_anak = $this->input->post('nama_anak');

			// Simpan data pengunjung dewasa
			if (!empty($pengunjung_dewasa)) {
				foreach ($pengunjung_dewasa as $index => $nama) {
					$data_pengunjung = [
						'id_tiket' => $id_tiket,
						'nama_pengunjung' => $nama,
						'pekerjaan_pengunjung' => $this->input->post('pekerjaan_dewasa')[$index],
						'jenis_kelamin' => $this->input->post('jenis_kelamin_dewasa')[$index],
						'tanggal_kunjungan' => $this->input->post('tgl_kunjungan'),
						'jam_kunjungan' => $this->input->post('jam_kunjungan'),
						'keperluan' => $this->input->post('keperluan'),
						'tipe_pengunjung' => 'Dewasa'
					];
					$this->db->insert('tbl_pengunjung', $data_pengunjung);
				}
			}

			// Simpan data pengunjung anak
			if (!empty($pengunjung_anak)) {
				foreach ($pengunjung_anak as $index => $nama) {
					$data_pengunjung = [
						'id_tiket' => $id_tiket,
						'nama_pengunjung' => $nama,
						'pekerjaan_pengunjung' => $this->input->post('pekerjaan_anak')[$index],
						'jenis_kelamin' => $this->input->post('jenis_kelamin_anak')[$index],
						'tanggal_kunjungan' => $this->input->post('tgl_kunjungan'),
						'jam_kunjungan' => $this->input->post('jam_kunjungan'),
						'keperluan' => $this->input->post('keperluan'),
						'tipe_pengunjung' => 'Anak'
					];
					$this->db->insert('tbl_pengunjung', $data_pengunjung);
				}
			}

			$this->session->set_flashdata('notif',
				'<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong> Data yanda berhasil diinput
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect ('tiket');
		}
	}

	public function add_konfirmasi(){
		//validasi form yang masuk
		$this->form_validation->set_rules('no_rek','NO REKENING', 'required');

		if ($this->form_validation->run()==FALSE){
			redirect('tiket/search');
		}else{
			$config['upload_path'] = './assets/img/bukti_tf';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']=2000;
			$config['max_width']=4500;
			$config['max_height']=5700;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('notif','
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Terjadi masalah pada foto!</strong> Pastikan foto yang anda inputkan sudah sesuai aturan.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('tiket');
			}else{
				$filename = $this->upload->data('file_name');
				$data = [
					'kode_tiket' => $this->input->post('kode_tiket'),
					'no_rek' => $this->input->post('no_rek'),
					'nama_rek' => $this->input->post('nama'),
					'tgl_tf' => $this->input->post('tgl_tf'),
					'foto' => $filename,    
					'status' => 0,
				];
				$this->db->insert('tbl_pembayaran', $data);    
				$id_pembayaran = $this->db->insert_id();

				// Update id_pembayaran di tbl_tiket
				$this->db->where('kode_tiket', $this->input->post('kode_tiket'));
				$this->db->update('tbl_tiket', ['id_pembayaran' => $id_pembayaran]);

				$this->session->set_flashdata('notif','
					<div class="alert alert-info alert-dismissible fade show" role="alert">
					<strong>Terimakasih! </strong>Pembayaran anda akan kami cek, mohon bersabar sampai tiket anda aktif
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				//tarik ke form
				redirect('tiket');
			}
		}
	}

	public function laporan_pdf(){
		$keyword = $this->input->post('tiket');
		$data['tikets']=$this->M_tiket->show($keyword);

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Tiket-TGI.pdf";
		$this->pdf->load_view('v_print_tiket', $data);
	}

	// Controller Tiket.php
	public function cetak($kode_tiket) {
    // Ambil data tiket dari model M_tiket
		$data['tiket'] = $this->M_tiket->getTiketById($kode_tiket);

    // Load view dengan data tiket
		$this->load->view('v_print_tiket', $data);
	}

}