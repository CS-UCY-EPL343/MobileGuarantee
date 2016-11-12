<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class receipt_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user_rec($usr)
     {
          $sql = "SELECT receiptNo,serialNo,description,expiryDate,price "
                  . "FROM receipt "
                  . "WHERE username='$usr' "; 
                  
          $query = $this->db->query($sql);
          return $query;
     }
}