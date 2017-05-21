$(document).ready(function(){
    $('.button-stop').click(function(){
         $.ajax({
               type: "GET",
               url: "stop.php"
             })
        $('.player').removeClass('btn-success');
        $('.player').addClass('btn-default');
    });
});

function playRadio(stationID) {
    $.ajax({
        type: "POST",
        data: {
            station: stationID
        },
        url: "play.php",
        async: true
    });

}

$(document).ready(function(){
    $('.player').click(function(){
        $('.player').removeClass('btn-success');
        $('.player').addClass('btn-default');
        $(this).removeClass('btn-default');
        $(this).addClass('btn-success');
    });
});