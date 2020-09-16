<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_guru');
        $this->load->helper(array('form', 'url', 'tombol', 'add'));
        $this->load->library(array('form_validation','session'));
        $this->load->library('upload');
        
    }

    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('user/v_register', $data);
    }

    public function murid()
    {
        $this->load->view('user/v_register_murid');
    }

    function add_guru()
    {

        $this->form_validation->set_rules('pass','pass','trim|required');
        $this->form_validation->set_rules('pass2','pass2','trim|matches[pass]');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('message', '<br><font color="green">
                <i class="icon fa fa-times-circle"></i>
                <strong>Masukan data dengan benar !</strong></font>
              ');
            redirect('user/register');
        }
        else
        {

        $kode = $this->input->post('username');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $gender = $this->input->post('jenis');
        $mapel = $this->input->post('mapel');
        $tgllahir = $this->input->post('tgl');
        $lampiran = $this->input->post('lampiran');

            $data = array(
                "kode"      => $kode,
                "nama"      => $nama,
                "telp"      => $telp,
                "alamat"    => $alamat,
                "gender"    => $gender,
                "tgllahir"  => $tgllahir,
                "lampiran"  => $lampiran,
                "status"    => "",
                "mapel"     => $mapel
            );

            $data2 = array(
                "username"  => $kode,
                "pass"      => md5($pass),
                "level"     => "guru"
            );

        $this->M_guru->inputdata($data2, 'login');

        $this->M_guru->inputdata($data, 'guru');

        $this->session->set_flashdata('message', '<br><font color="green">
                <i class="icon fa fa-check"></i>
                <strong>Akun Berhasil Dibuat !</strong></font>
              ');

        redirect('user/register');
        }
    }

    function add_murid()
    {

        $this->form_validation->set_rules('pass','pass','trim|required');
        $this->form_validation->set_rules('pass2','pass2','trim|matches[pass]');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('message', '<br><font color="green">
                <i class="icon fa fa-times-circle"></i>
                <strong>Masukan data dengan benar !</strong></font>
              ');
            redirect('user/register/murid');
        }
        else
        {

        $kode = $this->input->post('username');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $gender = $this->input->post('jenis');
        $paket = $this->input->post('paket');
        $tgllahir = $this->input->post('tgl');

            $data = array(
                "kode"      => $kode,
                "nama"      => $nama,
                "telp"      => $telp,
                "alamat"    => $alamat,
                "gender"    => $gender,
                "tgllahir"  => $tgllahir,
                "status"    => "",
                "paket"     => $paket
            );

            if(!empty($_FILES['photo']['name']))
            {
                $upload = $this->_do_upload();
                $data['foto'] = $upload;
            } else {
                $data['foto'] = "default.jpg";
            }

            $data2 = array(
                "username"  => $kode,
                "pass"      => md5($pass),
                "level"     => "murid"
            );

        $this->M_guru->inputdata($data2, 'login');

        $this->M_guru->inputdata($data, 'murid');

        $this->session->set_flashdata('message', '<br><font color="green">
                <i class="icon fa fa-check"></i>
                <strong>Akun Berhasil Dibuat !</strong></font>
              ');

        redirect('user/register/murid');
        }
    }

    function _do_upload(){
        $config['upload_path']   = './assets/uploads/temp/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['photo']['name'])){
 
            if ($this->upload->do_upload('photo')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/uploads/temp/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/uploads/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                return $gambar;
            }
                      
        }else{
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
                 
    }

}