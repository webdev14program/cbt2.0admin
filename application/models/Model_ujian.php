<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_ujian extends CI_Model
{

    public function countUjian()
    {
        $sql = "SELECT COUNT(*) AS ujian FROM `cbt_quiz`";
        $query = $this->db->query($sql);
        return $query->row()->ujian;
    }
    public function countUjianAKL()
    {
        $sql = "SELECT COUNT(*) AS ujian_akl FROM `cbt_quiz`
                WHERE name LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_akl;
    }

    public function countUjianBDP()
    {
        $sql = "SELECT COUNT(*) AS ujian_bdp FROM `cbt_quiz`
                WHERE name LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_bdp;
    }

    public function countUjianOTKP()
    {
        $sql = "SELECT COUNT(*) AS ujian_otkp FROM `cbt_quiz`
                WHERE name LIKE '%OTKP%'";
        $query = $this->db->query($sql);
        return $query->row()->ujian_otkp;
    }

    public function jadwalUjian()
    {
        $sql = "SELECT cbt_quiz.course as id_course,cbt_course.sortorder,cbt_course.fullname,cbt_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianAKL()
    {
        $sql = "SELECT cbt_quiz.course as id_course,cbt_course.sortorder,cbt_course.fullname,cbt_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                WHERE name LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianBDP()
    {
        $sql = "SELECT cbt_quiz.course as id_course,cbt_course.sortorder,cbt_course.fullname,cbt_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                WHERE name LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function jadwalUjianOTKP()
    {
        $sql = "SELECT cbt_quiz.course as id_course,cbt_course.sortorder,cbt_course.fullname,cbt_course.shortname,name,timelimit,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                hour(FROM_UNIXTIME(timeopen)) as jam_awal,minute(FROM_UNIXTIME(timeopen)) as menit_awal,
                hour(FROM_UNIXTIME(timeclose)) as jam_akhir,minute(FROM_UNIXTIME(timeclose)) as menit_akhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                WHERE name LIKE '%OTKP%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPeserta()
    {
        $sql = "SELECT * FROM `cbt_quiz_attempts`
                INNER JOIN cbt_user
                on cbt_quiz_attempts.userid=cbt_user.id
                INNER JOIN cbt_quiz
                ON cbt_quiz_attempts.quiz=cbt_quiz.id
                INNER JOIN a_siswa
                ON cbt_user.username=a_siswa.username  
                ORDER BY `cbt_quiz_attempts`.`timefinish`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaAKL()
    {
        $sql = "SELECT * FROM `cbt_quiz_attempts`
                INNER JOIN cbt_user
                on cbt_quiz_attempts.userid=cbt_user.id
                INNER JOIN cbt_quiz
                ON cbt_quiz_attempts.quiz=cbt_quiz.id
                INNER JOIN a_siswa
                ON cbt_user.username=a_siswa.username  
                WHERE cbt_user.lastname LIKE '%AKL%'
                ORDER BY `cbt_quiz_attempts`.`timefinish`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaBDP()
    {
        $sql = "SELECT * FROM `cbt_quiz_attempts`
                INNER JOIN cbt_user
                on cbt_quiz_attempts.userid=cbt_user.id
                INNER JOIN cbt_quiz
                ON cbt_quiz_attempts.quiz=cbt_quiz.id
                INNER JOIN a_siswa
                ON cbt_user.username=a_siswa.username  
                WHERE cbt_user.lastname LIKE '%BDP%'
                ORDER BY `cbt_quiz_attempts`.`timefinish`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function statusPesertaOTKP()
    {
        $sql = "SELECT * FROM `cbt_quiz_attempts`
                INNER JOIN cbt_user
                on cbt_quiz_attempts.userid=cbt_user.id
                INNER JOIN cbt_quiz
                ON cbt_quiz_attempts.quiz=cbt_quiz.id
                INNER JOIN a_siswa
                ON cbt_user.username=a_siswa.username  
                WHERE cbt_user.lastname LIKE '%OTKP%'
                ORDER BY `cbt_quiz_attempts`.`timefinish`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai()
    {
        $sql = "SELECT  cbt_quiz.course as id_course,cbt_quiz.*,cbt_course.*,cbt_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                INNER JOIN cbt_quiz_attempts
                ON cbt_quiz.id=cbt_quiz_attempts.quiz
                GROUP BY cbt_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_akl()
    {
        $sql = "SELECT  cbt_quiz.course as id_course,cbt_quiz.*,cbt_course.*,cbt_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                INNER JOIN cbt_quiz_attempts
                ON cbt_quiz.id=cbt_quiz_attempts.quiz
                WHERE cbt_course.fullname LIKE '%AKL%'
                GROUP BY cbt_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_bdp()
    {
        $sql = "SELECT  cbt_quiz.course as id_course,cbt_quiz.*,cbt_course.*,cbt_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                INNER JOIN cbt_quiz_attempts
                ON cbt_quiz.id=cbt_quiz_attempts.quiz
                WHERE cbt_course.fullname LIKE '%BDP%'
                GROUP BY cbt_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function rekap_nilai_otkp()
    {
        $sql = "SELECT  cbt_quiz.course as id_course,cbt_quiz.*,cbt_course.*,cbt_quiz_attempts.*,
                FROM_UNIXTIME(timeopen) AS timeopen, dayname(FROM_UNIXTIME(timeopen)) AS harimulai, day(FROM_UNIXTIME(timeopen)) AS taggalmulai, monthname(FROM_UNIXTIME(timeopen)) AS bulanmulai, year(FROM_UNIXTIME(timeopen)) AS tahunmulai,
                FROM_UNIXTIME(timeclose) AS timeclose, dayname(FROM_UNIXTIME(timeclose)) AS hariakhir, day(FROM_UNIXTIME(timeclose)) AS taggalakhir, monthname(FROM_UNIXTIME(timeclose)) AS bulanakhir, year(FROM_UNIXTIME(timeclose)) AS tahunakhir,
                hour( FROM_UNIXTIME(timeopen)) AS jamAwal,minute( FROM_UNIXTIME(timeopen)) menitAwal,
                hour(FROM_UNIXTIME(timeclose)) AS jamAkhir, minute(FROM_UNIXTIME(timeclose)) AS menitAkhir
                FROM `cbt_quiz`
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                INNER JOIN cbt_quiz_attempts
                ON cbt_quiz.id=cbt_quiz_attempts.quiz
                WHERE cbt_course.fullname LIKE '%OTKP%'
                GROUP BY cbt_quiz.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function print_nilai_header($id_course)
    {
        $sql = "SELECT cbt_course.id AS id_course ,cbt_course.*,cbt_quiz_attempts.*,cbt_user.*,a_siswa.*,cbt_quiz.*,
                FROM_UNIXTIME(startdate),
                hour(FROM_UNIXTIME(startdate)) AS jam_awal,minute(FROM_UNIXTIME(startdate)) AS menit_awal,dayname(FROM_UNIXTIME(startdate)) AS hari_awal, day(FROM_UNIXTIME(startdate)) AS tanggal_awal,monthname(FROM_UNIXTIME(startdate)) AS bulan_awal,year(FROM_UNIXTIME(startdate)) AS tahun_awal,
                hour(FROM_UNIXTIME(enddate)) AS jam_akhir,minute(FROM_UNIXTIME(enddate)) AS menit_akhir,dayname(FROM_UNIXTIME(enddate)) AS hari_akhir, day(FROM_UNIXTIME(enddate)) AS tanggal_akhir,monthname(FROM_UNIXTIME(enddate)) AS bulan_akhir,year(FROM_UNIXTIME(enddate)) AS tahun_akhir
                FROM `cbt_course`
                INNER JOIN cbt_quiz
                ON cbt_quiz.course=cbt_course.id
                INNER JOIN cbt_quiz_attempts
                ON cbt_quiz.id=cbt_quiz_attempts.quiz
                INNER JOIN cbt_user
                ON cbt_quiz_attempts.userid=cbt_user.id
                INNER JOIN a_siswa
                on a_siswa.username=cbt_user.username
                WHERE cbt_quiz.course='$id_course'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function print_nilai_rekap($id_course)
    {
        $sql = "SELECT cbt_quiz_grades.grade as nilai,cbt_user.*,cbt_quiz.*,cbt_course.*,a_siswa.* FROM `cbt_quiz_grades`
                INNER JOIN cbt_user
                ON cbt_quiz_grades.userid=cbt_user.id
                inner JOIN cbt_quiz
                on cbt_quiz_grades.quiz=cbt_quiz.id
                INNER JOIN cbt_course
                ON cbt_quiz.course=cbt_course.id
                inner JOIN a_siswa
                ON cbt_user.username=a_siswa.username
                WHERE cbt_quiz.course='$id_course'  
                ORDER BY `a_siswa`.`kelas`  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
