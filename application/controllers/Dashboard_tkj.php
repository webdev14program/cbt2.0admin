<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_tkj extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaTKJ'] = $this->Model_siswa->countTKJ();
        $isi['kelasTKJ'] = $this->Model_kelas->countKelasTKJ();
        $isi['ujianTKJ'] = $this->Model_ujian->countUjianTKJ();
        $isi['mapel_tkj'] = $this->Model_mapel->countMapelTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_tkj()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_mapel_tkj'] = $this->Model_mapel->dataMapelTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/tampilan_mata_pelajaran_tkj';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_tkj()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_siswa_tkj'] = $this->Model_siswa->dataSiswaTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/tampilan_siswa_tkj';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian_tkj()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['ujian_tkj'] = $this->Model_ujian->jadwalUjianTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta_tkj()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPesertaTKJ();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai_tkj()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap_tkj'] = $this->Model_ujian->rekap_nilai_tkj();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'TKJ/Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('TKJ/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai_tkj($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }
}
