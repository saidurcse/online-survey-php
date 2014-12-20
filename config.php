<?php
    $host="localhost"; // Host name 
    $username="root"; // Mysql username
    $password=""; // Mysql password  
    $db_name="survey"; // Database name  


     $con=mysqli_connect($host, $username, $password,$db_name)or die("cannot   connect");

     if (mysqli_connect_errno())
     {
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }                                        
?> 

