<?php
class M_Pembayaran extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_pembayaran($data)
    {
        return $this->db->insert('tbl_pembayaran', $data);
    }
}
?>