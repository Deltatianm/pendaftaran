<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['siswa'] = $this->Siswa_model->get_siswa();
        $this->load->view('siswa/index', $data);
    }

    public function create() {
        $this->load->view('siswa/create');
    }

    public function store() {
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('siswa/create');
        } else {
            $data = array(
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            );
            $this->Siswa_model->add_siswa($data);
            redirect('siswa');
        }
    }

    public function delete($nis) {
        $this->Siswa_model->delete_siswa($nis);
        redirect('siswa');
    }

    public function edit($nis) {
        $data['siswa'] = $this->Siswa_model->get_siswa_by_nis($nis);

        if (empty($data['siswa'])) {
            show_404();
        }

        $this->load->view('siswa/edit', $data);
    }

    public function update() {
        $nis = $this->input->post('nis');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['siswa'] = $this->Siswa_model->get_siswa_by_nis($nis);
            $this->load->view('siswa/edit', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            );
            $this->Siswa_model->update_siswa($nis, $data);
            redirect('siswa');
        }
    }
}
?>
