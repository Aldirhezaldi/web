<?php

defined('BASEPATH') or exit('No direct script access allowed');

class peminjaman_model extends CI_Model
{

    public function getAllpeminjaman()
    {
        return $this->db->get('surat_peminjaman');
    }

    public function getpeminjamanByID($id_pinjam)
    {
        return $this->db->get_where('surat_peminjaman', array('id_pinjam' => $id_pinjam))->row_array();
    }

    public function getKategori()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    public function tambahdatapjm()
    {
        $data = array(
            "no_surat_pjm" => $this->input->post('no_surat_pjm', true),
            "tgl_buat_srt_pjm" => $this->input->post('tgl_buat_srt_pjm', true),
            "lampiran_pjm" => $this->input->post('lampiran_pjm', true),
            "perihal_pjm" => $this->input->post('perihal_pjm', true),
            "kepada_pjm" => $this->input->post('kepada_pjm', true),
            "kegiatan_pjm" => $this->input->post('kegiatan_pjm', true),
            "tema_pjm" => $this->input->post('tema_pjm', true),
            "pinjam" => $this->input->post('pinjam', true),
            "hari_pjm" => $this->input->post('hari_pjm', true),
            "pukul_pjm" => $this->input->post('pukul_pjm', true),
            "kapel_pjm" => $this->input->post('kapel_pjm', true),
            "nim_pjm" => $this->input->post('nim_pjm', true),
            "nip_kajur_pjm" => $this->input->post('nip_kajur_pjm', true),
            "tembusan_pjm" => $this->input->post('tembusan_pjm', true)
        );
        $this->db->insert('surat_peminjaman', $data);
    }

    public function tambahdatakategori()
    {
        $data2 = array(
            "nama_kategori" => $this->input->post('nama_kategori', true)
        );
        $this->db->insert('kategori', $data2);
    }

    public function hapusdatapjm($id_pinjam)
    {
        $this->db->where('id_pinjam', $id_pinjam);
        $this->db->delete('surat_peminjaman');
    }

    public function view()
    {

        $this->db->select('no_surat_pjm, tgl_buat_srt_pjm, perihal_pjm, pinjam');
        $query = $this->db->get('surat_peminjaman');
        return $query->result();
    }

    // public function getKategori()
    // {
    //     return $this->db->get('nama_kategori');

    // }

}

/* End of file peminjaman_model.php */
