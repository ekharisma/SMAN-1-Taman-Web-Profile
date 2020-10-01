<?php 
    class Profil extends CI_Controller {
        public $model = NULL;
        public $judul = '';
        public $tanggal = '';
        public $berita = '';
        public $data;
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Berita_model');
            $this->model = $this->Berita_model;
        }

        public function index() {
            $this->data = $this->model->getNewsElement();
            $this->load->view('templates/header');
            $this->load->view('profil/index', array('data' => $this->data));
            $this->load->view('templates/footer');
        }

        public function berita($id) {
            $this->data = $this->model->getArticle($id);
            $this->load->view('templates/header');
            $this->load->view('profil/berita', array('data' => $this->data));
            $this->load->view('templates/footer');
        }
    }