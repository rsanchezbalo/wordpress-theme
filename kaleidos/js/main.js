( function( $ ) {
    console.log('loaded');

    //SearchBox
    $('.button-submit').on('click', function() {
        $(this).siblings('.search-submit').click();
    });

    $(window).scroll(function() {
        /* Parallax */
        var $window = $(window);
        var $bgobj = $('.site-branding-bg');
        var wPos = $window.scrollTop();
        var yPos = -($window.scrollTop() / $bgobj.data('speed'));
        var coords = '50% '+ yPos + 'px';
        $bgobj.css({ backgroundPosition: coords });

        /* Search fixed */
        if (wPos > 370) {
            console.log(true);
            $('.main-navigation').css({
                'position' : 'fixed',
                'top' : '0',
                'opacity' : 0.9,
                'z-index' : 99
            });
        } else {
            console.log(false);
            $('.main-navigation').removeAttr('style');
        }
    });
    var get_tweet = function() {
        console.log('Tweet!');
        $.getJSON("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=kaleidosnet&count=1", function(data) {
            $(".twitter").html(data[0].text);
        });
    };
    get_tweet();

} )( jQuery );
