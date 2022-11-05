jQuery(document).ready( function ($) {	

 
var swiper = new Swiper('.swiper-container', {
      spaceBetween: 40,
      centeredSlides: true,
	 effect: 'fade',
		speed: 1e3,
                autoplay: 7e3,
      autoplay: {
       
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
    });
    
    
    
    
    var swiper2 = new Swiper('.swiper-container2', {
        spaceBetween: 40,
      centeredSlides: true,
	 effect: 'slide',
		speed: 1e3,
                autoplay: 7e3,
      autoplay: {
       
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
	  

 });

 
 
	  
	
