$(document).ready(function () {
    'use strict';
    $('.button-stop').click(function () {
        $.ajax({
            type: "GET",
            url: "stop.php"
        });
        $('.player').removeClass('btn-success');
        $('.player').addClass('btn-default');
    });
});

function playRadio(stationID) {
    'use strict';
    $.ajax({
        type: "POST",
        data: {
            station: stationID
        },
        url: "play.php",
        async: true
    });
}

$(document).ready(function () {
    'use strict';
    $('.player').click(function () {
        $('.player').removeClass('btn-success');
        $('.player').addClass('btn-default');
        $(this).removeClass('btn-default');
        $(this).addClass('btn-success');
    });
});