function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
jQuery(document).ready(function($) {
    document.getElementById('all').style.display = "block";

    $("#all .vehicles_details_box").slice(0, 3).show();
    $("#track .vehicles_details_box").slice(0, 3).show();
    $("#private .vehicles_details_box").slice(0, 3).show();
    $(".loadMore").on('click', function (e) {
        var type = $(this).attr("data-type");
        e.preventDefault();
        $("#" + type + " .vehicles_details_box:hidden").slice(0,3).fadeIn();
        if ($("#" + type + " .vehicles_details_box:hidden").length == 0) {
            $("#" + type + " .loadMore").fadeOut('fast');
        }
        /*$('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);*/

        var y = $(window).scrollTop();  //your current y position on the page
        $(window).scrollTop(y+320);

    });


})



