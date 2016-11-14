<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class infoCtrl extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('acountInfo');
    }
    
     public function information(){
        //select.php  
        $this->load->library('session');
        $connect = mysqli_connect("localhost", "root", "", "micropro");
        $output = array();
        $data=$this->session->userdata('username');
//         $query1 =   "SELECT * 
//                    FROM corporation 
//                    WHERE username='$usr' 
//                    UNION 
//                    SELECT *
//                    FROM user 
//                    WHERE username='$usr'";
//          $query1 = $this->db->query($sql);
//          
//         echo "$query1";
//        $result = mysqli_query($connect, $query1);
//        if (mysqli_num_rows($result) > 0) {
//            while ($row = mysqli_fetch_array($result)) {
//                $output2[] = $row;
//            }
//            echo json_encode($output2);
//        }
         $query = "SELECT username, email, telNumber, address FROM user WHERE username='$data' 
         UNION SELECT username, email, telNumber, address FROM corporation WHERE username='$data'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output[] = $row;
            }
            echo json_encode($output);
        }
    }
}