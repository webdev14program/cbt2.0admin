<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_setting extends CI_Model
{
    public function identitas_sekolah()
    {
        $sql = "SELECT * FROM `a_setting`";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}
