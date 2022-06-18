<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $mhs = null;

    public function __construct()
    {
        parent::__construct();
        // load library session, model mahasiswa, model user and url helper
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model("mahasiswa_model");
        $this->load->model("user_model");

        //load data session
        $nim = $this->session->userdata("nim");
        $email = $this->session->userdata("email");

        //check if data session is exist
        if(!isset($nim) || !isset($email)){
            redirect($this->config->config['base_url'] . "mahasiswa");
        }

        // load data mahasiswa from database
        $this->mhs = $this->mahasiswa_model->getData($email, $nim);
        
        //check data mahasiswa if it have been set
        if(!isset($this->mhs)){
            redirect($this->config->config['base_url'] . "mahasiswa");
        }
    }

    public function getUserById($id){
        $user = $this->user_model->get_userById($id);
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                    'usernama' => $user->usernama,
                    'password' => $user->password,
                    'name' => $user->name,
                    'level' => $user->level,
                    'email' => $user->email,
            )));
    }

    public function logout(){
        $this->session->unset_userdata(["name", "email"]);
        redirect($this->config->config['base_url'] . "mahasiswa");
    }

    public function deleteUser($id)
    {
        $this->user_model->delete_user($id);
        redirect($this->config->config['base_url'] . "dashboard/user");
    }

    //method user
	public function user()
	{
        //create data objeck
        $data = new stdClass();

        //set data value
        $data->page_name = "User";
        $data->page_description = "Management";
        $data->title = "User";
        $data->body_class = 'hold-transition sidebar-mini layout-fixed';
        $data->mhs = $this->mhs;

        //load form helper and validation
        $this->load->library("form_validation");
        $this->load->helper('form');

        //set rules
        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("name", "Nme", "required");
        $this->form_validation->set_rules("level", "Level", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("act", "Action", "required");

        //run validation
        if($this->form_validation->run()){
            if($this->input->post("act") == 'edit' ){
                $this->user_model->update_user(
                    $this->input->post("id"),
                    $this->input->post("username"),
                    $this->input->post("password"),
                    $this->input->post("name"),
                    $this->input->post("level"),
                    $this->input->post("email")
                );
            }elseif($this->input->post("act") == 'add'){
                $this->user_model->insert_user(
                    $this->input->post("username"),
                    $this->input->post("password"),
                    $this->input->post("name"),
                    $this->input->post("level"),
                    $this->input->post("email")
                );
            }
            redirect($this->config->config['base_url'] . "dashboard/user");
        }

        $data->users = $this->user_model->get_user();

        //render view
        $this->load->view("header", $data);
        $this->load->view("/dashboard/contentHeader",$data);
        $this->load->view("/dashboard/user", $data);
        $this->load->view("/dashboard/contentFooter");
        $this->load->view("footer");
	}

    //method index
    public function index()
	{
        //create data objeck
        $data = new stdClass();

        //set data value
        $data->page_name = "Data Mahasiswa";
        $data->page_description = "";
        $data->title = "Dashboard";
        $data->body_class = 'hold-transition sidebar-mini layout-fixed';
        $data->mhs = $this->mhs;
        
        //render view
        $this->load->view("header", $data);
        $this->load->view("/dashboard/contentHeader",$data);
        $this->load->view("/dashboard/dashboard");
        $this->load->view("/dashboard/contentFooter");
        $this->load->view("footer");
	}
}