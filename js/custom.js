document.addEventListener( 'DOMContentLoaded', function() {
      new Swiper('.swiper-hero', {
        // Optional parameters
        loop: true,
        
        // Pagination
        pagination: {
        el: '.swiper-hero-pagination',
        clickable: true,
        },
    
        // Navigation arrows
        navigation: {
            nextEl: '.prev-hero',
            prevEl: '.next-hero',
        },
    
    });
    new Swiper('.swiper-main', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
     
       
        // Pagination
        pagination: {
        el: '.swiper-main-pagination',
        clickable: true,
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '.prev-main',
        prevEl: '.next-main',
        },
    
    });
    new Swiper('.swiper-side', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,

        // Pagination
        pagination: {
            el: '.swiper-pagination-side',
            clickable: true,
            },
        
    
        // Navigation arrows
        navigation: {
        nextEl: '.prev-side',
        prevEl: '.next-side',
        },
    
    });

} );


