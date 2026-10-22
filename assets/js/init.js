(function($) {
    $(function() {
        $('.button-collapse').sideNav();
    });
})(jQuery);

$(document).ready(function(){
    $("nav li").hover(
        function(){
            $(this).children('ul').stop( true, true ).fadeIn("fast"); 
            $(this).toggleClass('open');
        },
        function () {
            $('ul', this).stop( true, true ).fadeOut(1000); 
            $(this).toggleClass('open');            
        }
    );
});