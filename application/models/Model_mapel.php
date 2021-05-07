<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_mapel extends CI_Model
{
    public function countMapel()
    {
        $sql = "SELECT COUNT(*) AS mapel FROM `cbt_course`
                WHERE format='singleactivity'";
        $query = $this->db->query($sql);
        return $query->row()->mapel;
    }

    public function countMapelAKL()
    {
        $sql = "SELECT COUNT(*) AS mapel_akl FROM `cbt_course`
                WHERE format='singleactivity' AND fullname LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->row()->mapel_akl;
    }

    public function countMapelBDP()
    {
        $sql = "SELECT COUNT(*) AS mapel_bdp FROM `cbt_course`
                WHERE format='singleactivity' AND fullname LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->row()->mapel_bdp;
    }

    public function dataMapel()
    {
        $sql = "SELECT * FROM `cbt_course`
                WHERE format='singleactivity'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataMapelAKL()
    {
        $sql = "SELECT * FROM `cbt_course`
                WHERE format='singleactivity' AND fullname LIKE '%AKL%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataMapelBDP()
    {
        $sql = "SELECT * FROM `cbt_course`
                WHERE format='singleactivity' AND fullname LIKE '%BDP%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
