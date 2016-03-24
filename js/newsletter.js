    
$(window).on('scroll', function()
{
   if (screen.width >= 100) 
   {
     stop = Math.round($(window).scrollTop());
         
        if (stop > 600 & stop <= 1000)
        {
        $('div.qwe-newsletter').addClass('qwe-float-newsletter-or-gift-show')
        $('div.qwe-newsletter').addClass('hinge')
        $('div.qwe-newsletter').removeClass('qwe-float-newsletter-or-gift')
        }
        else{
        $('div.qwe-newsletter').addClass('qwe-float-newsletter-or-gift')
        $('div.qwe-newsletter').addClass('hinge')
        $('div.qwe-newsletter').removeClass('qwe-float-newsletter-or-gift-show')
            
		}
	} 

}
);

$(window).on('scroll', function()
{
   if (screen.width >= 100) {
     stop = Math.round($(window).scrollTop());
         
        if (stop > 600 & stop <= 3000){
        $('div.qwe-newsletter-plug').addClass('qwe-float-newsletter-or-gift-plug-show')
        $('div.qwe-newsletter-plug').addClass('hinge')
        $('div.qwe-newsletter-plug').removeClass('qwe-float-newsletter-or-gift-plug')
        }
        else{
        $('div.qwe-newsletter-plug').addClass('qwe-float-newsletter-or-gift-plug')
        $('div.qwe-newsletter-plug').addClass('hinge')
        $('div.qwe-newsletter-plug').removeClass('qwe-float-newsletter-or-gift-plug-show')
            
        }
	} 

});

//newsletter timeout
// $(".galleryPreviewImage > img:gt(0)").hide();

// var nextSlide = function() 
// { 

//     $('a.galleryBullets' + currentImage).removeClass('active');
    
//     $(".galleryPreviewImage > img:first")
//     .fadeOut(1000)
//     .next()
//     .fadeIn(1000)
//     .end()
//     .appendTo(".galleryPreviewImage");

//     $('.gallerydescription > div:first-child')
//     .fadeOut(0)
//     .next()
//     .fadeIn(0)
//     .end()
//     .appendTo(".gallerydescription");


//     currentImage++;
//     $('a.galleryBullets' + currentImage).addClass('active');
//     if (currentImage==9)
//     {
//     	currentImage=1;$('a.galleryBullets' + currentImage).addClass('active');
//     }

// }


// var nextSlideTimer = setInterval(nextSlide,  9000);

// $(".gallerydescription > div:gt(0)").hide();

// // function to move previous image 
// // & description & button 
// // & bullets
// $("a.previousslidearrow").click(function() 
// {
//     clearInterval(nextSlideTimer);

//     $(".galleryPreviewImage > img:first")
//     .fadeOut(1000);
//     $(".galleryPreviewImage > img:last")
//     .fadeIn(1000)
//     .prependTo(".galleryPreviewImage");

//     $('.gallerydescription > div:first-child')
//     .fadeOut(0);
//     $('.gallerydescription > div:last-child')
//     .fadeIn(0)
//     .prependTo(".gallerydescription");

//     nextSlideTimer = setInterval(nextSlide, 9000)
//     setTimeout(nextSlideTimer, 9000)

//     $('a.galleryBullets' + currentImage).removeClass('active');
//     currentImage--;
//     $('a.galleryBullets' + currentImage).addClass('active');
//     if (currentImage==0)
//     {
//     	currentImage=8;$('a.galleryBullets' + currentImage).addClass('active');
//     }

// }
// );
