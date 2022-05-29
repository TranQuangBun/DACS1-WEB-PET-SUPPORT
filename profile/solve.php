<?php
   echo "HELLO";
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

    if (isset($_COOKIE['username'])) {
        $sql = "SELECT `HoTen`, `DiaChi`, `SDT`, `Email` FROM `infor` where Username = '".$_COOKIE['username']."'"; 
       
        $result = $conn->query($sql);
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // output data of each row
        echo "<h1>Họ tên : ".$row['HoTen']."</h1>";
        echo "<h1>Địa chỉ : ".$row['DiaChi']."</h1>";
        echo "<h1>SDT : ".$row['SDT']."</h1>";
        echo "<h1>Email : ".$row['Email']."</h1>";
       
    }
?>