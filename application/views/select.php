<?php

if ($this->session->userdata('loginuser')) {
            $data = $this->session->userdata('username');
        }
        $usr_result = $this->receipt_model->get_user_rec($data);
        
       
        $output[] = $usr_result->result();
        echo $output;
        echo json_encode($output);