<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
        $query=$this->db->get('mahasiswa');
        return 
        $query->result_array();
        
    }

    public function tambahdatamhs()
    { 
        $data1 = array(
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        );
        $this->db->insert('mahasiswa', $data1);
        // $id = 
        $data2 = array(
            "id_mhs" => $this->db->insert_id(),
            "id_matkul" => $this->input->post('matkul', true),
            "id_kelas" => $this->input->post('kelas', true)
        );
        $this->db->insert('mengampu', $data2);
    }

    public function hapusdatamhs($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
        
        
    }

    public function hapusdatamengampu($id){
        $this->db->where('id_mengampu', $id);
        $this->db->delete('mengampu');    
    }

    public function getmahasiswaByID($id){
        return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
        
    }

    public function getmatkulByNama($nama){
        return $this->db->get_where('matakuliah', array('nama_matkul' => $nama))->row_array();
        
    }

    public function getkelasByNama($nama){
        return $this->db->get_where('kelas', array('nama_kelas' => $nama))->row_array();
        
    }

    public function getmengampuByID($id){
        return $this->db->get_where('mengampu', array('id_mengampu' => $id))->row_array();
        
    }

    public function ubahdatamhs(){
        $data=array(
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);   
    }
    

    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword');
        $this->db->distinct();
        $this->db->select('m.id');
        $this->db->select('mg.id_mengampu');
        $this->db->select('m.nim');
        $this->db->select('m.nama');
        $this->db->select('m.email');
        $this->db->select('m.jurusan');
        $this->db->select('mk.nama_matkul');
        $this->db->select('kl.nama_kelas');
        $this->db->from('mengampu mg');
        $this->db->join('mahasiswa m', 'm.id = mg.id_mhs', 'inner');
        $this->db->join('kelas kl', 'mg.id_kelas = kl.id_kelas', 'inner');
        $this->db->join('matakuliah mk', 'mg.id_matkul = mk.id_matkul', 'inner');
        $this->db->like('m.nama', $keyword);
        $this->db->like('m.nim', $keyword);
        $this->db->or_like('m.jurusan', $keyword);
        $this->db->or_like('mk.nama_matkul', $keyword);
        $this->db->or_like('kl.nama_kelas', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
    public function getData(){
        $this->db->select('id');
        $this->db->select('id_mengampu');
        $this->db->select('nim');
        $this->db->select('nama');
        $this->db->select('email');
        $this->db->select('jurusan');
        $this->db->select('nama_matkul');
        $this->db->select('nama_kelas');
        $this->db->from('mengampu');
        $this->db->join('mahasiswa', 'id = id_mhs', 'inner');
        $this->db->join('kelas', 'mengampu.id_kelas = kelas.id_kelas', 'inner');
        $this->db->join('matakuliah', 'mengampu.id_matkul = matakuliah.id_matkul', 'inner');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getMatkul(){
        $query = $this->db->get('matakuliah');
        return $query->result_array();
    }

    public function getKelas(){
        $query = $this->db->get('kelas');
        return $query->result_array();
    }

    public function getDataByID($id){
        $this->db->select('id');
        $this->db->select('id_mengampu');
        $this->db->select('nim');
        $this->db->select('nama');
        $this->db->select('email');
        $this->db->select('jurusan');
        $this->db->select('nama_matkul');
        $this->db->select('nama_kelas');
        $this->db->select('tahun_ajaran');
        $this->db->from('mengampu');
        $this->db->join('mahasiswa', 'id = id_mhs', 'inner');
        $this->db->join('kelas', 'mengampu.id_kelas = kelas.id_kelas', 'inner');
        $this->db->join('matakuliah', 'mengampu.id_matkul = matakuliah.id_matkul', 'inner');
        // $query=$this->db->get_where('mengampu', array('id_mengampu' => $id));
        $this->db->where('id_mengampu', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function datatables(){
        $query= $this->db->order_by('id','DESC')->get('mahasiswa');
        return $query->result();
    }

}

/* End of file ModelName.php */
?>