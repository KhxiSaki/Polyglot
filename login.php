<html>
    <head>
        <style>
            .margin
            {
                background-color: lightblue;
                margin-left: 10px;
                margin-right: 83%;
                border-radius: 20px;
                
            }
            .back
            {
                margin-left: 20px;
            }
            .test{
                margin-left: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Log-in Page</h1>
        <form action="" method="post" class="margin">
            <br>
            <div class="back">
                Username:<br>
                <input type="text" name="username" value=""><br>
                Password:<br>
                <input type="password" name="password" value=""><br>
                <br>
                <input type="submit" value="Login" name="submit"><br>
                <p>New here? <a href="register.php"> Click Here</a> to register!</p><br>
            </div>
        </form>
        <?php
            
            if(isset($_POST["submit"]))
            {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "student";
            
                $connect = mysqli_connect($hostname, $username, $password, $dbname) 
                OR DIE ("Connection Failed");
            
                $username = $_POST["username"];
                $pass = $_POST["password"];
            
                $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$pass' ";
            
                $sendsql = mysqli_query($connect, $sql);
            
                if($sendsql){
                    if(mysqli_num_rows($sendsql) > 0)
                    {
                        header("Location: index123.php");
                    }
                    else{
                        echo "Query Failed";
                    }
                }

            }

            

        ?>
    </body>

</html>