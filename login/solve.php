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

 
     $Username = $_POST['username'];
     $Password = $_POST['password'];
     $sql = "INSERT INTO Accounts VALUES ('".$Username."' , '".$Password."')"; 
     
 
 if ($conn->query($sql) === TRUE) {
     // output data of each row
     echo "Đăng ký thành công";
     echo "<input onclick='next()' name='' type='button' value='Tiếp tục' id = 'tiep'>";
    
     // session_start();
     // $_SESSION['username'] = $Username;
 } else {
         echo "Tài khoản đã tồn tại";
 }
?>