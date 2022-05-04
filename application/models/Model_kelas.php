<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function countKelas()
    {
        $sql = "SELECT count(*) AS kelas FROM `a_kelas`";
        $query = $this->db->query($sql);
        return $query->row()->kelas;
    }

    public function countKelasAKL()
    {
        $sql = "SELECT count(*) AS kelas_akl FROM `a_kelas`
                WHERE kelas LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->kelas_akl;
    }

    public function countKelasBDP()
    {
        $sql = "SELECT count(*) AS kelas_bdp FROM `a_kelas`
                WHERE kelas LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->kelas_bdp;
    }

    public function countKelasOTKP()
    {
        $sql = "SELECT count(*) AS kelas_otkp FROM `a_kelas`
                WHERE kelas LIKE '%OTKP%'";
        $query = $this->db->query($sql);
        return $query->row()->kelas_otkp;
    }

    public function countKelasTKJ()
    {
        $sql = "SELECT count(*) AS kelas_tkj FROM `a_kelas`
                WHERE kelas LIKE '%TKJ%'";
        $query = $this->db->query($sql);
        return $query->row()->kelas_tkj;
    }

    public function dataKelasMaster()
    {
        $sql = "SELECT  a_kelas.id AS id_kelas,a_kelas.*,a_jurusan.* FROM `a_kelas`
                INNER JOIN a_jurusan
                ON a_kelas.kode=a_jurusan.kode;;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function dataKelas()
    {
        $sql = "SELECT a_kelas.id as id_kelas,a_kelas.*,a_jurusan.*,COUNT(*) AS jumlah_siswa FROM `a_siswa`
                INNER JOIN a_kelas
                ON a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_kelas.kode=a_jurusan.kode
                GROUP BY a_kelas.id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('a_kelas', $data);
        }
    }
}
