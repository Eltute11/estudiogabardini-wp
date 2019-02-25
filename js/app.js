jQuery(function($) {
    var options = {
      loop:true,
      margin:0,
      nav:true,
      dots:false,
      items:1,
      autoplay:true, 
      autoplayTimeout:5000, 
      autoplayHoverPause:true,
    };
    $("#owl-firma").owlCarousel(options);
    $("#owl-hero").owlCarousel(options);


    if($('body').hasClass('home')){
      responsive = {
        576:{
            items:5
        },
        992:{
            items:6
        },
        1200:{
            items:8
        }
      };
    }else{
      responsive = {
        576:{
            items:6
        },
        992:{
            items:8
        },
        1200:{
            items:13
        }
      };
    }

    var options_brand = {
      loop:true,
      margin: 25,
      nav:false,
      dots:true,
      items:4,
      autoplay:true, 
      autoplayTimeout:5000, 
      autoplayHoverPause:true,
      responsive: responsive
    };
    $("#owl-brand").owlCarousel(options_brand);

    var options_team = {
      loop:true,
      margin: 15,
      nav:true,
      dots:false,
      items:2,
      autoplay:true, 
      autoplayTimeout:5000, 
      autoplayHoverPause:true,
      responsive:{
        576:{
            items:3
        },
        992:{
            items:5
        },
        1200:{
            items:6
        }
      }
    };
    $("#owl-team").owlCarousel(options_team);

    // PARALLAX
    var ancho = $(window).width();
    if (ancho <= 415){
      $('.parallax').css({
        'background-attachment': 'scroll'
      });
    }else{
      // Resto del código parallax
      $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra * 0.30;
  
        $('.parallax').css({
          'background-position': '0 -' + posicion + 'px'
        });
      });
    }

  });