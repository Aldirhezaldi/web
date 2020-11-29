<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_kategori extends CI_Model {

    public function data_diamond()
    {
        return $this->db->get_where('produk', array('kategori_produk' => 'Topup Diamonds'));
    }

    public function data_starlight()
    {
        return $this->db->get_where('produk', array('kategori_produk' => 'Starlight Member'));
    }

    public function data_twilight()
    {
        return $this->db->get_where('produk', array('kategori_produk' => 'Twilight Pass'));
    }


    public function getKategori($id = null)
    {
        if ($id === null) {
            return $this->db->get('kategori')->result_array();
        } else {
            return $this->db->get_where('kategori', ['id_kategori' => $id])->result_array();
        }
    }
    public function tambah_bank($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tampil_bank()
    {
        return $this->db->get('bank')->result();
    }

    public function deletekategori($id)
    {
        $this->db->delete('kategori', ['id_kategori' => $id]);
        return $this->db->affected_rows();
    }

    public function createKategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function updateKategori($data, $id)
    {
        $this->db->update('kategori', $data, ['id_kategori' => $id]);
        return $this->db->affected_rows();
    }

    public function datatable_bank()
    {
        return $this->db->order_by('id_bank', 'DESC')->get('bank');
    }
}

/* End of file model_kategori.php */