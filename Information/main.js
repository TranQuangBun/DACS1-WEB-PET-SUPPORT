function setTitle(title) {
    arr = [ "Đăng ký"]
    document.title = arr[title] + " | Help Pets";
}
function next(){
    window.location = "../";
    
}
$(document).ready(function(){
    $(document).ready(function(){
    
        $('#infor').click(function(e){
        e.preventDefault;
        // $Username = $('#username_rigister').val();
        // $Password = $('#password_rigister_1').val();
        $Fullname = $('#fullname').val();
        $Address = $('#address').val();
        $Phonenumber = $('#SDT').val();
        $Email = $('#email').val();
    //    console.log($Username);
    //    console.log($Password);
        $.ajax({
            url: 'solve.php',
            type: 'POST',
            dataType: 'html',
            data: {
                fullname: $Fullname,
                address: $Address,
                SDT:$Phonenumber,
                email:$Email
            }
        }).done(function(result){
           
                // sessionStorage.setItem('username', $Username);
                // window.alert(sessionStorage.getItem('username'));
                //document.cookie = "username=" + $Username;
                $('.tb').html(result);
           
        });
    })      
})
})