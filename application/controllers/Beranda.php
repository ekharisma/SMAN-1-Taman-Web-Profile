<?php
    class Beranda extends CI_Controller {
        public $model = NULL;
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Beranda_model');
            $this->model = $this->Beranda_model;
        }

        public function index() {
            $this->load->view('templates/header');
            $this->load->view('beranda/index');
            $this->load->view('templates/footer');
            if (isset($_POST['masuk'])) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $isLogin = $this->model->login($username, $password);
                if ($isLogin) {
                    session_start();
                    $_SESSION['user'] = $this->model->user;
                    redirect( site_url('beranda/dashboard'));
                } 
            }
        }

        private function isLogin () {
            // session_start();
            if (!isset($_SESSION['user'])) redirect('beranda');
        }

        public function logout () {
            unset($_SESSION['user']);
            redirect('beranda');
        }

        private function whoLogin() {
            // session_start();
            $userIs = $_SESSION['user']['level'];
            switch ($userIs) {
                case 'admin' :
                    $this->load->view('beranda/dash_admin');
                    break;
                case 'siswa' :
                    $this->load->view('beranda/siswa/beranda');
                    break;
                case 'guru' :
                    $this->load->view('beranda/dash_guru');
                    break;
                default :
                    show_404();
            }
        }

        public function dashboard() {
            $this->isLogin();
            $this->load->view('templates/dash_header');
            $this->whoLogin();
            $this->load->view('templates/footer');
        }

        public function jadwal() {
            $this->load->view('templates/dash_header');
            $this->load->view('beranda/siswa/jadwal');
            $this->load->view('templates/footer');
        }

        public function absen() {
            $this->load->view('templates/dash_header');
            $this->load->view('beranda/siswa/absen');
            $this->load->view('templates/footer');
        }

        public function nilai() {
            $this->load->view('templates/dash_header');
            $this->load->view('beranda/siswa/nilai');
            $this->load->view('templates/footer');
        }
    }