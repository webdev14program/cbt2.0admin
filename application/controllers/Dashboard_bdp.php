<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_bdp extends CI_Controller
{

    public function index()
    {
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        // $isi['siswaAKL'] = $this->Model_siswa->countAKL();
        // $isi['kelasAKL'] = $this->Model_kelas->countKelasAKL();
        // $isi['ujiaAKL'] = $this->Model_ujian->countUjianAKL();
        // $isi['mapel_akl'] = $this->Model_mapel->countMapelAKL();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'AKL/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('AKL/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
}
