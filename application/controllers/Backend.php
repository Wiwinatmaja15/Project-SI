<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_wisata');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }

    function daftar_wisata()
    {
        $data['title'] = "Data Wisata";
        $config['base_url'] = site_url('Backend/daftar_wisata');
        $data['tb_wisata'] = $this->M_wisata->data_wisata();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/daftar_wisata', $data);
        $this->load->view('template/footer');
    }
    public function delete_wisata()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_wisata', $key);
        $query = $this->db->get('tb_wisata');
        if ($query->num_rows() > 0) {
            $this->M_wisata->delete_wisata($key);
        }
        redirect('Backend/daftar_wisata');
    }
    public function register_wisata()
    {
        $data['title'] = "Register Data Wisata";
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('template/footer');
    }
    public function update_register_wisata($id_wisata)
    {
        $data['title'] = "Registrasi Data Wisata";
        $this->db->where('md5(id_wisata)', $id_wisata);
        $data['id_wisata'] = $this->db->get('tb_wisata')->row_array();
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('template/footer');
    }
    function save_register_wisata()
    {
        if ($_POST['id_wisata'] != '') {
            $this->M_wisata->save_update_register_wisata($_POST);
        } else {
            $this->M_wisata->save_registerwisata($_POST);
        }
        redirect('Backend/daftar_wisata');
    }



    function daftar_hotel()
    {
        $data['title'] = "Data Hotel";
        $config['base_url'] = site_url('Backend/daftar_hotel');
        $data['tb_hotel'] = $this->M_wisata->data_hotel();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/daftar_hotel', $data);
        $this->load->view('template/footer');
    }
    public function delete_hotel()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_hotel', $key);
        $query = $this->db->get('tb_hotel');
        if ($query->num_rows() > 0) {
            $this->M_wisata->delete_hotel($key);
        }
        redirect('Backend/daftar_hotel');
    }
    public function register_hotel()
    {
        $data['title'] = "Register Data Home Stay";
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_hotel', $data);
        $this->load->view('template/footer');
    }
    public function update_register_hotel($id_hotel)
    {
        $data['title'] = "Registrasi Data Hotel";
        $this->db->where('md5(id_hotel)', $id_hotel);
        $data['id_hotel'] = $this->db->get('tb_hotel')->row_array();
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_hotel', $data);
        $this->load->view('template/footer');
    }
    function save_register_hotel()
    {
        if ($_POST['id_hotel'] != '') {
            $this->M_wisata->save_update_register_hotel($_POST);
        } else {
            $this->M_wisata->save_registerhotel($_POST);
        }
        redirect('Backend/daftar_hotel');
    }
}
