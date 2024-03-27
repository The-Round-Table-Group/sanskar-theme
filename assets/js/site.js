(function($) {
    $(document).ready(function() {
        /**
         * Set active menu item based on URL path
        */
        var path = location.pathname.split('/'); // url path array

        if (path[1] !== '') {
            // $('.menu-link[href^="https://sanskarsavvy.local/' + path[1] + '"]').addClass('active'); // dev
            $('.menu-link[href^="https://sanskarsavvy.com/' + path[1] + '"]').addClass('active'); // prod
        }

        /**
         * Mobile menu toggle
        */
        $('#menu-toggle').on('click', function() {
            $('.x-bar').toggleClass('x-bar-active');
            $('.nav-wrapper__menu').toggleClass('mobile-menu-open');
        });
    });
})(jQuery);
