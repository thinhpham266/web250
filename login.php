<?php
function login()
{
    if(!empty($_POST))
    {
        $fullname = $_POST['fullname'];
        $pwd =$_POST['pwd'];
        $formtype = $_POST['formtype'];
        $servername = "localhost";
        $database = "db1656";
        $dbusername = "root";
        $password = "";
        $conn = mysqli_connect($servername, $dbusername, $password, $database);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
       
        $query = "SELECT * FROM student WHERE fullname ='".$fullname."' AND pwd = '".$pwd."'";
        $result = mysqli_query($conn, $query);
        $data = array();
        while($row = mysqli_fetch_array($result,1)){
           $data[] = $row;
        }
        mysqli_close($conn);
        
        if($data != null && count($data) > 0)
        {
            header("Location: ppind.php"); 
        }

    }
}
login();
?>