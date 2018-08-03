<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'Registration';
   $conn = mysqli_connect($host, $user, $password,$database);
   
         if(!$conn ) 
        {
            die('Could not connect: ' . mysqli_error());
        }
       // echo 'Connected successfully<br>';
  
?>
