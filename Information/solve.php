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

 
    
     $Fullname = $_POST['fullname'];
     $Address = $_POST['address'];
     $Phonenumber = $_POST['SDT'];
     $Email = $_POST['email'];
     $sql = "INSERT INTO infor VALUES ('".$_COOKIE['username_dk']."','".$Fullname."' , '".$Address."','".$Phonenumber."','".$Email."')"; 
     
 
 if ($conn->query($sql) === TRUE) {
     // output data of each row
     echo "Đăng ký thành công";
     echo "<input onclick='next()' name='' type='button' value='Tiếp tục' id = 'tiep'>";
    
     // session_start();
     // $_SESSION['username'] = $Username;
 } else {
         echo "Mời nhạp lại";
 }
?>