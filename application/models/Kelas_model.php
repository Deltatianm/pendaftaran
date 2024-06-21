<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_kelas() {
        $query = $this->db->get('kelas');
        return $query->result_array();
    }

    public function add_kelas($data) {
        return $this->db->insert('kelas', $data);
    }

    public function delete_kelas($kode_kelas) {
        $this->db->where('kode_kelas', $kode_kelas);
        return $this->db->delete('kelas');
    }

    public function get_kelas_by_kode($kode_kelas) {
        $query = $this->db->get_where('kelas', array('kode_kelas' => $kode_kelas));
        return $query->row_array();
    }

    public function update_kelas($kode_kelas, $data) {
        $this->db->where('kode_kelas', $kode_kelas);
        return $this->db->update('kelas', $data);
    }
}
?>
