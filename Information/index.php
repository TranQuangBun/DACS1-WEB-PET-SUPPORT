<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/acesss/css/style.css">
    <link rel="stylesheet" href="/acesss/themify-icons/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Đăng nhập | Help Pets</title>
</head>

<body>
    <div class="main">
        <!--Header-->
        <?php
            include "../menu.php";
        ?>
        <!--End Header-->

    <div class="login-wrap">
	<div class="login-html">
    <input id="tab-2" type="radio" name="tab" class="sign-up"for="tab-2" onclick="setTitle(0)" checked><label for="tab-2" class="tab">Thông tin</label>
		<!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" onclick="setTitle(1)">Đăng nhập</label> -->
		<!--   -->
		<div class="login-form">
			
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Họ và Tên</label>
					<input id="fullname" type="text" class="input">
				</div>
				<div class="group">
					<label for="address" class="label">Địa Chỉ</label>
					<input id="address" type="text" class="input" data-type="text">
				</div>
				<div class="group">
					<label for="SDT" class="label">Số điện thoại</label>
					<input id="SDT" onchange="test()" type="text" class="input" data-type="text">
				</div>
                <div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" onchange="test()" type="text" class="input" data-type="text">
				</div>
				<div class="group">
					<input type="button" class="button" id="infor" value="Hoàn thành">
				</div>
                <div class="foot-lnk">
					<h4 class="tb">Thông báo </h4>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
    </div>
</div>
</body>

</html>