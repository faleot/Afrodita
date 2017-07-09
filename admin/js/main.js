$('document').ready(function () {

    $('.chenged__but').click(function () {
        $('.chenged__save').css('visibility','visible');
        $('.header-left, .header-right, .navigation, .main-header, .main-content, .main-addittional').attr('contentEditable', 'true');
    })
    $('.chenged__save').click(function () {
        $('.header-left, .header-right, .navigation, .main-header, .main-content, .main-addittional').removeAttr('contentEditable');
        $('.chenged__save').css('visibility', 'hidden');
    })
});
