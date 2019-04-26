<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script>
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:0,
    dots:false,
    autoplay:true,
    autoplayTimeout:3,
    autoplayHoverPause:true,
    nav:true,
     navText: [ '', '' ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>