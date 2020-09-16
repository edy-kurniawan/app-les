<?php
defined('BASEPATH') or exit('No direct script access allowed');

class absensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->load->view('guru/v_absensi');
    }

}