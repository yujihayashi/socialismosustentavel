$(function() {
    $('#load').css({opacity: 0.6});
    $("#load").ajaxStart(function() {
        $(this).show();
    });
    $("#load").ajaxStop(function() {
        $(this).hide();
    });

    $('.navbar-nav > li').hover(function () {
        $(this).find('.sub-menu').stop(true, true).delay(50).fadeIn({duration: 600, queue: true, easing: 'easeInOutExpo'});
    }, function () {
        $(this).find('.sub-menu').stop(true, true).delay(50).fadeOut({duration: 600, queue: true, easing: 'easeInOutExpo'});
    });

    // The default axis is 'y', but in this demo, I want to scroll both
    // You can modify any default like this
    $.localScroll.defaults.axis = 'y';

    // Scroll initially if there's a hash (#something) in the url 
    $.localScroll.hash({
        target: 'body', // Could be a selector or a jQuery object too.
        queue:true,
        duration:2000
    });

    /**
     * NOTE: I use $.localScroll instead of $('#navigation').localScroll() so I
     * also affect the >> and << links. I want every link in the page to scroll.
     */
     $('.navbar-nav, .navbar-header, .scroll-down').localScroll({
        target: 'body', // could be a selector or a jQuery object too.
        queue:true,
        duration:2000,
        hash:true,
        //filter: {'.panel-group'},
        onBefore:function( e, anchor, $target ){
            // The 'this' is the settings object, can be modified
        },
        onAfter:function( anchor, settings ){
            // The 'this' contains the scrolled element (#content)
        }
    });
});
$(function() {
    $('.jImgFormat').find('img').each(function() {
        var $float = $(this).css('float');
        $(this).css('float', 'none');
        var margin = '';
        switch ($float) {
            case 'left':
                margin = 'margin:2px 10px 2px 0px';
                break;
            case 'right':
                margin = 'margin:2px 0px 2px 10px';
                break;
            default:
                break;
        }
        var url_amp = $(this).attr('src');
        url_amp = url_amp.replace(/-([0-9]*)\./, '.');
        var img = $(this).wrap('<a href="' + url_amp + '" rel="shadowbox" style="float:' + $float + ';' + margin + '" class="imgTexto"/>');
        img.after('<strong style="display:block">' + $(this).attr('alt') + '</strong>');
    });
});

function showPopup() {
    $('.popup').fadeIn('slow');
    var popupMarginLeft = $('.popup-img').width() / 2,
        popupMarginTop = $('.popup-img').height() / 2;

    // console.log(popupMarginLeft);
    // console.log($('.popup-img img').attr('height'));
    $('.popup-content').css({marginLeft: -popupMarginLeft + 'px'/*, marginTop: -popupMarginTop+'px'*/});
    $('.popup-close, .popup').click(function() {
        $('.popup').fadeOut();
    });
    $('.popup-content').click(function() {
        return false;
    });
}