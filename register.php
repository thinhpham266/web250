<?php
function register()
{
    if(!empty($_POST)) 
    {
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
            $formtype = $_POST['formtype'];
            $servername = "us-cdbr-east-03.cleardb.com";
            $database = "heroku_74b6261186c9d5e";
            $dbusername = "b796116edff4ef";
            $password = "198109b7";
            $conn = mysqli_connect($servername, $dbusername, $password, $database);
           
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";   
            
            $query = "INSERT INTO customer (username, pwd) values ('".$username."','".$pwd."')";
            mysqli_query($conn, $query);
            
            
            
            
            mysqli_close($conn);
           header("location: loginform.php?formtype=$formtype");

    }
}