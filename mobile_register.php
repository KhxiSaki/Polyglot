<?php
    $hostname = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "polyglot";

    $connect = mysqli_connect($hostname, $username, $password, $dbname) 
    OR DIE ("Connection Failed");

    $username = $_GET["Username"];
    $pass = $_GET["Password"];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$pass' ";
 
    $sendsql = mysqli_query($connect, $sql);

    if($sendsql){
        if(mysqli_num_rows($sendsql) > 0)
        {
            echo "<h1>User already exist</h1>";
        }
        else{
            $sql2 = "INSERT INTO login(username, password) VALUES ('$username' , '$pass')";

            $sendsql2 = mysqli_query($connect, $sql2);

            if($sendsql2){
                echo "Successfully Register!";
            }
            else{
                echo "Query Failed";
            }
        }
    }else{
       echo "QUERY FAILED!";
    }

    

?>