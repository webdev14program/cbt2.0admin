<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_akl extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaAKL'] = $this->Model_siswa->countAKL();
        $isi['kelasAKL'] = $this->Model_kelas->countKelasAKL();
        $isi['ujiaAKL'] = $this->Model_ujian->countUjianAKL();
        $isi['mapel_akl'] = $this->Model_mapel->countMapelAKL();
        $isi['ujian_hari_ini'] = $this->Model_ujian->ujian_hari_ini_akl();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_akl()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_mapel_akl'] = $this->Model_mapel->dataMapelAKL();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/tampilan_mata_pelajaran_akl';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_akl()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_siswa_akl'] = $this->Model_siswa->dataSiswaAKL();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/tampilan_siswa_akl';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian_akl()
    {
        $this->Model_keamanan->getKeamanan();

        $isi['ujian_akl'] = $this->Model_ujian->jadwalUjianAKL();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta_akl()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPesertaAKL();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai_akl()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap_akl'] = $this->Model_ujian->rekap_nilai_akl();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai_akl($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }
}
