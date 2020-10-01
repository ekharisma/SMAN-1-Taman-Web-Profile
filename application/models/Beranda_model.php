<?php
    class Beranda_model extends CI_Model {
        public $user = NULL;
        public $table = 'user';
        private $username = '';
        private $password = '';
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }


        public function login ($username, $password) {
            $this->user = $this->setUserData($username);
            // var_dump($this->user);
            $isPasswordTrue = password_verify($password, $this->user['password']);
            if ($this->user) {
                if ($isPasswordTrue) {
                    return true;
                }
            }
            return false;
        }

        private function setUserData ($username) {
            $query = $this->db->get_where($this->table, array('username' => $username));
            return $query->row_array();
        }
    }