$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $(this).parents('.menubarWrap').toggleClass('active');
        $(this).parents('.menubarWrap').find('.menu-items').toggleClass('active');
        $('.xslider-img').toggleClass('active');
    });

    $('.innerMenuBar').on('click', function() {
        $(this).toggleClass('active');
        $('.showMenu').toggleClass('active');
    });

    $('.loginUp').click(function() {
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.signUp').click(function() {
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.closePop,.overlay').click(function() {
        $('.popupMain,.showPrice').fadeOut();
        $('.overlay').fadeOut();
        $('.sidebar-form').removeClass('active');
    });

    $('.side-head').click(function() {
        $(this).parent().toggleClass('active');
        $('.overlay').fadeToggle();
    });

    /* Tabbing Function */
    $('[data-targetit]').on('click', function(e) {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide();
        $('.' + target).fadeIn();
    });

    // Active class for naigation
    $(function() {
        $('.menu li a').filter(function() { return this.href == location.href }).parent().addClass('active').siblings().removeClass('active')
        $('.menu li a').click(function() {
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    })

    // Disclaimer Toogle
    $('.ft-nav li:first-child a').on('click', function() {
        $(this).toggleClass('active');
        $('.disclaimer p').slideToggle();
    });

    /* Top Scroll */
    $('body').on('click', '.topTo', function() {
        goToScroll('header');
    });

    // Home slider
    $('.xslider-img').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.xslider-asset',
        autoplay: true,
        autoplaySpeed: 4000,
        draggable: false,
    });
    $('.xslider-asset').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.xslider-img',
        dots: false,
        arrows: false,
        draggable: false,
    });

    // Awards slider
    $('ul.award-ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        speed: 200,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        draggable: false,
    });


    // Variables
    var $slideshow = $('.sm-slider');



    // Run when slides change
    $slideshow.on('afterChange', function(event, slick, currentSlide) {

        // AllSet(event, slick, currentSlide);
        if ($('.sm-slider .slick-dots li:first-child').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#2786b2", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(2)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#f15e61", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(3)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#386163", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(4)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#293445", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(5)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#facb73", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(6)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#a9dab7", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:nth-child(7)').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#37bafd", "transition": "1s ease" });
        } else if ($('.sm-slider .slick-dots li:last-child').hasClass("slick-active")) {
            $('.servicemain').css({ "background": "#110f28", "transition": "1s ease" });
        } else {
            $('.servicemain').css("background:#2786b2");
        }

    });


    const $slider = $(".sm-slider");
    $slider
        .on('init', () => {
            mouseWheel($slider)
        })
        .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            fade: true,
            autoplay: false,
            arrows: false,
            dots: true,
            cssEase: 'linear'
        })

    function mouseWheel($slider) {
        $(window).on('wheel', { $slider: $slider }, mouseWheelHandler)
    }

    function mouseWheelHandler(event) {
        event.preventDefault()
        const $slider = event.data.$slider
        const delta = event.originalEvent.deltaY
        if (delta > 0) {
            $slider.slick('slickNext')
        } else {
            $slider.slick('slickPrev')
        }
    }

    /* FAQACCORDIAN JS */
    $('.btc-list li').click(function() {
        var index1 = $(".btc-list li").index(this);
        $('.swboxList ul').children().removeAttr('class');
        $('.swboxList ul li').eq(index1).addClass('active-' + index1);
        $('.swboxList ul').removeAttr('class');
        $('.swboxList ul').addClass('active-' + index1);
        console.log(index1);
    });

    $(document).on('click', '.swboxList li', function() {
        var relation = $(this).attr('rel');
        $('.swboxList li').removeAttr('class');
        $('.swboxList ul').removeAttr('class');
        $('.swboxList ul').addClass('active-' + relation);
        $(this).addClass('active-' + relation);
        $('.btc-list li').removeClass('active');
        $('.btc-list li.abc-' + relation).addClass('active');

    })
    $('.btc-list li').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });


    /* Inner FAQ LIST */
    $('.faqAccordian>li.first').addClass('active');

    $('.faqAccordian>li').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });

});



$(window).on('load', function() {});


$(window).scroll(function() {

    var scroll = $(window).scrollTop();

    // Sticky header
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }

    // Sidebar form
    if (scroll >= 350) {
        $(".sidebar-form").addClass("sidebar-form-show");
    } else {
        $(".sidebar-form").removeClass("sidebar-form-show");
    }

    if (scroll >= 300) {
        $(".sticky-header").addClass('opacity-1');
    } else {
        $(".sticky-header").removeClass('opacity-1');
    }

});

