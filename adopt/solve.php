<?php
    // echo $type;
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

    $sql = "SELECT * FROM PET where TRUE";
    if (isset($_GET["type"])&&$_GET["type"]!="") {
        if ($_GET["type"] != "Khac")
            $sql = $sql." AND Loai = '".$_GET["type"]."'";
        else{
            $sql = "SELECT * FROM PET where Loai <> 'Cho' AND Loai <> 'MEO'"; 
        }
        
    }
    if(isset($_GET["name"])){
        if(strlen ($_GET["name"]) != 0){
        $sql = $sql." AND Ten ='".$_GET["name"]."'";
        }
    }
    if(isset($_GET["gender"])){
        if($_GET["gender"]!="All")
            $sql = $sql." AND GioiTinh ='".$_GET["gender"]."'";
    }
    if(isset($_GET['age'])){
        if($_GET['age']!="All")
            $sql = $sql." AND Tuoi ='".$_GET["age"]."'";
    }
    if(isset($_GET['ts'])){
        if($_GET['ts']!="All")
            $sql = $sql." AND TrietSan ='".$_GET["ts"]."'";
    }
    if(isset($_GET['color'])){
        if($_GET['color']!="All")
            $sql = $sql." AND Mau ='".$_GET["color"]."'";
    }

        
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='item-grid'>";
            echo "<img src=".$row["HinhAnh"]." alt='' srcset=''>";
            echo "<h5>". $row["Ten"]. "</h5>";
            echo "<div class='infoPet'>";
            echo "<li><strong>  Giới tính:</strong>" . $row["GioiTinh"]. "</li>";
            echo "<li><strong>Tuổi: </strong>". $row["Tuoi"]."</li>";
            echo "<li><strong>Tiêm phòng: </strong>". $row["TiemPhong"]."</li>" ;  
            echo" </div>";
            echo"</div>";
        }
    } else {
        echo "<h1>Không có con vật cần tìm</h1>";
        // echo $sql;
    }
?>