<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {  // Pastikan `CI_Controller` digunakan, bukan `CI_Model`

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load model jika diperlukan
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('User_view');
    }

    public function Login() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Ambil input dari form
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Validasi apakah user terdaftar
            $user = $this->User_model->get_user_by_email($email);

            if (!$user) {
                // Jika user tidak ditemukan
                $this->User_model->log_status("Login gagal - user belum registrasi: $email", 404);
                echo "<script>alert('Email belum terdaftar, silakan registrasi terlebih dahulu!');</script>";
                return;
            }

            // Validasi password
            if ($user['password'] !== $password) {
                // Jika password salah
                $this->User_model->log_status("Login gagal - password salah untuk email: $email", 401);
                echo "<script>alert('Password salah!');</script>";
                return;
            }

            // Jika login berhasil
            $this->User_model->log_status("Login berhasil untuk email: $email", 200);
            echo "<script>alert('Login berhasil!');</script>";

            // Redirect ke halaman user/home
            redirect('user/home');
        } else {
            // Tampilkan form login
            $this->load->view('User/Login_view');
        }
    }

    public function Registrasi() {
        // Cek jika form disubmit
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Ambil data inputan form
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');

            // Validasi jika email sudah terdaftar
            if ($this->User_model->check_email_exists($email)) {
                // Munculkan peringatan dan log jika email sudah terdaftar
                $this->User_model->log_status("Email sudah dipakai: $email", 409);
                echo "<script>alert('Email sudah dipakai!');</script>";
                return;
            }

            // Validasi panjang password
            if (strlen($password) < 5) {
                // Munculkan peringatan dan log jika password kurang dari 5 digit
                $this->User_model->log_status("Password minimal 5 digit: $password", 400);
                echo "<script>alert('Password minimal harus 5 digit!');</script>";
                return;
            }

            // Validasi jika password dan konfirmasi password sama
            if ($password !== $confirm_password) {
                // Munculkan peringatan dan log jika password tidak cocok
                $this->User_model->log_status("Password dan konfirmasi password tidak cocok", 400);
                echo "<script>alert('Password dan konfirmasi password tidak cocok!');</script>";
                return;
            }

            // Simpan data ke database jika semua validasi lulus
            $data = array(
                'email' => $email,
                'password' => $password,  // Jangan lakukan hashing jika Anda tidak menginginkan itu
                'created_at' => date('Y-m-d H:i:s')
            );

            if ($this->User_model->insert_user($data)) {
                // Log jika registrasi berhasil
                $this->User_model->log_status("Registrasi berhasil untuk email: $email", 201);

                // Redirect ke halaman home setelah registrasi sukses
                redirect('user/member/login');
            } else {
                // Jika gagal menyimpan, beri log error
                $this->User_model->log_status("Gagal registrasi untuk email: $email", 500);
                echo "<script>alert('Registrasi gagal, coba lagi!');</script>";
            }
        } else {
            // Tampilkan form registrasi jika belum ada request POST
            $this->load->view('user/registrasi_view');
        }
    }

    public function logout() {
        // Cek apakah ada sesi aktif
        if ($this->session->userdata('user_logged_in')) {
            // Simpan informasi user sebelum menghapus sesi
            $user_id = $this->session->userdata('user_id');
        
            // Log logout berhasil sebelum menghancurkan sesi
            $this->User_model->log_status("Logout berhasil untuk user ID: $user_id", 200);
        
            // Hapus semua sesi pengguna
            $this->session->sess_destroy();
        
            // Set flash data untuk menunjukkan logout berhasil
            $this->session->set_flashdata('logout_message', 'Logout berhasil. Terima kasih telah menggunakan layanan kami!');
        
            // Redirect ke halaman beranda setelah logout
            redirect('user/indeks');
        } else {
            // Log jika tidak ada sesi aktif
            $this->User_model->log_status("Logout gagal - tidak ada sesi yang aktif", 400);
        
            // Set flash data untuk menunjukkan logout gagal
            $this->session->set_flashdata('logout_message', 'Logout gagal. Tidak ada sesi yang aktif.');
        
            // Arahkan ke halaman home jika sesi tidak ditemukan
            redirect('user/home');
        }
    }
       
     
}