<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_jurusan() {
        $query = $this->db->get('jurusan');
        return $query->result_array();
    }

    public function add_jurusan($data) {
        return $this->db->insert('jurusan', $data);
    }

    public function delete_jurusan($kode) {
        $this->db->where('kode', $kode);
        return $this->db->delete('jurusan');
    }

    public function get_jurusan_by_kode($kode) {
        $query = $this->db->get_where('jurusan', array('kode' => $kode));
        return $query->row_array();
    }

    public function update_jurusan($kode, $data) {
        $this->db->where('kode', $kode);
        return $this->db->update('jurusan', $data);
    }
}
?>
