<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->countJurusan();
        $isi['siswa'] = $this->Model_siswa->countSiswa();
        $isi['kelas'] = $this->Model_kelas->countKelas();
        $isi['mapel'] = $this->Model_mapel->countMapel();
        $isi['ujian'] = $this->Model_ujian->countUjian();
        // Jurusan

        $isi['akl'] = $this->Model_siswa->countAKL();
        $isi['bdp'] = $this->Model_siswa->countBDP();
        $isi['otkp'] = $this->Model_siswa->countOTKP();
        $isi['tkj'] = $this->Model_siswa->countTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jurusan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->dataJurusan();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'tampilan_jurusan';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function kelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['kelas'] = $this->Model_kelas->dataKelas();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'tampilan_kelas';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['mapel'] = $this->Model_mapel->dataMapel();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'tampilan_mata_pelajaran';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswa();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'tampilan_siswa';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['ujian'] = $this->Model_ujian->jadwalUjian();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPeserta();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap'] = $this->Model_ujian->rekap_nilai();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
