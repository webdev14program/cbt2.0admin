<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function countSiswa()
    {
        $sql = "SELECT COUNT(*) as siswa FROM `a_siswa`";
        $query = $this->db->query($sql);
        return $query->row()->siswa;
    }

    public function countAKL()
    {
        $sql = "SELECT COUNT(*) as akl FROM `cbtonline_user`
                WHERE lastname LIKE '%(X AKL%' OR  lastname LIKE '%(XI AKL%' OR  lastname LIKE '%(XII AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->akl;
    }

    public function countOTKP()
    {
        $sql = "SELECT COUNT(*) as otkp FROM `cbtonline_user`
                WHERE lastname LIKE '%(X OTKP%' OR  lastname LIKE '%(XI OTKP%' OR  lastname LIKE '%(XII OTKP%'";
        $query = $this->db->query($sql);
        return $query->row()->otkp;
    }

    public function countTKJ()
    {
        $sql = "SELECT COUNT(*) as tkj FROM `cbtonline_user`
                WHERE lastname LIKE '%(X TKJ%' OR  lastname LIKE '%(XI TKJ%' OR  lastname LIKE '%(XII TKJ%'";
        $query = $this->db->query($sql);
        return $query->row()->tkj;
    }

    public function countBDP()
    {
        $sql = "SELECT COUNT(*) as bdp FROM `cbtonline_user`
                WHERE lastname LIKE '%(X BDP%' OR  lastname LIKE '%(XI BDP%' OR  lastname LIKE '%(XII BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->bdp;
    }

    public function dataSiswa()
    {
        $sql = "SELECT a_siswa.*,a_kelas.*,a_jurusan.*,a_kelas.kelas AS nama_kelas FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function header_akun_siswa($id_kelas)
    {
        $sql = "SELECT a_siswa.*,a_kelas.*,a_jurusan.*,a_kelas.kelas AS nama_kelas FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.kelas='$id_kelas';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function akun_siswa($id_kelas)
    {
        $sql = "SELECT a_siswa.*,a_kelas.*,a_jurusan.*,a_kelas.kelas AS nama_kelas FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.kelas='$id_kelas';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaAKL()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.jurusan LIKE '%akl%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaBDP()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.jurusan LIKE '%bdp%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaOTKP()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.jurusan LIKE '%otkp%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaTKJ()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.jurusan LIKE '%tkj%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
