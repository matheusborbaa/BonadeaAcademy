jQuery(function() {
    
    jQuery(document).scroll(function () {

        var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        var index = 0;

        jQuery('.ancora').each(function(){

            elemento = jQuery(this);

            if( (elemento.offset().top - 150) <= scrollPos ){
                jQuery('.menu-scroll-float li').eq(index).addClass('secao-atual');
                jQuery('.menu-scroll-float li').not(':eq(' + index + ')').removeClass('secao-atual');
            }

            index++;

        });

    });

    if (jQuery( ".ancora" ).length ) {

        html_menu = "";

        var index = 0;

        jQuery('.ancora').each(function(){

            var elemento_titulo = jQuery(this).data('titulo');
            var elemento_slug = jQuery(this).attr('id');
            var classe_menu = "";
            
            if(index == 0){
                classe_menu = "secao-atual";
            }

            html_menu = html_menu + "<li class='" + classe_menu + "'><a href='#" + elemento_slug + "' data-index='" + index + "'>" + elemento_titulo + "</a></li>";
            index++;
    
        });
        
        jQuery("body").prepend('<div class="row-tags d-none d-md-block menu-scroll-float"><ul>' + html_menu + '</ul></div>').animate({
            "left": "0px"
          }, "slow");

    }

    jQuery(document).on('click', '.menu-scroll-float a', function(e){
        
        e.preventDefault();
        e.stopPropagation();

        var index = jQuery(this).data('index');
        var href = jQuery(this).attr('href');
        var elemento = jQuery(href);

        elemento.attr('id', '');


        jQuery('html, body').animate({
            scrollTop: jQuery('.ancora').eq(index).offset().top - 100
        }, 1000, function(){



        });

    
        setTimeout(function(){
            location.hash = href;
            elemento.attr('id', href.replace('#', ''));
          }, 2000);
    });


    jQuery(".grafico").each(function(){

        var elemento = jQuery(this);
        var elemento_id = jQuery(this).attr('id');
        var data_fundo = elemento.data('fundo-id');

        jQuery.ajax({
            dataType: "json",
            url: op.ajaxurl,
            data: {

                'action' : 'Grafico',
                'fundo' : data_fundo,

            },
            success: function(data){

                var ctx = document.getElementById(elemento_id).getContext('2d');
                var chart = new Chart(ctx, data);

            }

        });

    });

    jQuery(document).on('click', '.scroll-conteudo', function(e){

        e.preventDefault();

        elemento = jQuery(this);
        deslocamento = elemento.offset().top + elemento.height();

        jQuery('html, body').animate({ scrollTop: deslocamento}, 3000);
    
    });



    if (jQuery(window).width() < 700){

        jQuery(document).on('click', '.menu-item-has-children > a', function(e){

            e.preventDefault();
        
        });
        
    }




  jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();

    jQuery(".animar-esquerda").css({
        transform: 'matrix(1, 0, 0, 1, -' + scroll + ', -' + scroll + ')',
      });

      jQuery(".animar-direita").css({
        transform: 'matrix(1, 0, 0, 1, ' + scroll + ', -' + scroll + ')'
      });

      
      jQuery(".animar-saida-direita").each(function(){

        elemento = jQuery(this);

        calculo = (scroll + elemento.height()) - elemento.offset().top;

        //Só animar se estiver na tela
        if(calculo > 0){

            elemento.css({
                transform: 'matrix(1, 0, 0, 1, ' + calculo + ', 0)'
              });
    
        }
          
    
      });


      

      jQuery(".animar-topo").css({
        transform: 'matrix(1, 0, 0, 1, 0, -' + scroll + ')'
      });


        jQuery(".animar-fade").css("opacity", 1 - jQuery(window).scrollTop() / 250);

  });


    jQuery(document).on('click', '.btn-menu', function(e) {

        e.preventDefault();

        jQuery('.menu-holder, .black').toggleClass('d-none');

    })



});

jQuery('.slhome-excelencia').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slhome-abordagem').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slhome-investidor').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: true

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slhome-investidoraut').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: true

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slqs-valores').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slqs-qualidades').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slqs-equipe').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slia-distribuidores').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: true

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

jQuery('.slia-autonomos').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 9999,
            settings: 'unslick'
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 670,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: true,
                arrows: true

            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});