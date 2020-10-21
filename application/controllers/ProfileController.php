<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{


    public function index()
    {
        $data['title'] = "Halaman Profile";
        $this->load->view('templates/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
    }
}
