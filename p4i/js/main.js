$('.tabs').tabslet();

jQuery(document).ready(function($) {

    var menuToggle = function() {
        $('.burger').click(function(e) {
            $(this).toggleClass('open');
            e.preventDefault();
            $(this).toggleClass('is-active');
        });
    }

    menuToggle();

});