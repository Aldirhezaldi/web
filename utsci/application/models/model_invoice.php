<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class model_invoice extends CI_Model {

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_mlbb = $this->input->post('id_mlbb');
        $email = $this->input->post('email');

        $invoice = array(
            'id_mlbb' => $id_mlbb,
            'email' => $email,
            'tanggal_pemesanan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        );
        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice' => $id_invoice,
                'id_produk' => $item['id'],
                'nama_produk' =>$item['name'],
                'jumlah_pesanan' => $item['qty'],
                'harga' => $item['price']
            );
            $this->db->insert('pesanan', $data);
        }
        return TRUE;
    }

    public function tampil_data() 
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() > 0) {
            return $result->result();
        }else {
            return FALSE;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id_invoice',$id_invoice)->limit(1)->get('invoice');
        if($result->num_rows() > 0) {
            return $result->row();
        }else {
            return FALSE;
        }
    }
    
    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice',$id_invoice)->get('pesanan');
        if($result->num_rows() > 0) {
            return $result->result();
        }else {
            return FALSE;
        }
    }


    public function getInvoice($id = null)
    {
        if ($id === null) {
            return $this->db->get('invoice')->result_array();
        } else {
            return $this->db->get_where('invoice', ['id_invoice' => $id])->result_array();
        }
    }

    public function deleteInvoice($id)
    {
        $this->db->delete('invoice', ['id_invoice' => $id]);
        return $this->db->affected_rows();
    }

    public function createInvoice($data)
    {
        $this->db->insert('invoice', $data);
        return $this->db->affected_rows();
    }

    public function updateInvoice($data, $id)
    {
        $this->db->update('invoice', $data, ['id_invoice' => $id]);
        return $this->db->affected_rows();
    }

}

/* End of file model_invoice.php */