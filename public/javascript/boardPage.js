$('.stikyNotes').each(function () {
    var a = Math.random() * 10 - 5;
    $(this).css('transform', 'rotate(' + a + 'deg)');
});

$('.stikyNotes').hover(function () {
    var a = Math.random() * 10 - 5;
    $(this).css('transform', 'none');
    $(this).css('transform', 'scale(1.2)');
}, function () {
    var a = Math.random() * 10 - 5;
    $(this).css('transform', 'rotate(' + a + 'deg)');
});