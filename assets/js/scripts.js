document.addEventListener('DOMContentLoaded', function() {
    // Initialize fancybox for the gallery images
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            'zoom',
            'close'
        ],
        loop: true,
        protect: true
    });

    // Event listener for featured image click
    $('.featured-image').on('click', function() {
        const galleryId = $(this).data('gallery-id');
        // Redirect to the details page of the gallery
        window.location.href = '/gallery/details/' + galleryId;
    });
});