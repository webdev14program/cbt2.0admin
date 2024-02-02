<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_bdp extends CI_Controller
{

    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['siswaBDP'] = $this->Model_siswa->countBDP();
        $isi['kelasBDP'] = $this->Model_kelas->countKelasBDP();
        $isi['ujiaBDP'] = $this->Model_ujian->countUjianBDP();
        $isi['mapel_bdp'] = $this->Model_mapel->countMapelBDP();
        $isi['ujian_hari_ini'] = $this->Model_ujian->ujian_hari_ini_bdp();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_home';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function mata_pelajaran_bdp()
    {
        $this->Model_keamanan->getKeamanan();
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
        $this->Model_keamanan->getKeamanan();
        $isi['admin'] = $this->db->get_where('auth', ['username' => $this->session->userdata('username')])->row_array();
        $isi['data_siswa_bdp'] = $this->Model_siswa->dataSiswaBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_siswa_bdp';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_bdp_moodle()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswaMoodleBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_siswa_bdp_moodle';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function siswa_bdp_moodle_block()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswaMoodleBlockBDP();

        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/tampilan_siswa_bdp_moodle_block';
        $this->load->view('templates/header', $isi2);
        $this->load->view('BDP/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function proses_block_user()
    {
        $id = $this->input->post('id');
        $auth = $this->input->post('auth');
        $confirmed = $this->input->post('confirmed');
        $policyagreed = $this->input->post('policyagreed');
        $deleted = $this->input->post('deleted');
        $suspended = 1;
        $mnethostid = $this->input->post('mnethostid');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $idnumber = $this->input->post('idnumber');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $emailstop = $this->input->post('emailstop');
        $icq = $this->input->post('icq');
        $skype = $this->input->post('skype');
        $yahoo = $this->input->post('yahoo');
        $aim = $this->input->post('aim');
        $msn = $this->input->post('msn');
        $phone1 = $this->input->post('phone1');
        $phone2 = $this->input->post('phone2');
        $institution = $this->input->post('institution');
        $department = $this->input->post('department');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $country = $this->input->post('country');
        $lang = $this->input->post('lang');
        $calendartype = $this->input->post('calendartype');
        $theme = $this->input->post('theme');
        $timezone = $this->input->post('timezone');
        $firstaccess = $this->input->post('firstaccess');
        $lastaccess = $this->input->post('lastaccess');
        $lastlogin = $this->input->post('lastlogin');
        $currentlogin = $this->input->post('currentlogin');
        $lastip = $this->input->post('lastip');
        $secret = $this->input->post('secret');
        $picture = $this->input->post('picture');
        $url = $this->input->post('url');
        $description = $this->input->post('description');
        $descriptionformat = $this->input->post('descriptionformat');
        $mailformat = $this->input->post('mailformat');
        $maildigest = $this->input->post('maildigest');
        $maildisplay = $this->input->post('maildisplay');
        $autosubscribe = $this->input->post('autosubscribe');
        $trackforums = $this->input->post('trackforums');
        $timecreated = $this->input->post('timecreated');
        $timemodified = $this->input->post('timemodified');
        $trustbitmask = $this->input->post('trustbitmask');
        $imagealt = $this->input->post('imagealt');
        $lastnamephonetic = $this->input->post('lastnamephonetic');
        $firstnamephonetic = $this->input->post('firstnamephonetic');
        $middlename = $this->input->post('middlename');
        $alternatename = $this->input->post('alternatename');

        $data = array(
            'id' => $id,
            'auth' => $auth,
            'confirmed' => $confirmed,
            'policyagreed' => $policyagreed,
            'deleted' => $deleted,
            'suspended' => $suspended,
            'mnethostid' => $mnethostid,
            'username' => $username,
            'password' => $password,
            'idnumber' => $idnumber,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'emailstop' => $emailstop,
            'icq' => $icq,
            'skype' => $skype,
            'yahoo' => $yahoo,
            'aim' => $aim,
            'msn' => $msn,
            'phone1' => $phone1,
            'phone2' => $phone2,
            'institution' => $institution,
            'department' => $department,
            'address' => $address,
            'city' => $city,
            'country' => $country,
            'lang' => $lang,
            'calendartype' => $calendartype,
            'theme' => $theme,
            'timezone' => $timezone,
            'firstaccess' => $firstaccess,
            'lastaccess' => $lastaccess,
            'lastlogin' => $lastlogin,
            'currentlogin' => $currentlogin,
            'lastip' => $lastip,
            'secret' => $secret,
            'picture' => $picture,
            'url' => $url,
            'description' => $description,
            'descriptionformat' => $descriptionformat,
            'mailformat' => $mailformat,
            'maildigest' => $maildigest,
            'maildisplay' => $maildisplay,
            'autosubscribe' => $autosubscribe,
            'trackforums' => $trackforums,
            'timecreated' => $timecreated,
            'timemodified' => $timemodified,
            'trustbitmask' => $trustbitmask,
            'imagealt' => $imagealt,
            'lastnamephonetic' => $lastnamephonetic,
            'firstnamephonetic' => $firstnamephonetic,
            'middlename' => $middlename,
            'alternatename' => $alternatename,
        );

        $this->db->where('id', $id);
        $this->db->update('cbt_user', $data);
        redirect('Dashboard_bdp/siswa_bdp_moodle');
    }

    public function proses_unblock_user()
    {
        $id = $this->input->post('id');
        $auth = $this->input->post('auth');
        $confirmed = $this->input->post('confirmed');
        $policyagreed = $this->input->post('policyagreed');
        $deleted = $this->input->post('deleted');
        $suspended = 0;
        $mnethostid = $this->input->post('mnethostid');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $idnumber = $this->input->post('idnumber');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $emailstop = $this->input->post('emailstop');
        $icq = $this->input->post('icq');
        $skype = $this->input->post('skype');
        $yahoo = $this->input->post('yahoo');
        $aim = $this->input->post('aim');
        $msn = $this->input->post('msn');
        $phone1 = $this->input->post('phone1');
        $phone2 = $this->input->post('phone2');
        $institution = $this->input->post('institution');
        $department = $this->input->post('department');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $country = $this->input->post('country');
        $lang = $this->input->post('lang');
        $calendartype = $this->input->post('calendartype');
        $theme = $this->input->post('theme');
        $timezone = $this->input->post('timezone');
        $firstaccess = $this->input->post('firstaccess');
        $lastaccess = $this->input->post('lastaccess');
        $lastlogin = $this->input->post('lastlogin');
        $currentlogin = $this->input->post('currentlogin');
        $lastip = $this->input->post('lastip');
        $secret = $this->input->post('secret');
        $picture = $this->input->post('picture');
        $url = $this->input->post('url');
        $description = $this->input->post('description');
        $descriptionformat = $this->input->post('descriptionformat');
        $mailformat = $this->input->post('mailformat');
        $maildigest = $this->input->post('maildigest');
        $maildisplay = $this->input->post('maildisplay');
        $autosubscribe = $this->input->post('autosubscribe');
        $trackforums = $this->input->post('trackforums');
        $timecreated = $this->input->post('timecreated');
        $timemodified = $this->input->post('timemodified');
        $trustbitmask = $this->input->post('trustbitmask');
        $imagealt = $this->input->post('imagealt');
        $lastnamephonetic = $this->input->post('lastnamephonetic');
        $firstnamephonetic = $this->input->post('firstnamephonetic');
        $middlename = $this->input->post('middlename');
        $alternatename = $this->input->post('alternatename');

        $data = array(
            'id' => $id,
            'auth' => $auth,
            'confirmed' => $confirmed,
            'policyagreed' => $policyagreed,
            'deleted' => $deleted,
            'suspended' => $suspended,
            'mnethostid' => $mnethostid,
            'username' => $username,
            'password' => $password,
            'idnumber' => $idnumber,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'emailstop' => $emailstop,
            'icq' => $icq,
            'skype' => $skype,
            'yahoo' => $yahoo,
            'aim' => $aim,
            'msn' => $msn,
            'phone1' => $phone1,
            'phone2' => $phone2,
            'institution' => $institution,
            'department' => $department,
            'address' => $address,
            'city' => $city,
            'country' => $country,
            'lang' => $lang,
            'calendartype' => $calendartype,
            'theme' => $theme,
            'timezone' => $timezone,
            'firstaccess' => $firstaccess,
            'lastaccess' => $lastaccess,
            'lastlogin' => $lastlogin,
            'currentlogin' => $currentlogin,
            'lastip' => $lastip,
            'secret' => $secret,
            'picture' => $picture,
            'url' => $url,
            'description' => $description,
            'descriptionformat' => $descriptionformat,
            'mailformat' => $mailformat,
            'maildigest' => $maildigest,
            'maildisplay' => $maildisplay,
            'autosubscribe' => $autosubscribe,
            'trackforums' => $trackforums,
            'timecreated' => $timecreated,
            'timemodified' => $timemodified,
            'trustbitmask' => $trustbitmask,
            'imagealt' => $imagealt,
            'lastnamephonetic' => $lastnamephonetic,
            'firstnamephonetic' => $firstnamephonetic,
            'middlename' => $middlename,
            'alternatename' => $alternatename,
        );

        $this->db->where('id', $id);
        $this->db->update('cbt_user', $data);
        redirect('Dashboard_bdp/siswa_bdp_moodle_block');
    }

    public function jadwal_ujian_bdp()
    {
        $this->Model_keamanan->getKeamanan();
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

    public function filter_status_peserta()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['status'] = $this->Model_ujian->FilterstatusPesertaBDP();


        $isi2['title'] = 'CBT | Administrator';
        $isi['content'] = 'BDP/Ujian/filter_tampilan_status_peserta';
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
