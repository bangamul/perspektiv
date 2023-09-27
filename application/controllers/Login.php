<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('models'); //pemanggilan model mahasiswa
    }

    public function index()
    {
        $this->load->view('backend/index');
    }

    public function do_login(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $this->load->model('models');
        $this->models->cek_login($email,$password);
    }

}
