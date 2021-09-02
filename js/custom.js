jQuery(function($) { 

 

 //Preloader

    var preloader = $('.preloader');

    $(window).load(function(){

    	preloader.remove();

	});



});



$(document).ready(function() {

	var breakpoint  = 761;

	var $window     = $(window);

	//var $navul      = $('for_nav ul');

	var $navul      = $('.for_mobile_nav ul');

	var $navtrigger = $('#mobile-nav-trigger');



	$navtrigger.on('click', function() { 

		var $that = $(this);



		$that.prop('disabled', true);



		$navul.slideToggle(function() {

			$that.toggleClass('active').prop('disabled', false);

		});

	});



	if ($window.width() <= breakpoint) {

		$navtrigger.show();

		$navul.hide();

	}



	$window.on('resize', function() {

		if ($window.width() <= breakpoint) {

			if ($navtrigger.is(':hidden')) {

				$navtrigger.removeClass('active').show();

				$navul.hide();

			}

		} else {

			if ($navtrigger.is(':visible')) {

				$navtrigger.hide().removeClass('active');

				$navul.show();

			}

		}

	});

	

	

  document.createElement('header');

  document.createElement('section');

  document.createElement('main');

  document.createElement('article');

  document.createElement('aside');

  document.createElement('nav');

  document.createElement('footer');



	



$('.testimonials li:nth-child(3n+3)').addClass('no_right');

$('.books_pan figure:nth-child(2n+1)').addClass('no_right');

$('.projects section:last-child').addClass('no_pad_marg');

$('p:empty').remove();

$("p").filter(function(){

    return $.trim(this.innerHTML) === "&nbsp;"

}).remove();

$('em:empty').remove();



//$("#main_inner em").remove();



function myFunction() {

    document.getElementsByTagName("#main_inner")[0].removeAttribute("em"); 

}







$(".swipebox").swipebox();



$(".projects_desk section ").each(function(n){

					$(this).magnificPopup({

          delegate: 'a',

          type: 'image',

          tLoading: 'Loading image #%curr%...',

          mainClass: 'mfp-img-mobile',

          gallery: {

            enabled: true,

            navigateByImgClick: true,

            preload: [0,1] // Will preload 0 - before current, and 1 after the current image

          },

          image: {

            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

            titleSrc: function(item) {

              return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';

            }

          }

        });

				});











var sync1 = $("#sync1");
var sync2 = $("#sync2");
var sync3 = $("#sync3");


      sync1.owlCarousel({

        singleItem : true,

		autoPlay : 9000,

        slideSpeed : 1000,

        navigation: true,

        pagination:false,

        afterAction : syncPosition,

        responsiveRefreshRate : 200,

      });



      sync2.owlCarousel({

        items : 15,

		

        itemsDesktop      : [1199,10],

        itemsDesktopSmall     : [979,10],

        itemsTablet       : [768,3],

        itemsMobile       : [479,3],

        pagination:false,

        responsiveRefreshRate : 100,

        afterInit : function(el){

          el.find(".owl-item").eq(0).addClass("synced");

        }

      });

sync3.owlCarousel({

        singleItem : true,

        autoPlay : 9000,

        slideSpeed : 1000,

        navigation: false,

        pagination:true,

        afterAction : syncPosition,

        responsiveRefreshRate : 200,

      });

      function syncPosition(el){

        var current = this.currentItem;

        $("#sync2")

          .find(".owl-item")

          .removeClass("synced")

          .eq(current)

          .addClass("synced")

        if($("#sync2").data("owlCarousel") !== undefined){

          center(current)

        }



      }



      $("#sync2").on("click", ".owl-item", function(e){

        e.preventDefault();

        var number = $(this).data("owlItem");

        sync1.trigger("owl.goTo",number);

      });



      function center(number){

        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;



        var num = number;

        var found = false;

        for(var i in sync2visible){

          if(num === sync2visible[i]){

            var found = true;

          }

        }



        if(found===false){

          if(num>sync2visible[sync2visible.length-1]){

            sync2.trigger("owl.goTo", num - sync2visible.length+2)

          }else{

            if(num - 1 === -1){

              num = 0;

            }

            sync2.trigger("owl.goTo", num);

          }

        } else if(num === sync2visible[sync2visible.length-1]){

          sync2.trigger("owl.goTo", sync2visible[1])

        } else if(num === sync2visible[0]){

          sync2.trigger("owl.goTo", num-1)

        }

      }







 $("#categories-2 .widget-title").click(function () {

     $("#categories-2 ul").stop().slideToggle();

     return false;

 });



 $("#archives-2 .widget-title").click(function () {

     $("#archives-2 ul").stop().slideToggle();

     return false;

 });

 

 

  $(function(){

      //SyntaxHighlighter.all();

    });

    

 

 



 



});