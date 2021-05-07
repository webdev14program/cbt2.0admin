<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_bdp extends CI_Controller
{

    public function index()
    {
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaBDP'] = $this->Model_siswa->countBDP();
        $isi['kelasBDP'] = $this->Model_kelas->countKelasBDP();
        $isi['ujiaBDP'] = $this->Model_ujian->countUjianBDP();
        $isi['mapel_bdp'] = $this->Model_mapel->countMapelBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_bdp()
    {
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_mapel_bdp'] = $this->Model_mapel->dataMapelBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_mata_pelajaran_bdp';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_bdp()
    {
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_siswa_bdp'] = $this->Model_siswa->dataSiswaBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_siswa_bdp';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function jadwal_ujian_bdp()
    {
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['ujian_bdp'] = $this->Model_ujian->jadwalUjianBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/Ujian/tampilan_ujain';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function status_peserta_bdp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->statusPesertaBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/Ujian/tampilan_status_peserta';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function rekap_nilai_bdp()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['rekap_bdp'] = $this->Model_ujian->rekap_nilai_bdp();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/Ujian/tampilan_rekap_nilai';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_nilai_bdp($id_course)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_ujian->print_nilai_header($id_course);
        $isi['rekap'] = $this->Model_ujian->print_nilai_rekap($id_course);

        $isi2['title'] = 'CBT | Administrator';
        $this->load->view('Ujian/tampilan_print_nilai', $isi);
    }
}
