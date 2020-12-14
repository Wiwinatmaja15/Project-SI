<?php
class M_wisata extends CI_Model
{
    public function data_wisata()
    {
        $this->db->join('tb_jenis','tb_jenis.id_jenis=tb_wisata.id_jenis');
        $data = $this->db->get('tb_wisata')->result_array();
        return $data;
    }
    public function data_jenis()
    {
        $data = $this->db->get('tb_jenis')->result_array();
        return $data;
    }

    public function delete_wisata($key)
    {
        $this->db->where('id_wisata', $key);
        $this->db->delete('tb_wisata');
    }

    function save_registerwisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data = array(

            'nama_wisata' => $post['nama_wisata'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'gambar' => $_FILES['gambar']['name']
        );
        $this->db->insert('tb_wisata', $data);
    }


    function save_update_register_wisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data = array(

            'nama_wisata' => $post['nama_wisata'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'gambar' => $_FILES['gambar']['name']
        );
        $this->db->where('md5(id_wisata)', $post['id_wisata']);
        $this->db->update('tb_wisata', $data);
    }

    public function data_hotel()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=tb_hotel.id_jenis');

        $data = $this->db->get('tb_hotel')->result_array();
        return $data;
    }
    public function delete_hotel($key)
    {
        $this->db->where('id_hotel', $key);
        $this->db->delete('tb_hotel');
    }

    function save_registerhotel($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data = array(

            'nama_hotel' => $post['nama_hotel'],
            'id_jenis' => $post['id_jenis'],
            'gambar' => $_FILES['gambar']['name']
        );
        $this->db->insert('tb_hotel', $data);
    }


    function save_update_register_hotel($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data = array(

            'nama_hotel' => $post['nama_hotel'],
            'id_jenis' => $post['id_jenis'],
            'gambar' => $_FILES['gambar']['name']
        );
        $this->db->where('md5(id_hotel)', $post['id_hotel']);
        $this->db->update('tb_hotel', $data);
    }
}
