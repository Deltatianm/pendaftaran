<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header'); // ini adalah template header dan footer
        $this->load->view('dashboard'); // ini adalah bagian tengah website 
        $this->load->view('layout/footer'); // ini adalah template header dan footer
    }
}