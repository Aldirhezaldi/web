<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function getProduk($id = null)
    {
        if ($id === null) {
            return $this->db->get('produk')->result_array();
        }else {
            return $this->db->get_where('produk', ['id' => $id])->result_array();
        }
    }

    public function deleteProduk($id)
    {
        $this->db->delete('produk',['id_produk' => $id]);
        return $this->db->affected_rows();
    }

    public function createProduk($data)
    {
        $this->db->insert('produk',$data);
        return $this->db->affected_rows();
    }

    public function updateProduk($data, $id)
    {
        $this->db->update('produk',$data, ['id_produk' => $id]);
        return $this->db->affected_rows();
    }

}

/* End of file Produk_model.php */
