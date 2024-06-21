<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['guru'] = $this->Guru_model->get_guru();
        $this->load->view('guru/index', $data);
    }

    public function create() {
        $this->load->view('guru/create');
    }

    public function store() {
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('guru/create');
        } else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'nama_guru' => $this->input->post('nama_guru'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat')
            );
            $this->Guru_model->add_guru($data);
            redirect('guru');
        }
    }

    public function delete($nip) {
        $this->Guru_model->delete_guru($nip);
        redirect('guru');
    }

    public function edit($nip) {
        $data['guru'] = $this->Guru_model->get_guru_by_nip($nip);

        if (empty($data['guru'])) {
            show_404();
        }

        $this->load->view('guru/edit', $data);
    }

    public function update() {
        $nip = $this->input->post('nip');

        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['guru'] = $this->Guru_model->get_guru_by_nip($nip);
            $this->load->view('guru/edit', $data);
        } else {
            $data = array(
                'nama_guru' => $this->input->post('nama_guru'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat')
            );
            $this->Guru_model->update_guru($nip, $data);
            redirect('guru');
        }
    }
}
?>
