
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 //we need to call PHP's session object to access it through CI

class ContactC extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->view('Contact_Us');
    }

}
