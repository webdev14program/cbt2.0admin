<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_ujian extends CI_Model
{

    public function countUjian()
    {
        $sql = "SELECT COUNT(*) AS ujian FROM `cbtonline_quiz`";
        $query = $this->db->query($sql);
        return $query->row()->ujian;
    }
    public function countUjianAKL()
    {
        $sql = "SELECT COUNT(*) AS ujian_akl FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_course_categories
                ON cbtonline_course.category=cbtonline_course_categories.id
                WHERE cbtonline_course_categories.name LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_akl;
    }

    public function countUjianBDP()
    {
        $sql = "SELECT COUNT(*) AS ujian_bdp FROM `cbtonline_quiz`
                WHERE name LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_bdp;
    }

    public function countUjianOTKP()
    {
        $sql = "SELECT COUNT(*) AS ujian_otkp FROM `cbtonline_quiz`
                WHERE name LIKE '%OTKP%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_otkp;
    }

    public function countUjianTKJ()
    {
        $sql = "SELECT COUNT(*) AS ujian_tkj FROM `cbtonline_quiz`
                WHERE name LIKE '%TKJ%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_tkj;
    }

    public function jadwalUjian()
    {
        $sql = "SELECT cbtonline_quiz.course as id_course,cbtonline_course.sortorder,cbtonline_course.fullname,cbtonline_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianAKL()
    {
        $sql = "SELECT cbtonline_quiz.course as id_course,cbtonline_course.sortorder,cbtonline_course.fullname,cbtonline_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                WHERE name LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianBDP()
    {
        $sql = "SELECT cbtonline_quiz.course as id_course,cbtonline_course.sortorder,cbtonline_course.fullname,cbtonline_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                WHERE name LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianOTKP()
    {
        $sql = "SELECT cbtonline_quiz.course as id_course,cbtonline_course.sortorder,cbtonline_course.fullname,cbtonline_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                WHERE name LIKE '%OTKP%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianTKJ()
    {
        $sql = "SELECT cbtonline_quiz.course as id_course,cbtonline_course.sortorder,cbtonline_course.fullname,cbtonline_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                WHERE name LIKE '%TKJ%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPeserta()
    {
        $sql = "SELECT * FROM `cbtonline_quiz_attempts`
                INNER JOIN cbtonline_user
                on cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz_attempts.quiz=cbtonline_quiz.id
                INNER JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username  
                ORDER BY `cbtonline_quiz_attempts`.`timefinish`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaAKL()
    {
        $sql = "SELECT *, a_kelas.kelas as nama_kelas FROM `cbtonline_quiz_attempts`
                INNER JOIN cbtonline_user
                on cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz_attempts.quiz=cbtonline_quiz.id
                INNER JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username  
                INNER JOIN a_kelas
                ON a_siswa.kelas=a_kelas.id
                WHERE cbtonline_user.lastname LIKE '%AKL%'
                ORDER BY `cbtonline_quiz_attempts`.`timefinish`  ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaBDP()
    {
        $sql = "SELECT *, a_kelas.kelas as nama_kelas FROM `cbtonline_quiz_attempts`
                INNER JOIN cbtonline_user
                on cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz_attempts.quiz=cbtonline_quiz.id
                INNER JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username  
                INNER JOIN a_kelas
                ON a_siswa.kelas=a_kelas.id
                WHERE cbtonline_user.lastname LIKE '%bdp%'
                ORDER BY `cbtonline_quiz_attempts`.`timefinish`  ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaOTKP()
    {
        $sql = "SELECT *, a_kelas.kelas as nama_kelas FROM `cbtonline_quiz_attempts`
                INNER JOIN cbtonline_user
                on cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz_attempts.quiz=cbtonline_quiz.id
                INNER JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username  
                INNER JOIN a_kelas
                ON a_siswa.kelas=a_kelas.id
                WHERE cbtonline_user.lastname LIKE '%otkp%'
                ORDER BY `cbtonline_quiz_attempts`.`timefinish`  ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaTKJ()
    {
        $sql = "SELECT *, a_kelas.kelas as nama_kelas FROM `cbtonline_quiz_attempts`
                INNER JOIN cbtonline_user
                on cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz_attempts.quiz=cbtonline_quiz.id
                INNER JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username  
                INNER JOIN a_kelas
                ON a_siswa.kelas=a_kelas.id
                WHERE cbtonline_user.lastname LIKE '%tkj%'
                ORDER BY `cbtonline_quiz_attempts`.`timefinish`  ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai()
    {
        $sql = "SELECT  cbtonline_quiz.course as id_course,cbtonline_quiz.*,cbtonline_course.*,cbtonline_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                GROUP BY cbtonline_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_akl()
    {
        $sql = "SELECT  cbtonline_quiz.course as id_course,cbtonline_quiz.*,cbtonline_course.*,cbtonline_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                WHERE cbtonline_course.fullname LIKE '%AKL%'
                GROUP BY cbtonline_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_bdp()
    {
        $sql = "SELECT  cbtonline_quiz.course as id_course,cbtonline_quiz.*,cbtonline_course.*,cbtonline_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                WHERE cbtonline_course.fullname LIKE '%BDP%'
                GROUP BY cbtonline_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_otkp()
    {
        $sql = "SELECT  cbtonline_quiz.course as id_course,cbtonline_quiz.*,cbtonline_course.*,cbtonline_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                WHERE cbtonline_course.fullname LIKE '%OTKP%'
                GROUP BY cbtonline_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_tkj()
    {
        $sql = "SELECT  cbtonline_quiz.course as id_course,cbtonline_quiz.*,cbtonline_course.*,cbtonline_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbtonline_quiz`
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                WHERE cbtonline_course.fullname LIKE '%TKJ%'
                GROUP BY cbtonline_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function print_nilai_header($id_course)
    {
        $sql = "SELECT cbtonline_course.id AS id_course ,cbtonline_course.*,cbtonline_quiz_attempts.*,cbtonline_user.*,a_siswa.*,cbtonline_quiz.*,
                FROM_UNIXTIME(startdate),
                hour(FROM_UNIXTIME(startdate)) AS jam_awal,minute(FROM_UNIXTIME(startdate)) AS menit_awal,dayname(FROM_UNIXTIME(startdate)) AS hari_awal, day(FROM_UNIXTIME(startdate)) AS tanggal_awal,monthname(FROM_UNIXTIME(startdate)) AS bulan_awal,year(FROM_UNIXTIME(startdate)) AS tahun_awal,
                hour(FROM_UNIXTIME(enddate)) AS jam_akhir,minute(FROM_UNIXTIME(enddate)) AS menit_akhir,dayname(FROM_UNIXTIME(enddate)) AS hari_akhir, day(FROM_UNIXTIME(enddate)) AS tanggal_akhir,monthname(FROM_UNIXTIME(enddate)) AS bulan_akhir,year(FROM_UNIXTIME(enddate)) AS tahun_akhir
                FROM `cbtonline_course`
                INNER JOIN cbtonline_quiz
                ON cbtonline_quiz.course=cbtonline_course.id
                INNER JOIN cbtonline_quiz_attempts
                ON cbtonline_quiz.id=cbtonline_quiz_attempts.quiz
                INNER JOIN cbtonline_user
                ON cbtonline_quiz_attempts.userid=cbtonline_user.id
                INNER JOIN a_siswa
                on a_siswa.username=cbtonline_user.username
                WHERE cbtonline_quiz.course='$id_course'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function print_nilai_rekap($id_course)
    {
        $sql = "SELECT cbtonline_quiz_grades.grade as nilai,cbtonline_user.*,cbtonline_quiz.*,cbtonline_course.*,a_siswa.*,a_kelas.*,a_kelas.kelas as nama_kelas FROM `cbtonline_quiz_grades`
                INNER JOIN cbtonline_user
                ON cbtonline_quiz_grades.userid=cbtonline_user.id
                inner JOIN cbtonline_quiz
                on cbtonline_quiz_grades.quiz=cbtonline_quiz.id
                INNER JOIN cbtonline_course
                ON cbtonline_quiz.course=cbtonline_course.id
                inner JOIN a_siswa
                ON cbtonline_user.username=a_siswa.username
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                WHERE cbtonline_quiz.course='$id_course'  
                ORDER BY `a_siswa`.`kelas`  ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
