
  //variables
  //var imageTotal=<?php echo $imageTotal; ?>;
  var currentImage=1;
  var thumbTotalWidth=0;

    $('a.galleryBullets' + currentImage).addClass('active');


    $(".galleryPreviewImage > img:gt(0)").hide();

        //function to fade out current slide (first), fade in next slide and move first slide to end
        // & add fade to connected description & button
        // & add fade to connected bullets
        var nextSlide = function() { 
       
            $('a.galleryBullets' + currentImage).removeClass('active');
            
            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

            $('.gallerydescription > div:first-child')
            .fadeOut(0)
            .next()
            .fadeIn(0)
            .end()
            .appendTo(".gallerydescription");
        

            currentImage++;
            $('a.galleryBullets' + currentImage).addClass('active');
            if (currentImage==9){currentImage=1;$('a.galleryBullets' + currentImage).addClass('active');}

        }

        var nextSlideTimer = setInterval(nextSlide,  9000);

        $(".gallerydescription > div:gt(0)").hide();

        // function to move previous image 
        // & description & button 
        // & bullets
        $("a.previousslidearrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000);
            $(".galleryPreviewImage > img:last")
            .fadeIn(1000)
            .prependTo(".galleryPreviewImage");

            $('.gallerydescription > div:first-child')
            .fadeOut(0);
            $('.gallerydescription > div:last-child')
            .fadeIn(0)
            .prependTo(".gallerydescription");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)

            $('a.galleryBullets' + currentImage).removeClass('active');
            currentImage--;
            $('a.galleryBullets' + currentImage).addClass('active');
            if (currentImage==0){currentImage=8;$('a.galleryBullets' + currentImage).addClass('active');}

        });

        // function to move next image 
        // & description & button 
        // & bullets
        $("a.nextslidearrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

            $('.gallerydescription > div:first-child')
            .fadeOut(0)
            .next()
            .fadeIn(0)
            .end()
            .appendTo(".gallerydescription");
        

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)

            $('a.galleryBullets' + currentImage).removeClass('active');
            currentImage++;
            $('a.galleryBullets' + currentImage).addClass('active');
            if (currentImage==9){currentImage=1;$('a.galleryBullets' + currentImage).addClass('active');}

        });

        $(".galleryPreviewImage").hover(function() {
            $("a.previousslidearrow").fadeToggle("slow", "linear");
            $("a.nextslidearrow").fadeToggle("slow", "linear");
        });      

        // circle buttons map fade out current slide (first) and move last slide to top and fade in
        $(".circrarrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000);
            $(".galleryPreviewImage > img:last")
            .fadeIn(1000)
            .prependTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $(".circlarrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });
$('.circrarrow').hover(function(){
    //whatever
    $(this).css({'background-color' : 'red', 'border' : '1px solid black'});
});


        $('a.galleryBullets1').click(function(){
            $('a.galleryBullets' + currentImage).removeClass('active');
            currentImage=1;
            $('a.galleryBullets' + currentImage).addClass('active');
    
            clearInterval(nextSlideTimer);

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)

        });





$(window).on('scroll', function(){
    //creen width more than 100 for all devices like mobile tablet and pc
    if (screen.width >= 100) {
        stop = Math.round($(window).scrollTop());
        if(stop<200){
            $('div.sidebar3').removeClass('sidebar3-fixed-top2'); 
            $('div.sidebar3').removeClass('sidebar3-fixed-top3'); 
            $('div.sidebar3').addClass('sidebar3-fixed-top-0'); 
        }

        if (stop > 200 & stop <= 400){
            $('div.sidebar3').addClass('sidebar3-fixed-top2');
            $('div.sidebar3').removeClass('sidebar3-fixed-top-0');
            $('div.sidebar3').removeClass('sidebar3-fixed-top3');
        }


        if (stop > 400 & stop <= 600){
            $('div.sidebar3').addClass('sidebar3-fixed-top3');
            $('div.sidebar3').removeClass('sidebar3-fixed-top2');
            $('div.sidebar3').removeClass('sidebar3-fixed-top-0');      
        }

    }
});

    
$(window).on('scroll', function(){

});

$('.qwe-nav ul li li a:focus').prev('ul').css( 'right', '0' );
