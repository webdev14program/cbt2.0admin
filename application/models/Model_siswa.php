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
        $sql = "SELECT COUNT(*) as akl FROM `cbt_user`
                WHERE lastname LIKE '%(X AKL%' OR  lastname LIKE '%(XI AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->akl;
    }

    public function countOTKP()
    {
        $sql = "SELECT COUNT(*) as otkp FROM `cbt_user`
                WHERE lastname LIKE '%(X OTKP%' OR  lastname LIKE '%(XI OTKP%'";
        $query = $this->db->query($sql);
        return $query->row()->otkp;
    }

    public function countTKJ()
    {
        $sql = "SELECT COUNT(*) as tkj FROM `cbt_user`
                WHERE lastname LIKE '%(X TKJ%' OR  lastname LIKE '%(XI TKJ%'";
        $query = $this->db->query($sql);
        return $query->row()->tkj;
    }

    public function countBDP()
    {
        $sql = "SELECT COUNT(*) as bdp FROM `cbt_user`
                WHERE lastname LIKE '%(X BDP%' OR  lastname LIKE '%(XI BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->bdp;
    }

    public function dataSiswa()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaAKL()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                where kelas LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
