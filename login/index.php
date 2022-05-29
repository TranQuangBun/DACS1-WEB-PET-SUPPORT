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
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" onclick="setTitle(0)">Đăng nhập</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" onclick="setTitle(1)">Đăng ký</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Tên đăng nhập</label>
					<input id="username_login" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="password_login" type="password" class="input">
				</div>
				<div class="group">
					<input onclick="showPassword()" id="check" type="checkbox" class="check">
					<label for="check"><span class="icon"></span> Hiện mật khẩu</label>
				</div>
				<div class="group">
					<input type="submit" class="button" id="login" value="Đăng nhập">
				</div>
                <div class="foot-lnk">
					<h4 class="tb">Thông báo </h4>
				</div>
				<div class="hr"></div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Tên đăng nhập</label>
					<input id="username_rigister" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="password_rigister_1" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Nhập lại mật khẩu</label>
					<input id="password_rigister_2" onchange="test()" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="button" class="button" id="rigister" value="Đăng ký">
				</div>
                <div class="foot-lnk">
					<h4 class="tb">Thông báo </h4>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
</body>

</html>