$('.card-footer').css('opacity', 0);
$('.card-body .active').hide();

$('.card')
    .mouseover(function () {
        var body = $(this).find('.card-body');
        body.find('.active').show();
        body.find('.inactive').hide();
        body.addClass('red');
        var footer = $(this).find('.card-footer');
        footer.css('opacity', 1);
    })
    .mouseout(function () {
        $('.active').hide();
        $('.inactive').show();
        $('.card-body').removeClass('red');
        $('.card-footer').css('opacity', 0);
    });
