$(function () {
    // Smooth scroll to anchor
    $('body a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('.docs-container').find('a[name]').each(function () {
        var anchor = $('<a href="#' + this.name + '"/>');
        $(this).parent().next('h2').wrapInner(anchor);
    });
});