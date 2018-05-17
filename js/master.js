

$(document).ready(function () {

  // Employee filtering
  $('.employees-filter .filter a').click(function(e) {
    e.preventDefault();
    var a = $(this).attr('href');
    a = a.substr(1);
    $('.sets .employee-item').each(function() {
      if (!$(this).hasClass(a) && a != 'all')
        $(this).addClass('hide');
      else
        $(this).removeClass('hide');
    });
  });


    $( ".filter a" ).on('click', function() {
      $(".filter a").removeClass('active');
      $(this).addClass('active');
    });

  // Category boxex equal height
  var cw = $('#categories figure').width();
  $('#categories figure').css({'height':cw +'px'});

  $( ".submit" ).on('click', function() {
    $('#mce-success-response').html('Du er nu tilmeld vores nyhedsbrev');
  });

  $( "#contact" ).on('click', function() {
    $(this).addClass("active");
    $("aside").show();
    $("#info").removeClass("active");
    $(".description-container").hide();
  });

  $( "#info" ).on('click', function() {
    $(this).addClass("active");
    $(".description-container").show();
    $("#contact").removeClass("active");
    $("aside").hide();
  });

  /**
      To customize your embedded form validation messages, place this code before the closing script tag.
   */
  $mcj.extend($mcj.validator.messages, {
      required: "Dette felt skal udfyldes.",
      remote: "Ret dette felt.",
      email: "Skriv en gyldig email adresse",
  });
  // Add mobile js functionality if screen is less than 991px in width
  if ( $(window).width() < 991) {


    $(function(){
      // Bind the swipeleftHandler callback function to the swipe event on div.box
      $( "#carouselExampleIndicators" ).on( "swipeleft", function swipeleftHandler( event )
        {
          $(this).carousel('next');
        }
      );

      $( "#carouselExampleIndicators" ).on( "swiperight", function swipeleftHandler( event )
        {
          $(this).carousel('prev');
        }
      );

      // Callback function references the event target and adds the 'swipeleft' class to it

    });

  }else {
    // Detect scroll direction

    $('document').ready(function() {
    var lastScrollTop = 0;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       if (st > lastScrollTop && st > 200){
           console.log(st)
              $('nav').css({'transform':'translateY(-100%)'});
       }
       else if(st == lastScrollTop)
       {
         //do nothing
         //In IE this is an important condition because there seems to be some instances where the last scrollTop is equal to the new one
       }
       else {
          console.log("up")
          $('nav').css({'transform':'translateY(0%)'});
       }
       lastScrollTop = st;
    });});
  }

  // Read description toggle buttons

  $('.read-more').on('click', function() {
    $('.description').toggleClass('open');

    if ( $( '.description' ).hasClass( 'open' ) ) {

      $('.read-more').text('VIS MINDRE');

    }else {
      $('.read-more').text('LÆS MERE');
    }

  });

  $(".gallery a").on('click', function() {
    $('.overlay-dark-o').addClass("image-show");
    $(this).addClass("show");
    $('html').addClass("overflow-hidden");
  });

  $(".overlay-dark-o").on('click', function() {
    $(this).removeClass("image-show");
    $('.gallery a').removeClass("show");
    $('html').removeClass("overflow-hidden");
  });

  $('.carousel').carousel({
    interval: 4000
  })

  //PLAY BUTTON BEHAVIOR

  //For Firefox we have to handle it in JavaScript
  var vids = $("video");
  $.each(vids, function(){
         this.controls = false;
  });
  //Loop though all Video tags and set Controls as false
  $(".nav-menu").click(function() {
    $('#navbarSupportedContent').toggleClass("show");
    if ($('#navbarSupportedContent').hasClass("show")) {
      $(this).css('transform', 'rotate(90deg)');
      $('html').addClass("overflow-hidden");
    }else {
      $(this).css('transform', 'rotate(0deg)');
      $('html').removeClass("overflow-hidden");
    }
  });

  // VIDEO PLAYER

  $(".play-btn").click(function() {

      $("video").get(0).play();
      $(".play-overlay").addClass('animated fadeOut');
      $(".player").addClass('playing');
      $(".player").addClass('expand');
      $('html').addClass("overflow-hidden");

  });

  $("video").click(function() {
    //console.log(this);
    if (this.paused) {
      this.play();
    } else {
      this.pause();
    }
    $(".play-overlay").addClass('animated fadeOut');
    $(".player").addClass('playing');
  });

  $(".expand").click(function() {
    $(".player").addClass('expand');
    $('html').addClass("overflow-hidden");
  });

  $(".extract, .extract-container").click(function() {
    $(".player").removeClass('expand');
    $('html').removeClass("overflow-hidden");
  });

});

/* Jump Down logo */

