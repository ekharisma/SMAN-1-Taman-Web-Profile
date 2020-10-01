<?php
    class Alamat extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index() {
            $this->load->view('templates/header');
            $this->load->view('alamat/index');
            $this->load->view('templates/footer');
        }
    }