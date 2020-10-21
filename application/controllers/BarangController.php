<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }


    public function index()
    {
        $data['title'] = "Halaman Barang";
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('barang', $data);
        $this->load->view('templates/footer');
    }



    public function tambahBarang()
    {
        $data['title'] = "Halaman Tambah Barang";
        $this->load->view('templates/header', $data);
        $this->load->view('tambahBarang', $data);
        $this->load->view('templates/footer');
    }


    public function upload()
    {

        $no_barcode = $this->input->post('no_barcode');
        $nama_obat = $this->input->post('nama_obat');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');
        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['max_size'] = '12048';
        }


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            echo "gambar gagal di upload";
        } else {
            $gambar = $this->upload->data('file_name');
        }

        $this->Barang_model->insert(array(
            'no_barcode' => $no_barcode,
            'nama_obat' => $nama_obat,
            'harga' => $harga,
            'stock' => $stock,
            'gambar' => $gambar,
        ));
        redirect('Barang');
    }
}
