<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Dashboard extends CI_Controller
{
public function index()
{
    $this->load->view('templates/admin_header');
$this->load->view('admin/dashboard'); 
}
}