$(document).ready(function(){
    $.ajax({
        url: 'solve.php',
        type: 'GET',
        dataType: 'html',
        data: {
            
        }
    }).done(function(result){
        $('.grid-container').html(result);
    });
    $('#bt1').click(function(e){
        e.preventDefault;
        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                
            }
        }).done(function(result){
            $('.grid-container').html(result);
        });
    })

    $('#bt2').click(function(e){
        e.preventDefault;
        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                type: 'Cho'
            }
        }).done(function(result){
            $('.grid-container').html(result);
        });
    })

    $('#bt3').click(function(e){
        e.preventDefault;
        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                type: 'Meo'
            }
        }).done(function(result){
            $('.grid-container').html(result);
        });
    })
    $('#bt4').click(function(e){
        e.preventDefault;
        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                type: 'Khac'
            }
        }).done(function(result){
            $('.grid-container').html(result);
        });
    })

    $('#btn-search').click(function(e){
        $Gender = $('#gender').val();
        $name = $('#name').val();
        $Age = $('#age').val();
        $Ts = $('#ts').val();
        $Color = $('#color').val();
        arr = ["", "Cho", "Meo","Khac"];
        console.log(execute());
        e.preventDefault;
        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                type: arr[execute()-1],
                name : $name,
                gender : $Gender,
                age : $Age,
                ts : $Ts,
                color : $Color
            }
        }).done(function(result){
            $('.grid-container').html(result);
        });
    })
    // $('#btn-search').click(function(e){
    //     $Gender = $('#gender').val();
    //     e.preventDefault;
    //     $.ajax({
    //         url: 'solve.php',
    //         type: 'GET',
    //         dataType: 'html',
    //         data: {
    //             gender : $Gender
    //         }
    //     }).done(function(result){
    //         $('.grid-container').html(result);
    //     });
    // })
});