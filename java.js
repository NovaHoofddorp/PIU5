function navigationMobiel() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        $("#navLinkMenuBoven").css("display", "block");
        $("#navLinkMenuOnder").css("display", "block");
    } else {
        x.className = "topnav";
        $("#navLinkMenuBoven").css("display", "none");
        $("#navLinkMenuOnder").css("display", "none");
    }
}

function onloadbody() {
    $('#google-maps').find('iframe').css('pointer-events', 'none');
    $(function () {
        $('#google-maps').click(function (e) {
            $(this).find('iframe').css('pointer-events', 'auto');
        }).mouseleave(function (e) {
            $(this).find('iframe').css('pointer-events', 'none');
        });
    });

    $(document).ready(function(){
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                });
            }
        });
    });

    $(window).resize(function() {
        if ($(window).width() < 1085) {
        }
        else {
            $("#navLinkMenuBoven").css("display", "none");
            $("#navLinkMenuOnder").css("display", "none");
        }
    });

}