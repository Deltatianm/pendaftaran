<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['admin'] = $this->Admin_model->get_admin();
        $this->load->view('layout/header');
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }

    public function create() {
        $this->load->view('layout/header');
        $this->load->view('admin/create');
        $this->load->view('layout/footer');
    }

    public function store() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/create');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email')
            );
            $this->Admin_model->add_admin($data);
            redirect('admin');
        }
    }

    public function delete($id) {
        $this->Admin_model->delete_admin($id);
        redirect('admin');
    }

    public function edit($id) {
        $data['admin'] = $this->Admin_model->get_admin_by_id($id);

        if (empty($data['admin'])) {
            show_404();
        }

        $this->load->view('layout/header');
        $this->load->view('admin/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update() {
        $id = $this->input->post('id');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $data['admin'] = $this->Admin_model->get_admin_by_id($id);
            $this->load->view('admin/edit', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email')
            );

            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $this->Admin_model->update_admin($id, $data);
            redirect('admin');
        }
    }
}
?>
