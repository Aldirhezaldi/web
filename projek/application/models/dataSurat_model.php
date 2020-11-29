<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class dataSurat_model extends CI_Model {

    public function tampil_data() {
        return $this->db->get('surat_peminjaman');
    }    

}

/* End of file dataSurat_model.php */
