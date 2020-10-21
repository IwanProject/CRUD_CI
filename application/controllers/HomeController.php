<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


    public function index()
    {
        $data['title'] = "Halaman Home";
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
