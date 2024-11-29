<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan database telah dikonfigurasi di `application/config/database.php`
    }

    // Fungsi untuk menyimpan data user ke dalam database
    public function insert_user($data) {
        return $this->db->insert('users', $data); // 'users' adalah nama tabel dalam database
    }

    // Cek apakah email sudah terdaftar
    public function check_email_exists($email) {
        $query = $this->db->get_where('users', ['email' => $email]);
        return $query->num_rows() > 0;  // Jika ada baris yang ditemukan, berarti email sudah terdaftar
    }

    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', ['email' => $email]);
        return $query->row_array(); // Ambil baris data sebagai array
    }

    // Fungsi untuk mendapatkan log saat registrasi berhasil
    public function log_status($message, $status_code) {
        log_message('info', "Status Code: $status_code - $message");  // Mencatat log dengan status code
    }
}
