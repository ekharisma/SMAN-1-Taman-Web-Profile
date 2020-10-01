<?php 
    class Berita_model extends CI_Model {
        private $table = 'Berita';
        private $judul;
        private $tanggal;
        private $berita;
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        private function setNewsElement () {
            return $this->db->get($this->table);
        }

        public function getNewsElement () {
            $query = $this->setNewsElement();
            return $query->result();
        }

        public function getArticle ($id) {
            $query = $this->db->get_where($this->table, array('id' => $id));
            return $query->result();
        }
    }