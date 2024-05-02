<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->library('form_validation');
        $this->load->model('M_menu');
    }

    public function index()
    {
        $data['title'] = 'My Album';
        $data['foto'] = $this->M_menu->getFoto();

        $this->load->view('home/templates/user_header', $data);
        $this->load->view('home/templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/templates/user_footer');
    }
}
