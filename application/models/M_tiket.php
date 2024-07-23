<?php
class M_tiket extends CI_Model{

    public function add() {
        // Data untuk tbl_tiket
        $kode_tiket = time(); // Menggunakan timestamp sebagai kode tiket
        $data_tiket = [
            'kode_tiket' => $kode_tiket,
            'email' => $this->input->post('email'),
            'jumlah_orang' => $this->input->post('jumlah_dewasa') + $this->input->post('jumlah_anak'),
            'total_biaya' => $this->input->post('tottal')
        ];

        // Menyimpan data ke tbl_tiket
        $this->db->insert('tbl_tiket', $data_tiket);
        $id_tiket = $this->db->insert_id(); // Mendapatkan ID yang baru saja diinsert

        // Data untuk tbl_pengunjung
        $jumlah_dewasa = $this->input->post('jumlah_dewasa');
        $jumlah_anak = $this->input->post('jumlah_anak');

        // Menyimpan data pengunjung dewasa
        for ($i = 0; $i < $jumlah_dewasa; $i++) {
            $data_pengunjung = [
                'id_tiket' => $id_tiket,
                'nama_pengunjung' => $this->input->post('nama_dewasa')[$i],
                'pekerjaan_pengunjung' => $this->input->post('pekerjaan_dewasa')[$i],
                'nomor_telepon' => $this->input->post('no_telpon_dewasa')[$i],
                'tipe_pengunjung' => 'Dewasa',
                'jenis_kelamin' => $this->input->post('jenis_kelamin_dewasa')[$i],
                'keperluan' => $this->input->post('keperluan'),
                'tanggal_kunjungan' => $this->input->post('tgl_kunjungan'),
                'jam_kunjungan' => $this->input->post('jam_kunjungan')
            ];
            $this->db->insert('tbl_pengunjung', $data_pengunjung);
        }

        // Menyimpan data pengunjung anak-anak
        for ($i = 0; $i < $jumlah_anak; $i++) {
            $data_pengunjung = [
                'id_tiket' => $id_tiket,
                'nama_pengunjung' => $this->input->post('nama_anak')[$i],
                'pekerjaan_pengunjung' => $this->input->post('pekerjaan_anak')[$i],
                'nomor_telepon' => '', // Anak-anak mungkin tidak memiliki nomor telepon
                'tipe_pengunjung' => 'Anak',
                'jenis_kelamin' => $this->input->post('jenis_kelamin_anak')[$i],
                'keperluan' => $this->input->post('keperluan'),
                'tanggal_kunjungan' => $this->input->post('tgl_kunjungan'),
                'jam_kunjungan' => $this->input->post('jam_kunjungan')
            ];
            $this->db->insert('tbl_pengunjung', $data_pengunjung);
        }
    }

    public function get_tikets_by_email($email) {
        $this->db->select('*');
        $this->db->from('tbl_tiket');
        $this->db->where('email', $email);
        return $this->db->get()->result_array();
    }

    public function search_by_email($email) {
        $this->db->select('*');
        $this->db->from('tbl_tiket');
        $this->db->like('email', $email);
        return $this->db->get()->result_array();
    }

    public function get_all_tikets() {
        $this->db->select('*');
        $this->db->from('tbl_tiket');
        return $this->db->get()->result_array();
    }

    public function show($keyword){
        $this->db->select('*');
        $this->db->from('v_pembayaran');
        $this->db->or_like('email',$keyword);
        $this->db->or_like('no_telpon',$keyword);
        return $this->db->get()->result_array();
    }

    public function show_payment(){
        $this->db->get('tbl_pembayaran');
        return $this->db->get()->result_array();
    }
    
    public function add_konfirmasi(){
        $filename = $this->upload->data('file_name');
        $data=[
            'kode_tiket'=>$this->input->post('kode_tiket'),
            'no_rek'=>$this->input->post('no_rek'),
            'nama_rek'=>$this->input->post('nama'),
            'tgl_tf'=>$this->input->post('tgl_tf'),
            'foto'=>$filename,    
            'status'=>0,
        ];
        $this->db->insert('tbl_pembayaran', $data);    
        $id_pembayaran = $this->db->insert_id();

        // Update id_pembayaran di tbl_tiket
        $this->db->where('kode_tiket', $this->input->post('kode_tiket'));
        $this->db->update('tbl_tiket', ['id_pembayaran' => $id_pembayaran]);
    }

    public function update_konfirmasi(){
        $data=[
            'kode_tiket'=>$this->input->post('kode_tiket'),
            'no_rek'=>$this->input->post('no_rek'),
            'nama_rek'=>$this->input->post('nama_rek'),
            'tgl_tf'=>$this->input->post('tgl_tf'),
            'foto'=>$this->input->post('foto'),
            'status'=>$this->input->post('status'),
        ];

        $this->db->where('kode_tiket',$this->input->post('kode_tiket'));
        $this->db->update('tbl_pembayaran',$data);
    }


    //=====================ADMIN PESAN================================//
    public function get_tiket_pesan(){
        $tiket=$this->db->get_where('v_pembayaran',['status'=>NULL]);
        return $tiket->result_array();
    }

    public function get_tiket_menunggu(){
        $tiket=$this->db->get_where('v_pembayaran',['status'=>0]);
        return $tiket->result_array();
    }

    public function get_tiket_ditolak(){
        $tiket=$this->db->get_where('v_pembayaran',['status'=>1]);
        return $tiket->result_array();
    }

    public function get_tiket_aktif(){
        $tiket=$this->db->get_where('v_pembayaran',['status'=>2]);
        return $tiket->result_array();
    }

    public function get_tiket_digunakan(){
        $tiket=$this->db->get_where('v_pembayaran',['status'=>3]);
        return $tiket->result_array();
    }

    // M_tiket.php (Model)
    public function getTiketById($kode_tiket){
        $this->db->select('*');
        $this->db->from('tbl_tiket');
        $this->db->where('kode_tiket', $kode_tiket);
        return $this->db->get()->row_array();
    }

    public function get_pengunjung_by_id_tiket($id_tiket) {
        $this->db->select('*');
        $this->db->from('tbl_pengunjung');
        $this->db->where('id_tiket', $id_tiket);
        return $this->db->get()->result_array();
    }
}