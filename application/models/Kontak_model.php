<?php 
    class Kontak_model extends CI_Model {
        private $nama;
        private $email;
        private $pesan;
        private $table = 'kontak';
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function setNama ($nama) {
            $this->nama = $nama;
        }

        public function setEmail ($email) {
            $this->email = $email;
        }

        public function setPesan ($pesan) {
            $this->pesan = $pesan;
        }

        public function insertData () {
            $data = array (
                'nama' => $this->nama,
                'email' => $this->email,
                'pesan' => $this->pesan
            );
            $this->db->insert($this->table, $data);
        }
    }