/* RESPONSIVE JS */
if ($(window).width() < 825) {

    // Responsive Slider
    $('.responsive-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 500,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        draggable: false,
    });

    $('.expertise').hide();
    $('.footer-top-box .toggle').on('click', function() {
        $(this).toggleClass('active');
        $(this).next().slideToggle();
    });

    $(".sticky-header.opacity-1").removeClass('opacity-1');

}


// Popup
$('.popup-open').click(function() {
    $('.leadpopup').fadeIn();
    $('.black-layout').fadeIn();
});

$('.popup-close, .black-layout').click(function() {
    closePopup();
})


function goToScroll(e) {
    $('html, body').animate({
        scrollTop: $("." + e).offset().top
    }, 1000);
}

function closePopup() {
    $('.popup').hide();
    $('body').removeClass('bodyOverflow');
    $('.black-layout').fadeOut();
    $('.sidebar-form').removeClass('active');
}


/* 3d Prospective Slider */
var Conclave = (function() {
    var buArr = [],
        arlen;
    return {
        init: function() {
            this.addCN();
            this.clickReg();
        },
        addCN: function() {
            var buarr = ["holder_bu_awayL2", "holder_bu_awayL1", "holder_bu_center", "holder_bu_awayR1", "holder_bu_awayR2"];
            for (var i = 1; i <= buarr.length; ++i) {
                $("#bu" + i).removeClass().addClass(buarr[i - 1] + " holder_bu");
            }
        },
        clickReg: function() {
            $(".holder_bu").each(function() {
                buArr.push($(this).attr('class'))
            });
            arlen = buArr.length;
            for (var i = 0; i < arlen; ++i) {
                buArr[i] = buArr[i].replace(" holder_bu", "")
            };
            $(".holder_bu").click(function(buid) {
                var me = this,
                    id = this.id || buid,
                    joId = $("#" + id),
                    joCN = joId.attr("class").replace(" holder_bu", "");
                var cpos = buArr.indexOf(joCN),
                    mpos = buArr.indexOf("holder_bu_center");
                if (cpos != mpos) {
                    tomove = cpos > mpos ? arlen - cpos + mpos : mpos - cpos;
                    while (tomove) {
                        var t = buArr.shift();
                        buArr.push(t);
                        for (var i = 1; i <= arlen; ++i) {
                            $("#bu" + i).removeClass().addClass(buArr[i - 1] + " holder_bu");
                        }
                        --tomove;
                    }
                }
            })
        },
        auto: function() {
            for (i = 1; i <= 1; ++i) {
                $(".holder_bu").delay(4000).trigger('click', "bu" + i).delay(4000);
            }
        }
    };
})();

$(document).ready(function() {
    window['conclave'] = Conclave;
    Conclave.init();
});



/* comparision slider */
// Call & init
$(document).ready(function() {
    $('.ba-slider').each(function() {
        var cur = $(this);
        // Adjust the slider
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
        // Bind dragging events
        drags(cur.find('.handle'), cur.find('.resize'), cur);
    });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
$(window).resize(function() {
    $('.ba-slider').each(function() {
        var cur = $(this);
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
    });
});

function drags(dragElement, resizeElement, container) {

    // Initialize the dragging event on mousedown.
    dragElement.on('mousedown touchstart', function(e) {

        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');

        // Check if it's a mouse or touch event and pass along the correct value
        var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

        // Get the initial position
        var dragWidth = dragElement.outerWidth(),
            posX = dragElement.offset().left + dragWidth - startX,
            containerOffset = container.offset().left,
            containerWidth = container.outerWidth();

        // Set limits
        minLeft = containerOffset + 10;
        maxLeft = containerOffset + containerWidth - dragWidth - 10;

        // Calculate the dragging distance on mousemove.
        dragElement.parents().on("mousemove touchmove", function(e) {

            // Check if it's a mouse or touch event and pass along the correct value
            var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

            leftValue = moveX + posX - dragWidth;

            // Prevent going off limits
            if (leftValue < minLeft) {
                leftValue = minLeft;
            } else if (leftValue > maxLeft) {
                leftValue = maxLeft;
            }

            // Translate the handle's left value to masked divs width.
            widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + '%';

            // Set the new values for the slider and the handle. 
            // Bind mouseup events to stop dragging.
            $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function() {
                $(this).removeClass('draggable');
                resizeElement.removeClass('resizable');
            });
            $('.resizable').css('width', widthValue);
        }).on('mouseup touchend touchcancel', function() {
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
        e.preventDefault();
    }).on('mouseup touchend touchcancel', function(e) {
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
    });
}