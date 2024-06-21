<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_guru() {
        $query = $this->db->get('guru');
        return $query->result_array();
    }

    public function add_guru($data) {
        return $this->db->insert('guru', $data);
    }

    public function delete_guru($nip) {
        $this->db->where('nip', $nip);
        return $this->db->delete('guru');
    }

    public function get_guru_by_nip($nip) {
        $query = $this->db->get_where('guru', array('nip' => $nip));
        return $query->row_array();
    }

    public function update_guru($nip, $data) {
        $this->db->where('nip', $nip);
        return $this->db->update('guru', $data);
    }
}
?>
