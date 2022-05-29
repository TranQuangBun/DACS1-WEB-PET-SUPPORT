function showPassword() {
    var passwordField = $('#password_login');
    var passwordFieldType = passwordField.attr('type');
    if (passwordFieldType == 'password') {
        passwordField.attr('type', 'text');
    } else {
        passwordField.attr('type', 'password');
    }
}

function setTitle(title) {
    arr = ["Đăng nhập", "Đăng ký"]
    document.title = arr[title] + " | Help Pets";
}
$(document).ready(function(){
    $(document).ready(function(){
    
        $('#rigister').click(function(e){
        e.preventDefault;
        $Username = $('#username_rigister').val();
        $Password = $('#password_rigister_1').val();
       console.log($Username);
       console.log($Password);
        $.ajax({
            url: 'solve.php',
            type: 'POST',
            dataType: 'html',
            data: {
                username: $Username,
                password: $Password
            }
        }).done(function(result){
           
                // sessionStorage.setItem('username', $Username);
                // window.alert(sessionStorage.getItem('username'));
                //document.cookie = "username=" + $Username;
                $('.tb').html(result);
           
        });
    })      
})
$('#login').click(function(e){
    e.preventDefault;
    $Username = $('#username_login').val();
    $Password = $('#password_login').val();

    $.ajax({
        url: 'solve_login.php',
        type: 'GET',
        dataType: 'html',
        data: {
            username: $Username,
            password: $Password
        }
    }).done(function(result){
        if (result === "1"){
            // sessionStorage.setItem('username', $Username);
            // window.alert(sessionStorage.getItem('username'));
            document.cookie = "username=" + $Username +  "; path=/"
           
            window.location = "../";
        }
        else $('.tb').html(result);
    });
})
    

})
function next(){
    $Username = $('#username_rigister').val();
    document.cookie = "username_dk=" + $Username +  "; path=/"
    window.location = "../Information/index.php";

    
}
function test(){
    var pass1 = document.getElementById('password_rigister_1').value;
    var pass2 = document.getElementById('password_rigister_2').value;
    console.log ("hello");
    if(pass1!=pass2){
        $('.tb').html('mật khẩu nhập lại không đúng');
    }else{
        $('.tb').html('');
    }
}
function logout(){
    document.cookie = "username= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
}