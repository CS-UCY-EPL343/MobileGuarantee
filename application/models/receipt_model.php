<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $query = "SELECT * FROM receipt WHERE username='giakri01'"; 
                  
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
}?>