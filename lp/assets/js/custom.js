

$(window).load(function(){
    $('.process-bx-ul').isotope({
      itemSelector: '.process-bx-ul li',
    });
});

$(document).ready(function() {

  if ($('.countr-sec').length > 0) {
      var a = 0;
      $(window).scroll(function() {
          var oTop = $('#counter').offset().top - window.innerHeight;
          if (a == 0 && $(window).scrollTop() > oTop) {
              $('.counter-value').each(function() {
                  var $this = $(this),
                      countTo = $this.attr('data-count');
                  $({
                      countNum: $this.text()
                  }).animate({
                      countNum: countTo
                  }, {
                      duration: 2000,
                      easing: 'swing',
                      step: function() {
                          $this.text(Math.floor(this.countNum));
                      },
                      complete: function() {
                          $this.text(this.countNum);
                      }
                  });
              });
              a = 1;
          }
      });
  }

  $('.sample-ul').slick({ 
      slidesToShow: 5, 
      slidesToScroll: 2, 
      arrows: true, 
      speed: 500, 
      autoplay: true, 
      infinite: true, 
      responsive: [{ breakpoint: 1025, settings: { slidesToShow: 4, slidesToScroll: 1, } }, { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } }, { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } }] });

  $('ul.rushdev-check-ul li').click(function(){
    if ($('ul.rushdev-check-ul .checkbx input[type="checkbox"]').is(':checked')) {
      $(this).addClass('active');
    }
  });

  $('ul.rushdev-check-ul li').click(function(){
    if ($('ul.rushdev-check-ul .checkbx input[type="radio"]').is(':checked')) {
      $(this).siblings('li').removeClass('active');
      $(this).addClass('active');
    }
  });

  $('.packg-ul-js').slick({
  dots: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

  $('.awrdsRcg ul li a').click(function(){
    var tab_id = $(this).attr('data-tag');

    $('.awrdsRcg ul li a').removeClass('nwsMd');
    $('.awrdsRcg-content').removeClass('active');

    $(this).addClass('nwsMd');
    $("#"+tab_id).addClass('active');
  });

  $('.arrow-left').on('click', function() {
    if ( $('.box-tab.showfirst').hasClass( "active" )){
      $('.arrow-left').addClass('disable');
    }
    else{
      var target = $('ul.tabbingList li.active').data('targetit');
      $('ul.tabbingList li.active').removeClass('active').prev('li').addClass('active');
      $('.box-tab').removeClass('active').hide();
      $('.' + target).prev('.box-tab').addClass('active').fadeIn();
    }
  });

  $('.arrow-right').on('click', function() {
    if ( $('.box-tab.showlast').hasClass( "active" )){
      $('.arrow-right').addClass('disable');
    }
    else{
      var target = $('ul.tabbingList li.active').data('targetit');
      $('ul.tabbingList li.active').removeClass('active').next('li').addClass('active');
      $('.box-tab').removeClass('active').hide();
      $('.' + target).next('.box-tab').addClass('active').fadeIn();
    }
  });

  $("header").addClass("StickyHeader");
  $(function() {
      $("header").before($(".StickyHeader").clone().addClass("stick"));
      $(window).scroll(function() {
          if ($(window).scrollTop() >= 300) {
              $('.StickyHeader.stick').addClass('slideDown');
          } else {
              $('.StickyHeader.stick').removeClass('slideDown');
          }
      });
  });



$(document).ready(function() {

		$('.loginUp').click(function(){
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
    });
	});

    $(".color-explr a").click(function () {
        if ($("ul.colors-selct-ul .dv-01").hasClass("slideDown")){
            $("ul.colors-selct-ul .dv-01").slideDown();
            $('.color-explr a').fadeOut();
        }
        else {
          $("ul.colors-selct-ul .dv-01").addClass('slideDown');
            $("ul.colors-selct-ul .dv-02").slideDown();
        }
    });


    $(".portf-btn").click(function () {
        if ($(".portf-01").hasClass("slideDown")){
            $(".portf-01").slideDown();
            $('.portf-btn').fadeOut();
        }
        else {
          $(".portf-01").addClass('slideDown');
            $(".portf-02").slideDown();
        }
    });

    $('.closePop,.overlay').click(function(){
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });

    $('ul.packg-ul-js .slick-slide').click(function(){
      $(this).siblings('li').removeClass('active');
        $(this).addClass('active');
    });
	
});

 $('.process-slider').slick({
        dots: false,
        infinite: true,
        arrows: true,
        //autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
         centerMode: true,
         centerPadding: '10px',
        slidesToScroll: 1,
       responsive: [
   {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    }); 

  $('.disclaimer-sec p:first-child').on('click', function() {
        $(this).toggleClass('active');
        $('.disclaimer-sec p:last-child').slideToggle();
    });


$('ul.acordian-cst li').click(function(){

	$(this).addClass('active');
	$(this).siblings().removeClass('active');

});





 $('[data-targetit]').on('click', function(e) {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide().removeClass('active');
        $('.' + target).fadeIn().addClass('active');
        $(".process-slider").slick("setPosition");
    });
		

$(window).on('load', function() {

	 $('.process-slider').slick("setPosition", 0);

	});




