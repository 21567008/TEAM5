<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Dashboard extends CI_Controller
{
public function index()
{
    $this->load->view('templates/admin_header');
    $this->load->view('templates/topbar');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('admin/dashboard'); 
    $this->load->view('templates/admin_footer');
}
}
}
