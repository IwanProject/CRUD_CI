<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['title'] = "Halaman Supplier";
        $data['supplier'] = $this->Supplier_model->getAllSupplier();
        $this->load->view('templates/header', $data);
        $this->load->view('supplier', $data);
        $this->load->view('templates/footer');
    }

    public function tambahSupplier()
    {
        $data['title'] = "Halaman Tambah Supplier";
        $this->load->view('templates/header', $data);
        $this->load->view('tambahSupplier', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->Supplier_model->tambahItemSupplier();
        redirect('Supplier');
    }
}
