<?php
    class Kontak extends CI_Controller {
        public $model = NULL;
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Kontak_model');
            $this->model = $this->Kontak_model;
        }

        public function index () {
            $this->load->view('templates/header');
            $this->load->view('kontak/index');
            $this->load->view('templates/footer');

            if (isset($_POST['simpan'])) {
                $this->model->setNama($this->input->post('nama'));
                $this->model->setEmail($this->input->post('email'));
                $this->model->setPesan($this->input->post('pesan'));
                $this->model->insertData();
            }
        }
    }