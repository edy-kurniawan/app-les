<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['logged'] == TRUE) {
            if ($this->session->userdata['level'] == "admin") {
                
            }else {  redirect('auth/error_page');}
        } else {
            $this->session->set_flashdata('message', '<div style="color : red;">Login Terlebih Dahulu</div>');
            redirect('Login');
        }

        $this->load->model('M_guru');
        $this->load->helper(array('form', 'url', 'tombol', 'add'));
        // $this->load->library('ciqrcode'); //pemanggilan library QR CODE
    }

    public function index()
    {
        $data = array(
            'title' => "Data Guru"
        );
        $this->load->view('admin/v_guru', $data);
    }


    public function setView()
    {
        $result = $this->M_guru->getSemua()->result();
        $list   = array();
        $No     = 1;
        foreach ($result as $r) {
            if( $r->status=="T" ) { $status = "<span class='badge badge-primary'>Diterima</span>"; }
            else if( $r->status=="F" ) { $status = "<span class='badge badge-danger'>Tidak Diterima</span>"; }
            else { $status = "<span class='badge badge-warning'>Belum divalidasi</span>"; }
            $row    = array(
                "no"        => $No,
                "kode"      => $r->kode,
                "nama"      => $r->nama,
                "telp"      => $r->telp,
                "alamat"    => $r->alamat,
                "tgllahir"  => $r->tgllahir,
                "gender"    => $r->gender,
                "mapel"     => $r->mapel,
                "lampiran"  => $r->lampiran,
                "status"    => $status,
                "action"    => tombol($r->id)
            );

            $list[] = $row;
            $No++;
        }

        echo json_encode(array('data' => $list));
    }

    public function ajax_delete($id)
    {
        $this->M_guru->delete_by_kode($id);
        echo json_encode(array("status" => TRUE));
    }



    function ajax_add()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $gender = $this->input->post('jenis');
        $mapel = $this->input->post('mapel');
        $tgllahir = $this->input->post('tgl');

            $data = array(
                "kode"      => $kode,
                "nama"      => $nama,
                "telp"      => $telp,
                "alamat"    => $alamat,
                "gender"    => $gender,
                "tgllahir"  => $tgllahir,
                "mapel"     => $mapel

            );

        $this->M_guru->inputdata($data, 'guru');
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->M_guru->edit($id);
        echo json_encode($data);
    }

    function ajax_update()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $gender = $this->input->post('jenis');
        $mapel = $this->input->post('mapel');
        $lampiran = $this->input->post('lampiran');
        $tgllahir = $this->input->post('tgl');

        $data = array(
            "kode"      => $kode,
            "nama"      => $nama,
            "telp"       => $telp,
            "alamat"      => $alamat,
            "gender"      => $gender,
            "tgllahir"      => $tgllahir,
            "lampiran"  => $lampiran,
            "mapel"       => $mapel

        );

        $where = array(
            'id' => $id
        );

        $this->M_guru->update($where, $data);
        echo json_encode(array("status" => TRUE));
    }
}
