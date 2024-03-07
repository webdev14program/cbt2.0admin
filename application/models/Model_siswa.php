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
        $sql = "SELECT COUNT(*) AS akl FROM `a_siswa`
                WHERE a_siswa.jurusan='AKL';";
        $query = $this->db->query($sql);
        return $query->row()->akl;
    }

    public function countOTKP()
    {
        $sql = "SELECT COUNT(*) AS otkp FROM `a_siswa`
                WHERE a_siswa.jurusan='mplb';";
        $query = $this->db->query($sql);
        return $query->row()->otkp;
    }

    public function countTKJ()
    {
        $sql = "SELECT COUNT(*) AS tkj FROM `a_siswa`
                WHERE a_siswa.jurusan='tjkt';";
        $query = $this->db->query($sql);
        return $query->row()->tkj;
    }

    public function countBDP()
    {
        $sql = "SELECT COUNT(*) AS bdp FROM `a_siswa`
                WHERE a_siswa.jurusan='pm';";
        $query = $this->db->query($sql);
        return $query->row()->bdp;
    }

    public function countDKV()
    {
        $sql = "SELECT COUNT(*) AS dkv FROM `a_siswa`
                WHERE a_siswa.jurusan='dkv';";
        $query = $this->db->query($sql);
        return $query->row()->dkv;
    }

    public function dataSiswa()
    {
        $sql = "SELECT a_siswa.nama_siswa,a_jurusan.jurusan,a_kelas.kelas,a_siswa.username,a_siswa.password FROM `a_siswa` 
INNER JOIN a_kelas on a_siswa.kelas=a_kelas.id 
INNER JOIN a_jurusan ON a_siswa.jurusan=a_jurusan.kode 
order by a_siswa.id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodle()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended  NOT IN (1) AND firstname not IN('ADMINISTRATOR')";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlock()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0);";
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

    public function dataSiswaMoodleAKL()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (1) AND firstname not IN('ADMINISTRATOR') AND cbt_user.lastname LIKE ('%AKL%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlockAKL()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0) AND cbt_user.lastname LIKE ('%akl%');";
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
                WHERE a_siswa.jurusan LIKE '%pm%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBDP()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (1) AND firstname not IN('ADMINISTRATOR') AND cbt_user.lastname LIKE ('%PM%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlockBDP()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0) AND cbt_user.lastname LIKE ('%pm%');";
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
                WHERE a_siswa.jurusan LIKE '%mplb%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleOTKP()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (1) AND firstname not IN('ADMINISTRATOR') AND cbt_user.lastname LIKE ('%MPLB%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlockOTKP()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0) AND cbt_user.lastname LIKE ('%MPLB%');";
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
                WHERE a_siswa.jurusan LIKE '%tjkt%'
                ORDER BY a_siswa.id ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleTKJ()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (1) AND firstname not IN('ADMINISTRATOR') AND cbt_user.lastname LIKE ('%TJKT%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlockTKJ()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0) AND cbt_user.lastname LIKE ('%TJKT%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaDKV()
    {
        $sql = "SELECT * FROM `a_siswa`
                INNER JOIN a_kelas
                on a_siswa.kelas=a_kelas.id
                INNER JOIN a_jurusan
                ON a_siswa.jurusan=a_jurusan.kode
                WHERE a_siswa.jurusan LIKE '%dkv%'
				ORDER BY a_siswa.id ASC;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleDKV()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (1) AND firstname not IN('ADMINISTRATOR') AND cbt_user.lastname LIKE ('%DKV%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaMoodleBlockDKV()
    {
        $sql = "SELECT *,
IF(suspended=0,'AKTIF','TIDAK AKTIF') AS status
FROM `cbt_user`
WHERE id NOT IN (1,2) AND suspended NOT IN (0) AND cbt_user.lastname LIKE ('%dkv%');";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function simpanSiswa($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('a_siswa', $data);
        }
    }
}
