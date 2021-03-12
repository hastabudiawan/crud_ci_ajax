<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

function __construct()
    {
        parent::__construct();
        $this->load->model('model_karyawan');
    }

function index()
    {
        $this->load->view('index');
    }

function tampilkaryawan()
    {
        $data['hasil']=$this->model_karyawan->tampilkaryawan();
        $this->load->view('data-karyawan',$data);
    }

function tambah()
    {
        $aksi=$this->input->post('aksi');
        $this->load->view('tambah',$aksi);
    }
function simpankaryawan()
    {
        $data = array(
            'nik'=>$this->input->post('nik'),
            'nama'=>$this->input->post('nama'),
            'jabatan'=>$this->input->post('jabatan')
            );
            $this->db->insert('karyawan',$data);
    }

function edit()
    {
        $nik=$this->input->post('nik');
        $data['hasil']=$this->model_karyawan->Getnik($nik);
        $this->load->view('edit',$data);
    }
function editkaryawan()
    {
        $data = array(
            'nik'=>$this->input->post('nik_baru'),
            'nama'=>$this->input->post('nama'),
            'jabatan'=>$this->input->post('jabatan')
        );
        $nik = $this->input->post('nik_lama');
        $this->db->where('nik', $nik);
        $this->db->update('karyawan',$data);
    }

function hapus()
    {
        $nik=$this->input->post('nik');
        $data['hasil']=$this->model_karyawan->Getnik($nik);
        $this->load->view('hapus',$data);
    }
function hapuskaryawan()
    {
        $nik=$this->input->post('nik');
        $this->db->delete('karyawan',array('nik' => $nik));
    }
}
?>