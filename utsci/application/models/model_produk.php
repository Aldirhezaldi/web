<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_produk extends CI_Model
{

    public function getDataJoin()
    {
        $this->db->select('id_produk, id_kategori, nama_produk, kategori_produk, harga_produk, stok, foto_produk');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.nama_kategori = produk.kategori_produk', 'inner');
        $this->db->order_by('id_kategori', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_data_kategori()
    {
        return $this->db->get('kategori');
    }

    public function tampil_data_produk()
    {
        return $this->db->get('produk');
    }

    public function datatable_produk()
    {
        return $this->db->order_by('kategori_produk', 'DESC')->get('produk');
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_produk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function ambil_id_produk($id)
    {
        $hasil = $this->db->where('id_produk', $id)->get('produk');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_produk', $id)->limit(1)->get('produk');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function get_bank()
    {
        return $this->db->get('bank');
    }

    public function detail_produk($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk');
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }
}

/* End of file model_produk.php */
