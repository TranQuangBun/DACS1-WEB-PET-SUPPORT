$(document).ready(function(){
    console.log("kkk");
    $.ajax({
        url: 'solve.php',
        type: 'GET',
        dataType: 'html',
    }).done(function(result){
        $('.hoso').html(result);
    });
})