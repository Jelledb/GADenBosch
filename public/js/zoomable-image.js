$(document).ready(function() {
    var images = $('.zoomable img');
    var modal = $('#img-modal');
    var modalImage = $('#modal-image');
    var closeModal = $('.close-modal');

    console.log(closeModal);
    closeModal.on('click', function() {
        modal.css('display', 'none');
    });

    images.each(function() {
        $(this).css('cursor', 'pointer');
        $(this).on('click', function() {
            modal.css('display', 'block');
            modalImage.attr('src', $(this).attr('src'));
        });
    });
});