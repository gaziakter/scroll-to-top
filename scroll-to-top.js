jQuery(document).ready(function($) {
    // Check if the user has scrolled down
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            // If yes, display the "Scroll to Top" button
            $('#scroll-to-top').fadeIn();
        } else {
            // If not, hide the button
            $('#scroll-to-top').fadeOut();
        }
    });

    // Scroll to the top when the button is clicked
    $('#scroll-to-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
