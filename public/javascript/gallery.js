$(document).ready(function () {
    const modal = $('.modal-gallery');
    const original = $('.full-img');

    var previews = $(".img-thumbnail").map(function () {

        this.addEventListener('click', () => {
            modal.addClass('open');
            original.addClass('open');

            const src = this.getAttribute('data-original');
            original.attr('src', src);
        });
    }).get();

    modal.on('click', (e) => {
        if (e.target.classList.contains('modal-gallery')) {
            modal.removeClass('open');
        }
    });

});
