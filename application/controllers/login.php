<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        //load the login model
        $this->load->model('login_model');
    }

    public function index() {


        $username = $this->input->post("txt_username");
        $password = md5($this->input->post("txt_password"));

        //set validations
        $this->form_validation->set_rules("txt_username", "Username", "trim|required");
        $this->form_validation->set_rules("txt_password", "Password", "trim|required");

        if ($this->form_validation->run() == FALSE) {
            //validation fails
            $this->load->view('login');
        } else {
            $this->load->library('session');
            //validation succeeds
            if ($this->input->post('btn_login') === "Login") {
                //check if username and password is correct
                $usr_result = $this->login_model->get_user($username, $password);
                if ($usr_result > 0) { //active user record is present

                    //set the session variables
                    $sessiondata = array(
                        'username' => $username,
                        'loginuser' => TRUE
                    );
                    $this->session->set_userdata($sessiondata);
                    if ($username == 'adminCorp') {
                        redirect("adminHome");   
                    } else {
                        redirect("home");
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                    redirect("login/index");
                }
            } else {
                redirect("login/index");
            }
        }
    }

}

?>