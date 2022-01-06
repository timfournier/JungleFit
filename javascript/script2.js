$("#my-id").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact").offset().top},
        'slow');
});