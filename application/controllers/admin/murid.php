<?php
defined('BASEPATH') or exit('No direct script access allowed');

class murid extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['logged'] == TRUE) {
        } else {
            $this->session->set_flashdata('message', '<div style="color : red;">Login Terlebih Dahulu</div>');
            redirect('Login');
        }

        $this->load->model('M_murid');
        $this->load->helper(array('form', 'url', 'tombol', 'add'));
        // $this->load->library('ciqrcode'); //pemanggilan library QR CODE
    }

    public function index()
    {
        $data = array(
            'title' => "Data Murid"
        );
        $this->load->view('admin/v_murid', $data);
    }


    public function setView()
    {
        $result = $this->M_murid->getSemua()->result();
        $list   = array();
        $No     = 1;
        foreach ($result as $r) {
            $row    = array(
                "no"        => $No,
                "kode"      => $r->kode,
                "nama"      => $r->nama,
                "alamat"    => $r->alamat,
                "telp"  => $r->telp,
                "jenjang"    => $r->jenjang,
                "tgllahir"     => $r->tgllahir,
                "foto"     => $r->foto,
                "action"    => tombol($r->id)
            );

            $list[] = $row;
            $No++;
        }

        echo json_encode(array('data' => $list));
    }

    public function ajax_delete($id)
    {
        $this->M_murid->delete_by_kode($id);
        echo json_encode(array("status" => TRUE));
    }



    function ajax_add()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $jenjang = $this->input->post('jenjang');
        $foto = $this->input->post('foto');
        $tgllahir = $this->input->post('tgllahir');

        $data = array(
            "kode"      => $kode,
            "nama"      => $nama,
            "telp"       => $telp,
            "alamat"      => $alamat,
            "jenjang"      => $jenjang,
            "tgllahir"      => $tgllahir,
            "foto"       => $foto

        );

        $this->M_murid->inputdata($data, 'murid');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->M_murid->edit($id);
        echo json_encode($data);
    }

    function ajax_update()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $jenjang = $this->input->post('jenjang');
        $foto = $this->input->post('foto');
        $tgllahir = $this->input->post('tgllahir');

        $data = array(
            "kode"      => $kode,
            "nama"      => $nama,
            "telp"       => $telp,
            "alamat"      => $alamat,
            "jenjang"      => $jenjang,
            "tgllahir"      => $tgllahir,
            "foto"       => $foto

        );

        $where = array(
            'id' => $id
        );

        $this->M_murid->update($where, $data);
        echo json_encode(array("status" => TRUE));
    }
}
