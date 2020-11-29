<?php

defined('BASEPATH') or exit('No direct script access allowed');

class undangan_model extends CI_Model
{

    public function tampil_data_undangan()
    {
        return $this->db->get('surat_undangan');
    }

    public function getundanganByID($id_undang)
    {
        return $this->db->get_where('surat_undangan', array('id_undang' => $id_undang))->row_array();
    }

    public function hapusdataund($id_undang)
    {
        $this->db->where('id_undang', $id_undang);
        $this->db->delete('surat_undangan');
    }
    public function tambahdataund()
    {
        $data = array(
            "id_user_und" => $this->input->post('id_user_und', true),
            "id_organisasi_und" => $this->input->post('id_organisasi_und', true),
            "id_kategori" => $this->input->post('id_kategori', true),
            "no_surat_und" => $this->input->post('no_surat_und', true),
            "tgl_buat_srt_und" => $this->input->post('tgl_buat_srt_und', true),
            "lampiran_und" => $this->input->post('lampiran_und', true),
            "perihal_und" => $this->input->post('perihal_und', true),
            "kepada_und" => $this->input->post('kepada_und', true),
            "kegiatan_und" => $this->input->post('kegiatan_und', true),
            "tema_und" => $this->input->post('tema_und', true),
            "hari_und" => $this->input->post('hari_und', true),
            "pukul_und" => $this->input->post('pukul_und', true),
            "tanggal_und" => $this->input->post('tanggal_und', true),
            "tempat_und" => $this->input->post('tempat_und', true),
            "kapel_und" => $this->input->post('kapel_und', true),
            "nim_und" => $this->input->post('nim_und', true)
        );
        return $this->db->insert('surat_undangan', $data);
    }
    public function ubahdataund()
    {
        $data = [
            "no_surat_und" => $this->input->post('no_surat_und', true),
            "tgl_buat_srt_und" => $this->input->post('tgl_buat_srt_und', true),
            "lampiran_und" => $this->input->post('lampiran_und', true),
            "perihal_und" => $this->input->post('perihal_und', true),
            "kepada_und" => $this->input->post('kepada_und', true),
            "kegiatan_und" => $this->input->post('kegiatan_und', true),
            "tema_und" => $this->input->post('tema_und', true),
            "hari_und" => $this->input->post('hari_und', true),
            "pukul_und" => $this->input->post('pukul_und', true),
            "tanggal_und" => $this->input->post('tanggal_und', true),
            "tempat_und" => $this->input->post('tempat_und', true),
            "kapel_und" => $this->input->post('kapel_und', true),
            "nim_und" => $this->input->post('nim_und', true)
        ];
        $this->db->where('id_undang', $this->input->post('id_undang'));
        $this->db->update('surat_undangan', $data);
    }
}

/* End of file undangan_model.php */
