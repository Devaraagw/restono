<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){
        $this->load->view('User_view');

    }

    public function login(){
        $this->load->view('Login_view');

    }

    public function registrasi(){
        $this->load->view('Registrasi_view');

    }

}