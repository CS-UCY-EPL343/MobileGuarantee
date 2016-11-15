
<?php

if (!defined('BASEPATH'))    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class adminHome extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('session');
        if ($this->session->userdata('loginuser')) {
            $data = $this->session->userdata('username');
            $this->load->view('admin', $data);

           
            } else {
                //If no session, redirect to login page
                redirect('login', 'refresh');
            }
        
    }
    function logout() {
        $this->load->library('session');
        $this->session->unset_userdata('loginuser');
        session_destroy();

        //redirect('login', 'refresh');
        $this->load->view("logout_view");
    }
}