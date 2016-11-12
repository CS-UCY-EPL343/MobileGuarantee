<?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "micropro");  
 $output = array();  
 $query = "SELECT * FROM receipt WHERE username='agro01'";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 
 ?>  