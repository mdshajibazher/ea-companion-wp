;(function($){

    $(window).on("elementor/frontend/init",function(){
        elementorFrontend.hooks.addAction("frontend/element_ready/easy-ask-carousel.default",function(socpe,$){
                $("#ea-owl-wrapper").owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots: true
                });

            console.log('scope',socpe);

        })
    })


//     $(document).ready(function(){
//     $("#ea-owl-wrapper").owlCarousel({
//         loop:true,
//         margin:10,
//         nav:false,
//         dots: true
//     });
// });




})(jQuery)



