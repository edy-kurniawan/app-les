<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['logged'] == TRUE)
        { }
            
        else
        {
            $this->session->set_flashdata('message', '<div style="color : red;">Login Terlebih Dahulu</div>');
            redirect('Login');
        }
    }

    public function index()
    {
            if ($this->session->userdata['level'] == "admin") {
                redirect('admin/guru');
            }
            if ($this->session->userdata['level'] == "guru") {
                redirect('guru/absensi');
            }
            if ($this->session->userdata['level'] == "murid") {
                redirect('murid/absensi');
            }
    }

    public function error_page()
    {
        $this->load->view('error_page');
    }

}