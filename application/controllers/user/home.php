<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('user/v_home', $data);
    }

}