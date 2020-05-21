(function() {
  var __sections__ = {};
  (function() {
    for(var i = 0, s = document.getElementById('sections-script').getAttribute('data-sections').split(','); i < s.length; i++)
      __sections__[s[i]] = true;
  })();
  (function() {
  if (!__sections__["brands"] && !window.DesignMode) return;
  try {
    
 $(document).ready(function(){
     var brand_logos = $("#client-car");
      brand_logos.owlCarousel({
        items:8,
      loop:true,  
	   autoplay: true,
	   autoplayTimeout: 3000,
		 navContainer: ".nav-brands",
          navText: ['<a class="prev btn"><i class="fas fa-arrow-left"></i></a>','<a class="next btn"><i class="fas fa-arrow-right"></i></a>'],
          responsive:{
           0:{
              items: 1,
              dots: false, 
              nav:true
            },
            320:{
              items: 2,
              dots: false, 
              nav:true
            },
            480:{
              items: 3,
              dots: false, 
              nav:true
            },
            768:{
              items: 4,           
              dots: true,
			  nav:false
            },

            1000:{
              items: 5,
              dots: true,
			  nav:false
            }
         }
  			});
        });

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["footer-model-17"]) return;
  try {
    
if (jQuery.cookie('footerPanel') == 'closed') {
jQuery('.footer-newsletter').fadeOut();
}

jQuery('.footer-newsletter a.close').bind('click',function(){
jQuery('.footer-newsletter').fadeOut();
jQuery.cookie('footerPanel', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["footer-model-6"]) return;
  try {
    
 if (jQuery.cookie('footerPanel') == 'closed') {
        jQuery('.footer-newsletter').fadeOut();
      }

      jQuery('.footer-newsletter a.close').bind('click',function(){
        jQuery('.footer-newsletter').fadeOut();
        jQuery.cookie('footerPanel', 'closed', {expires:-1, path:'/'});
      });  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-1"]) return;
  try {
    
jQuery(function($){ 
function dropDown() {
elementClick = '.header_toggle';
elementSlide = '.header_slide_element';
activeClass  = 'active';
$(elementClick).on('click', function(e) {
e.stopPropagation();
var subUl = $(this).next(elementSlide);
$(this).toggleClass(activeClass);

$(elementClick).not(this).removeClass(activeClass);
e.preventDefault();
});
$(document).on('click', elementSlide, function(e) {
e.stopPropagation();
});
$(document).on('click', function(e) {
e.stopPropagation();
if (e.which != 3) {
var elementHide = $(elementClick).next(elementSlide);
// $(elementHide).hide();
$(elementClick).removeClass('active');
}
});
}
dropDown()
});

new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-4"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

jQuery(function($){ 
function dropDown() {
elementClick = '.header_toggle';
elementSlide = '.header_slide_element';
activeClass  = 'active';
$(elementClick).on('click', function(e) {
e.stopPropagation();
var subUl = $(this).next(elementSlide);
$(this).toggleClass(activeClass);

$(elementClick).not(this).removeClass(activeClass);
e.preventDefault();
});
$(document).on('click', elementSlide, function(e) {
e.stopPropagation();
});
$(document).on('click', function(e) {
e.stopPropagation();
if (e.which != 3) {
var elementHide = $(elementClick).next(elementSlide);
// $(elementHide).hide();
$(elementClick).removeClass('active');
}
});
}
dropDown()
});
new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-5"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["header-model-9"]) return;
  try {
    
new UISearch( document.getElementById( 'sb-search' ) );

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["product-sidebar-promoimage"]) return;
  try {
    
$(document).ready(function(){
     $("#promo-carousel").owlCarousel({ 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [630, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        itemsScaleUp: false,
        responsive: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        autoPlay: false,
        stopOnHover: false,
        navigation: false,
        pagination:true
 
  });
});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["sidebar-category"]) return;
  try {
    
$(document).ready(function(){
  $(".dt-menu-expand").click(function(event){
    event.preventDefault();
    if( $(this).hasClass("dt-mean-clicked") ){
   $(this).html('<i class="fas fa-plus"></i>');
      if( $(this).prev('ul').length ) {
        $(this).prev('ul').slideUp(400);
      } else {
        $(this).prev('.megamenu-child-container').find('ul:first').slideUp(600);
      }
    } else {
     $(this).html('<i class="fas fa-minus"></i>');
      if( $(this).prev('ul').length ) {
        $(this).prev('ul').slideDown(400);
      } else{
        $(this).prev('.megamenu-child-container').find('ul:first').slideDown(2000);
      }
    }

    $(this).toggleClass("dt-mean-clicked");
    return false;
  });

});
      

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["slideshow"] && !window.DesignMode) return;
  try {
    
function process_slick_event(evt) {
var _slick = $( "#" +evt.target.id + " .home-slideshow .variable-width");
if( _slick.length )
{
switch ( evt.originalEvent.type ) {
case "shopify:section:load" : 
console.log('Load ' + _slick.attr("id"));
_slick.slick (
{
dots: true,
slidesToScroll: 1,

autoplay: _slick.data('slick').autoplay,
autoplaySpeed: _slick.data('slick').autoplaySpeed
}
);
break; 
case "shopify:section:unload" :
console.log('Unload ' + _slick.attr("id"));
_slick.slick('unslick');
break;

} 
}
}

$(document)
.on( 'shopify:section:load', process_slick_event )
.on( 'shopify:section:unload', process_slick_event )
;


  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["top-bar-type-10"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["top-bar-type-11"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["top-bar-type-2"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

(function() {
  if (!__sections__["top-bar-type-5"]) return;
  try {
    

if (jQuery.cookie('headerTop') == 'closed') {
jQuery('.header-top').fadeOut();
}

jQuery('.header-top a.close').bind('click',function(){
jQuery('.header-top').fadeOut();
jQuery.cookie('headerTop', 'closed', {expires:-1, path:'/'});
});  

  } catch(e) { console.error(e); }
})();

})();
