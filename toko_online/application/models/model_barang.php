<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_barang extends CI_Model
{


    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }
    public function tambah_aksi($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
