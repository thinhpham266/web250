<?php
function login()
{
    if(!empty($_POST))
    {
        $username = $_POST['username'];
        $pwd =$_POST['pwd'];
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
       
        $query = "SELECT * FROM customer WHERE username ='".$username."' AND pwd = '".$pwd."'";
        $result = mysqli_query($conn, $query);
        $data = array();
        while($row = mysqli_fetch_array($result,1)){
           $data[] = $row;
        }
        mysqli_close($conn);
       
        if($data != null && count($data) > 0)
        {
            header("Location: index.php"); 
        }

    }
}