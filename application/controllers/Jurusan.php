<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['jurusan'] = $this->Jurusan_model->get_jurusan();
        $this->load->view('layout/header');
        $this->load->view('jurusan/index', $data);
        $this->load->view('layout/footer');
    }

    public function create() {
        $this->load->view('layout/header');
        $this->load->view('jurusan/create');
        $this->load->view('layout/footer');
    }

    public function store() {
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('jurusan/create');
        } else {
            $data = array(
                'kode' => $this->input->post('kode'),
                'nama_jurusan' => $this->input->post('nama_jurusan')
            );
            $this->Jurusan_model->add_jurusan($data);
            redirect('jurusan');
        }
    }

    public function delete($kode) {
        $this->Jurusan_model->delete_jurusan($kode);
        redirect('jurusan');
    }

    public function edit($kode) {
        $data['jurusan'] = $this->Jurusan_model->get_jurusan_by_kode($kode);

        if (empty($data['jurusan'])) {
            show_404();
        }

        $this->load->view('layout/header');
        $this->load->view('jurusan/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update() {
        $kode = $this->input->post('kode');

        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['jurusan'] = $this->Jurusan_model->get_jurusan_by_kode($kode);
            $this->load->view('jurusan/edit', $data);
        } else {
            $data = array(
                'nama_jurusan' => $this->input->post('nama_jurusan')
            );
            $this->Jurusan_model->update_jurusan($kode, $data);
            redirect('jurusan');
        }
    }
}
?>
