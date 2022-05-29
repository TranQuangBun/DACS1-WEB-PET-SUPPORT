<?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DACS1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully<br>";

    if (isset($_GET["username"])) {
        $Username = $_GET['username'];
        $Password = $_GET['password'];
       
        
        $sql = "SELECT * FROM Accounts where Username = '".$Username."' AND Password = '".$Password."'"; 
        $result = $conn->query($sql);
    }
    if ($result->num_rows > 0) {
        // output data of each row
        echo "1";
        // session_start();
        // $_SESSION['username'] = $Username;
    } else {
            echo "Tài khoản hoặc mật khẩu không đúng";
    }
?>