(function($) {
    $(document).ready(function() {
		
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			gtag('event', 'conversion', {'send_to': 'AW-11002575482/7wt1CPzxmOUDEPr0t_4o'});
			gtag('event', 'conversion', {'send_to': 'AW-11002575482/TzHnCKeS_bwYEPr0t_4o'});
			fbq ( 'trackCustom' , 'Contact form lead' , { Formulario : 'Formulario de reserva de cita' });
			console.log("Google ads conversion sent to AW-11002575482/TzHnCKeS_bwYEPr0t_4o");
		});
		

var disableSubmit = false;

jQuery('input.wpcf7-submit[type="submit"]').click(function() {
    jQuery(':input[type="submit"]').attr('value', "Enviando...");

    if (disableSubmit == true) {
        return false;
    }
    disableSubmit = true;
    return true;
});

var wpcf7Elm = document.querySelector('.wpcf7');
wpcf7Elm.addEventListener('wpcf7submit', function(event) {
    jQuery(':input[type="submit"]').attr('value', "Enviar");
    disableSubmit = false;
}, false);



		
		
		
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $("#masthead").addClass("bgactive");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("#masthead").removeClass("bgactive");
            }
        });
		
		
        $( ".navbar-toggler" ).click(function() {
            $('#main-menu-wrapper').toggleClass('open');
        });
        $( ".js-close" ).click(function() {
            $('#main-menu-wrapper').toggleClass('open');
        });
        $( ".slide-link" ).click(function(e) {
            e.preventDefault();
          $('html, body').animate({
                scrollTop: $($(this).find('a').attr('href')).offset().top - 200
            }, 500);
            $('#main-menu-wrapper').removeClass('open');
        });
        $(".js-height").bind("change paste keyup", function() {
		  if($(".js-weight").val() != "" ) {
			  var IMC = FigureBMI($('.js-height').val(), parseInt($('.js-weight').val()) );
			  if(!isNaN(IMC) && IMC != Infinity) {
				 $('.js-total').val(IMC);
				 }else {
				   $('.js-total').val("--"); 
			  }
			  
			 } 
		});
		$(".js-weight").bind("change paste keyup", function() {
		  if($(".js-height").val() != "" ) {
			 var IMC = FigureBMI($('.js-height').val(), parseInt($('.js-weight').val()) );
			  
			  if(!isNaN(IMC) && IMC != Infinity) {
				 $('.js-total').val(IMC); 
			  }else {
				   $('.js-total').val("--"); 
			  }
			 } 
		});
		
		function FigureBMI(inches, pounds) {
			Meters = 0;
			switch(inches) {
                case `4'`:
                    Meters = 1.22;
                    break;
                case `4' 1"`:
                    Meters = 1.24;
                    break;
                case `4' 2"`:
                    Meters = 1.27;
                    break;
                case `4' 3"`:
                    Meters = 1.30;
                    break;
                case `4' 4"`:
                    Meters = 1.32;
                    break;
                case `4' 5"`:
                    Meters = 1.35;
                    break;
                case `4' 6"`:
                    Meters = 1.37;
                    break;
                case `4' 7"`:
                    Meters = 1.40;
                    break;
                case `4' 8"`:
                    Meters = 1.42;
                    break;
                case `4' 9"`:
                    Meters = 1.45;
                    break;
                case `4' 10"`:
                    Meters = 1.47;
                    break;
                case `4' 11"`:
                    Meters = 1.50;
                    break;
                case `5'`:
                    Meters = 1.52;
                    break;
                case `5' 1"`:
                    Meters = 1.55;
                    break;
                case `5' 2"`:
                    Meters = 1.57;
                    break;
                case `5' 3"`:
                    Meters = 1.60;
                    break;
                case `5' 4"`:
                    Meters = 1.63;
                    break;
                case `5' 5"`:
                    Meters = 1.65;
                    break;
                case `5' 6"`:
                    Meters = 1.68;
                    break;   
                case `5' 7"`:
                    Meters = 1.70;
                    break;      
                case `5' 8"`:
                    Meters = 1.73;
                    break;     
                case `5' 9"`:
                    Meters = 1.75;
                    break; 
                case `5' 10"`:
                    Meters = 1.78;
                    break; 
                case `5' 11"`:
                    Meters = 1.80;
                    break; 
                case `6'`:
                    Meters = 1.83;
                    break; 
                case `6' 1"`:
                    Meters = 1.85;
                    break; 
                case `6' 2"`:
                    Meters = 1.88;
                    break; 
                case `6' 3"`:
                    Meters = 1.91;
                    break; 
                case `6' 4"`:
                    Meters = 1.93;
                    break; 
                case `6' 5"`:
                    Meters = 1.95;
                    break; 
                case `6' 6"`:
                    Meters = 1.98;
                    break; 
                case `6' 7"`:
                    Meters = 2.01;
                    break; 
                case `6' 8"`:
                    Meters = 2.03;
                    break;        
			}
			Kilos = pounds/2.2;
			Square = Meters * Meters;
			console.log(Math.round(Kilos / Math.pow(Meters, 2)));
			return Math.round(Kilos / Math.pow(Meters, 2));
		}
    });

})(jQuery);