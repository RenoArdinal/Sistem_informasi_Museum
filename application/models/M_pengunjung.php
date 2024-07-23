<?php
class M_pengunjung extends CI_Model{

	function statistik_pengujung(){
        $query = $this->db->query("SELECT DATE_FORMAT(tanggal_kunjungan,'%d') AS tgl,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(tanggal_kunjungan)=MONTH(CURDATE()) GROUP BY DATE(tanggal_kunjungan)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_all_pengunjung() {
        $query = $this->db->get('tbl_pengunjung');
        return $query->result_array();
    }
	
}