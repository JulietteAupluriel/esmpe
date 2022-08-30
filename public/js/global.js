$.cookieBubble({
    messageText: $('#cookieText').html(),
    buttonText: $('#cookieBtn').html(),
    cookiePolicyButtonUrl: '/legal',
});


function toResponsiveMenu() {
    let x = document.getElementById("responsive-menu");
    let y = document.getElementById("menu-burger");
    if (x.className === "responsive-menu") {
        x.className += " display";
        y.className += " cross";
    } else {
        x.className = "responsive-menu";
        y.className = "menu-burger";
    }
};


$(".bubbleLink").each(function() {
    $(this)
        .css("cursor", "pointer")
        .on('click', function(event) {
            event.preventDefault();
            window.open($(this).find('a').first().attr('href'), '_self');
        })
});

$(document).ready(function() {
    $('main').addClass('is-active')
})