$(function(){
 var shrinkHeader = 120;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.navbar').addClass('fixed');
        }
        else {
            $('.navbar').removeClass('fixed');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});


/* LOAD IN VIEW ANIMATIONS */
       (function() {
var Util,
__bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

Util = (function() {
function Util() {}

Util.prototype.extend = function(custom, defaults) {
 var key, value;
 for (key in custom) {
   value = custom[key];
   if (value != null) {
     defaults[key] = value;
   }
 }
 return defaults;
};

Util.prototype.isMobile = function(agent) {
 return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
};

return Util;

})();

this.WOW = (function() {
WOW.prototype.defaults = {
 boxClass: 'wow',
 animateClass: 'animated',
 offset: 0,
 mobile: true
};

function WOW(options) {
 if (options == null) {
   options = {};
 }
 this.scrollCallback = __bind(this.scrollCallback, this);
 this.scrollHandler = __bind(this.scrollHandler, this);
 this.start = __bind(this.start, this);
 this.scrolled = true;
 this.config = this.util().extend(options, this.defaults);
}

WOW.prototype.init = function() {
 var _ref;
 this.element = window.document.documentElement;
 if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
   return this.start();
 } else {
   return document.addEventListener('DOMContentLoaded', this.start);
 }
};

WOW.prototype.start = function() {
 var box, _i, _len, _ref;
 this.boxes = this.element.getElementsByClassName(this.config.boxClass);
 if (this.boxes.length) {
   if (this.disabled()) {
     return this.resetStyle();
   } else {
     _ref = this.boxes;
     for (_i = 0, _len = _ref.length; _i < _len; _i++) {
       box = _ref[_i];
       this.applyStyle(box, true);
     }
     window.addEventListener('scroll', this.scrollHandler, false);
     window.addEventListener('resize', this.scrollHandler, false);
     return this.interval = setInterval(this.scrollCallback, 50);
   }
 }
};

WOW.prototype.stop = function() {
 window.removeEventListener('scroll', this.scrollHandler, false);
 window.removeEventListener('resize', this.scrollHandler, false);
 if (this.interval != null) {
   return clearInterval(this.interval);
 }
};

WOW.prototype.show = function(box) {
 this.applyStyle(box);
 return box.className = "" + box.className + " " + this.config.animateClass;
};

WOW.prototype.applyStyle = function(box, hidden) {
 var delay, duration, iteration;
 duration = box.getAttribute('data-wow-duration');
 delay = box.getAttribute('data-wow-delay');
 iteration = box.getAttribute('data-wow-iteration');
 return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
};

WOW.prototype.resetStyle = function() {
 var box, _i, _len, _ref, _results;
 _ref = this.boxes;
 _results = [];
 for (_i = 0, _len = _ref.length; _i < _len; _i++) {
   box = _ref[_i];
   _results.push(box.setAttribute('style', 'visibility: visible;'));
 }
 return _results;
};

WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
 var style;
 style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
 if (duration) {
   style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
 }
 if (delay) {
   style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
 }
 if (iteration) {
   style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
 }
 return style;
};

WOW.prototype.scrollHandler = function() {
 return this.scrolled = true;
};

WOW.prototype.scrollCallback = function() {
 var box;
 if (this.scrolled) {
   this.scrolled = false;
   this.boxes = (function() {
     var _i, _len, _ref, _results;
     _ref = this.boxes;
     _results = [];
     for (_i = 0, _len = _ref.length; _i < _len; _i++) {
       box = _ref[_i];
       if (!(box)) {
         continue;
       }
       if (this.isVisible(box)) {
         this.show(box);
         continue;
       }
       _results.push(box);
     }
     return _results;
   }).call(this);
   if (!this.boxes.length) {
     return this.stop();
   }
 }
};

WOW.prototype.offsetTop = function(element) {
 var top;
 top = element.offsetTop;
 while (element = element.offsetParent) {
   top += element.offsetTop;
 }
 return top;
};

WOW.prototype.isVisible = function(box) {
 var bottom, offset, top, viewBottom, viewTop;
 offset = box.getAttribute('data-wow-offset') || this.config.offset;
 viewTop = window.pageYOffset;
 viewBottom = viewTop + this.element.clientHeight - offset;
 top = this.offsetTop(box);
 bottom = top + box.clientHeight;
 return top <= viewBottom && bottom >= viewTop;
};

WOW.prototype.util = function() {
 return this._util || (this._util = new Util());
};

WOW.prototype.disabled = function() {
 return !this.config.mobile && this.util().isMobile(navigator.userAgent);
};

return WOW;

})();

}).call(this);


wow = new WOW(
{
animateClass: 'animated',
offset: 100
}
);
wow.init();


// Mailchimp handelbars

(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
