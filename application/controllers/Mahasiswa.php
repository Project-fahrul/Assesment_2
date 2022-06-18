<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load session, helper and model
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model("mahasiswa_model");
    }

    public function index()
    {
        //create data objeck
        $data = new stdClass();


        //set title and body class in view login
        $data->title = "Register";
        $data->body_class = 'hold-transition login-page';

        //load form helper and validation
        $this->load->helper('form');
        $this->load->library('form_validation');

        //set validation rules
        $this->form_validation->set_rules('email', "Email", "required");
        $this->form_validation->set_rules('password', "Password", "required");

        //check validation
        if ($this->form_validation->run()) {
            //check mahasiswa in database
            $mhs = $this->mahasiswa_model->checkMahasiswa($this->input->post("email"), $this->input->post("password"));

            if (count($mhs) > 0) {
                $this->session->set_userdata([
                    "nim" => $mhs->nim,
                    "email" => $mhs->email
                ]);
                redirect($this->config->config['base_url'] . "dashboard");
            }
        }

        // render view
        $this->load->view("header", $data);
        $this->load->view("login");
        $this->load->view("footer");
    }

    public function register()
    {
        $data = new stdClass();

        //set title and body class in view register
        $data->title = "Register";
        $data->body_class = 'hold-transition login-page';

        //load form helper and form validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        //set validate rules
        $this->form_validation->set_rules("nim", "Nim", "required");
        $this->form_validation->set_rules("kelas", "Kelas", "required");
        $this->form_validation->set_rules("nama", "Nama", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("repassword", "Re Password", "required|matches[password]");
        $this->form_validation->set_rules("foto", "Foto", 'trim|xss_clean');

        //load upload library
        $config['upload_path']   = $this->config->config['asset'];
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);

        //check validation form
        if ($this->input->method() == "post" && $this->form_validation->run()) {

            //check multipart form
            if ($this->upload->do_upload('foto', TRUE)) {
                $nim = $this->input->post('nim');
                $kelas    = $this->input->post('kelas');
                $nama = $this->input->post('nama');
                $email    = $this->input->post('email');
                $password = $this->input->post('password');

                //insert into data base mahasiswa
                $this->mahasiswa_model->registerMahasiswa(
                    $email,
                    $password,
                    $nama,
                    $nim,
                    $kelas,
                    $this->upload->data()["file_name"]
                );
                redirect($this->config->config['base_url'] . "mahasiswa");
            }
        }


        // call view register
        $this->load->view("header", $data);
        $this->load->view("register");
        $this->load->view("footer");
    }
}
