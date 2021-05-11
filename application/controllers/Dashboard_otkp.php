<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_otkp extends CI_Controller
{

    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaOTKP'] = $this->Model_siswa->countOTKP();
        $isi['kelasOTKP'] = $this->Model_kelas->countKelasOTKP();
        $isi['ujianOTKP'] = $this->Model_ujian->countUjianOTKP();
        $isi['mapel_otkp'] = $this->Model_mapel->countMapelOTKP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_otkp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_mapel_otkp'] = $this->Model_mapel->dataMapelOTKP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/tampilan_mata_pelajaran_otkp';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_otkp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_siswa_otkp'] = $this->Model_siswa->dataSiswaOTKP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/tampilan_siswa_otkp';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian_otkp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['ujian_otkp'] = $this->Model_ujian->jadwalUjianOTKP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta_otkp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPesertaOTKP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai_otkp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap_otkp'] = $this->Model_ujian->rekap_nilai_otkp();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'OTKP/Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('OTKP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai_otkp($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }
}
