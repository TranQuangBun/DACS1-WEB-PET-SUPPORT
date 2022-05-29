<?php

    if (isset($_COOKIE['username'])){
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
        // $Fullname = $_POST['fullname'];
        // $Address = $_POST['address'];
        // $Phonenumber = $_POST['SDT'];
        // $Email = $_POST['email'];
        $sql = "SELECT * from infor where Username ='".$_COOKIE['username']."'"; 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        }
        $html =
         "<a href='#'> ".$row['HoTen']."<i class='ti-angle-down'></i>".
        "<ul class='subcare'>".
            "<li class = 'profile'><a href='/profile/index.php'>Thông tin </a></li>".
            "<li class = 'profile'><a href='' onclick = 'logout()'> Đăng xuất </a></li>".
           
        "</ul>".
        "</a>";
    }
    else
        $html = "<a href='/login/index.php'> ĐĂNG NHẬP</a>";
    echo "<div id='header'>".
        "<img class='img-icon' src='/acesss/img/logo.png' alt='icon-dog'>".
        "<ul id='head'>".
            "<li> <a href='../'><i class='ti-home'></i> TRANG CHỦ </a></li>".
            
            "<li>".
                "<a href='/takeCare/indexTc.php'> CHĂM SÓC  <i class='ti-angle-down'></i>".
                "<ul class='subcare'>".
                    "<li><a href='/takeCare/food.php'>THỰC PHẨM </a></li>".
                    "<li><a href='/takeCare/health.php'> SỨC KHỎE </a></li>".
                    "<li><a href=''> KHÁC </a></li>".
                "</ul>".
                "</a>".
            "</li>".
            "<li><a href='/adopt/'> NHẬN NUÔI </a></li>".
            "<li><a href='/donate'> ỦNG HỘ <i class='ti-money'></i></a></li>".
        "</ul>".
        "<div class='btn login'>".
        "<ul id='DN'>".
            "<li>".
                $html.
            "</li>".
        "</ul>".
        "</div>".
    "</div>";
        echo "<script type='text/javascript'>";
        echo   "function logout(){";
        echo   "   document.cookie = 'username= ; expires = Thu, 01 Jan 1970 00:00:00 GMT';";
        echo "return 'Logout - done!'";
        echo"  }";
        echo" </script>";

?>
