

// Preloader js
$(window).on('load', function () {
   $("#preloader").delay(450).fadeOut("slow");
});
    $("#status").fadeOut();
 
 
// ===== Scroll to Top ==== //
$(window).on ("scroll", function() {
  if ($(this).scrollTop() >= 100) {
      $('#return-to-top').fadeIn(200);
  } else {
      $('#return-to-top').fadeOut(200);
  }
});
$('#return-to-top').on('click', function() {
  $('body,html').animate({
      scrollTop: 0
  }, 500);
});


$(document).ready(function () {
  $(".sidebar-toggle , .sidebar-close").on("click", function () {
      $("#right-sidebar").toggleClass("open")
  });
});

$(document).ready(function () {
    $(".cart-wrapper, .cart-close").on('click', function () {
       $("#cart-sidebar").toggleClass("open")
    });
 });


$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
    });

$(function () {
    //adding a new class on button element
   

    
    //removing a existing class from button element
    $('.menu-click1 a').on('click',function () {
        $('.menu-click1').toggleClass('clicked');
    });

    
  
});


// 

  (function ($) {
          $(document).ready(function () {

              $('#cssmenu li.active').addClass('open').children('ul').show();
              $('#cssmenu li.has-sub>a').on('click', function () {
                  $(this).removeAttr('href');
                  var element = $(this).parent('li');
                  if (element.hasClass('open')) {
                      element.removeClass('open');
                      element.find('li').removeClass('open');
                      element.find('ul').slideUp(200);
                  }
                  else {
                      element.addClass('open');
                      element.children('ul').slideDown(200);
                      element.siblings('li').children('ul').slideUp(200);
                      element.siblings('li').removeClass('open');
                      element.siblings('li').find('li').removeClass('open');
                      element.siblings('li').find('ul').slideUp(200);
                  }
              });

          });
      })(jQuery);

      // menu fixed
      $(window).on ("scroll", function () {
          var window_top = $(window).scrollTop() + 1;
          if (window_top > 100) {
          $('.menu-items-wrapper').addClass('menu-fixed animated fadeInDown');
          } else {
          $('.menu-items-wrapper').removeClass('menu-fixed animated fadeInDown');
          }
      });
      
      // toggle cross btn js
      $(".toggle-main-wrapper , #toggle_close").on("click", function () {
          $("#sidebar").toggleClass("open")
      });


 //   vedio 

 var video = document.getElementById("myVideo");
 var btn = document.getElementById("myBtn");
 var para = document.getElementById("para");
 var mobVideo = document.getElementById("mobVideo");
 var btn3 = document.getElementById("myBtn3");
 function myFunction() {
   if (video.paused) {
     video.play();
     btn.src = "images/inner/pause.webp";
   } else {
     video.pause();
     btn.src ="images/inner/play-icon.png";
   
   }
 }
 function myFunction3() {
   if (mobVideo.paused) {
     mobVideo.play();
     btn3.src = "images/inner/pause.webp";
   } else {
     mobVideo.pause();
     btn3.src ="images/inner/play-icon.png";
    
   }
 }
 $(".click-btn, .overlay-video").on("click", function(){
 $(".main-img").toggleClass("disp-img");
 });
 $(".click-btn, .overlay-video").on("click", function(){
 $("#para").toggleClass("display-para");
 });


// toggle
$(document).ready(function() {
  $(".click-toggle").on('click', function() {
      $(".click-toggle").toggleClass("main");
  });
});

 // otp
 document.addEventListener("DOMContentLoaded", function(event) {
    function OTPInput() {
        const inputs = document.querySelectorAll('#otp > *[id]');
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('input', function(event) {
                if (event.inputType === "deleteContentBackward") {
                    inputs[i].value = '';
                    if (i !== 0) inputs[i - 1].focus();
                } else {
                    if (i === inputs.length - 1 && inputs[i].value !== '') {
                        return true;
                    } else if (/^[0-9]$/.test(event.data)) {
                        inputs[i].value = event.data;
                        if (i !== inputs.length - 1) inputs[i + 1].focus();
                    } else {
                        event.preventDefault();
                    }
                }
            });
        }
    }
    OTPInput();
});

    //  wow
new WOW().init();

// header slect

// $("#category, #sort").select2({
//     placeholder: "Select",
//     allowClear: true
// });

// increase decrease btn

function increaseValue(button, limit) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (limit && value >= limit) return;
    numberInput.innerHTML = value + 1;
 }

 function decreaseValue(button) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (value < 1) return;
    numberInput.innerHTML = value - 1;
 }



//  profile photo upload

$(document).ready(function() {
    var readURL = function(input) {
       if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
       }
    }
    $(".file-upload").on('change', function(){
       readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});

   

$('.home-slider-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.grocery-slider-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: true,
    nav:false,
    autoplay: false,
    smartSpeed: 1200,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('.alaq-product-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:5
        },
        1800:{
            items:5
        }
    }
})


$('.trending-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:5
        },
        1800:{
            items:5
        }
    }
})

$('.arrivals-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:5
        },
        1800:{
            items:5
        }
    }
})

$('.sales-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:5
        },
        1800:{
            items:5
        }
    }
})


$('.grocery-category-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:2
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:6
        },
        1800:{
            items:6
        }
    }
})


$('.cosmetic-post-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:1
        },
        767:{
            items:1
        },
        991:{
            items:2
        },
        1366:{
            items:2
        },
        1800:{
            items:2
        }
    }
})

$('.related-pro-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    dots: false,
    nav:true,
    autoplay: false,
    smartSpeed: 1200,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:1
        },
        767:{
            items:2
        },
        991:{
            items:3
        },
        1366:{
            items:4
        },
        1800:{
            items:4
        }
    }
})

$('.alaq-client-slider .owl-carousel').owlCarousel({
    center: true,                                                     
    loop:false,
    margin:20,
    dots: false,
    nav:true,
    smartSpeed: 1200,
    autoplay: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive:{
        0:{
          items:1
      },
      350:{
          items:1
      },
      600:{
          items:1
      },
      767:{
          items:2
      },
      1200:{
          items:3
      },
      1300:{
          items:3
      }
    }
  });

//  notification  js start

$(document).ready(function()
{
$("#notificationLink").on("click", function()
{
$("#notificationContainer").fadeToggle(300);
$("#notification_count").fadeOut("slow");
return false;
});

//Document Click hiding the popup 
$(document).on("click", function()
{
$("#notificationContainer").hide();
});

//Popup on click
$("#notificationContainer").on("click", function()
{
return false;
});

});


// blog  slider post js start

$('.blog_slider_wrapper  .owl-carousel').owlCarousel({
    center: true,                                                     
    loop:false,
    loop: true,
    nav: false,
    dots: true,
    smartSpeed: 1200,
    autoplay: true,
      responsive:{
        0:{
          items:1
      },
      350:{
          items:1
      },
      600:{
          items:1
      },
      767:{
          items:1
      },
      1200:{
          items:1
      },
      1300:{
          items:1
      }
    }
  });
