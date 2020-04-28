$(function() {
    $('.editDelete').addClass('hide');
    $(".front").hover(
        function() {
            $(this).find('.editDelete').removeClass('hide');
        },
        function() {
            $('.editDelete').addClass('hide');
        }
    );

    $('.linkProject').addClass('hide');
    $(".front").hover(
        function() {
            $(this).find('.linkProject').removeClass('hide');
        },
        function() {
            $('.linkProject').addClass('hide');
        }
    );
});