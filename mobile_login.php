<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";
            
    $connect = mysqli_connect($hostname, $username, $password, $dbname) 
    OR DIE ("Connection Failed");
            
    $username = $_GET["username"];
    $pass = $_GET["password"];
            
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$pass' ";
            
    $sendsql = mysqli_query($connect, $sql);
            
    if($sendsql){
        if(mysqli_num_rows($sendsql) > 0)
            {
               echo "successfully login";
            }
            else{
                   echo "Query Failed";
            }
    }
?>