<?php
require_once ('config.php');

function registerlogin()
{
    if(!empty($_POST)) 
    {
            $fullname = $_POST['fullname'];
            $pwd = $_POST['pwd'];
            $formtype = $_POST['formtype'];
       
            $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
           
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";   
            
            if($formtype == "register") //if it new user
            {
                $query = "INSERT INTO customer (fullname, pwd) values ('".$fullname."','".$pwd."')";
                mysqli_query($conn, $query);
                header("location: loginform.php");
            }
            else //if loging in  
            {
                $query = "SELECT * FROM customer WHERE fullname ='".$fullname."' AND pwd = '" .$pwd."'";
                $result = mysqli_query($conn, $query);
                $data = array();
                while($row = mysqli_fetch_array($result,1)){
                $data[] = $row;
                }
                if($data != null && count($data) > 0)
                {
                    header("Location: tp.php"); 
                }
           
            }
       
            mysqli_close($conn);

    }
}
registerlogin();