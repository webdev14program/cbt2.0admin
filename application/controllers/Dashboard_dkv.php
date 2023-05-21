<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_dkv extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaDKV'] = $this->Model_siswa->countDKV();
        $isi['kelasDKV'] = $this->Model_kelas->countKelasDKV();
        $isi['ujiaDKV'] = $this->Model_ujian->countUjianDKV();
        $isi['mapel_DKV'] = $this->Model_mapel->countMapelDKV();
        $isi['ujian_hari_ini'] = $this->Model_ujian->ujian_hari_ini_DKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_dkv()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_mapel_dkv'] = $this->Model_mapel->dataMapelDKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/tampilan_mata_pelajaran_dkv';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_DKV()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_siswa_dkv'] = $this->Model_siswa->dataSiswaDKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/tampilan_siswa_DKV';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian_DKV()
    {
        $this->Model_keamanan->getKeamanan();

        $isi['ujian_dkv'] = $this->Model_ujian->jadwalUjianDKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta_DKV()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPesertaDKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function filter_status_peserta()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->FilterstatusPesertaDKV();


        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/Ujian/filter_tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai_DKV()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap_DKV'] = $this->Model_ujian->rekap_nilai_DKV();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'DKV/Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('DKV/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai_DKV($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }
}
