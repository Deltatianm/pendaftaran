<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['kelas'] = $this->Kelas_model->get_kelas();
        $this->load->view('layout/header');
        $this->load->view('kelas/index', $data);
        $this->load->view('layout/footer');
    }

    public function create() {
        $this->load->view('kelas/create');
    }

    public function store() {
        $this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'required');
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('kelas/create');
        } else {
            $data = array(
                'kode_kelas' => $this->input->post('kode_kelas'),
                'nama_kelas' => $this->input->post('nama_kelas'),
                'kapasitas' => $this->input->post('kapasitas')
            );
            $this->Kelas_model->add_kelas($data);
            redirect('kelas');
        }
    }

    public function delete($kode_kelas) {
        $this->Kelas_model->delete_kelas($kode_kelas);
        redirect('kelas');
    }

    public function edit($kode_kelas) {
        $data['kelas'] = $this->Kelas_model->get_kelas_by_kode($kode_kelas);

        if (empty($data['kelas'])) {
            show_404();
        }

        $this->load->view('kelas/edit', $data);
    }

    public function update() {
        $kode_kelas = $this->input->post('kode_kelas');

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['kelas'] = $this->Kelas_model->get_kelas_by_kode($kode_kelas);
            $this->load->view('kelas/edit', $data);
        } else {
            $data = array(
                'nama_kelas' => $this->input->post('nama_kelas'),
                'kapasitas' => $this->input->post('kapasitas')
            );
            $this->Kelas_model->update_kelas($kode_kelas, $data);
            redirect('kelas');
        }
    }
}
?>
