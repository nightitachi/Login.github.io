<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "test1_db";
    $conn=  mysqli_connect($servername ,$username , $password ,$db_name );
    if($conn->connect_error){
      die("connection failed".$conn->connect_error);

    }
    else{
      
      echo"connection succesful";
    }
