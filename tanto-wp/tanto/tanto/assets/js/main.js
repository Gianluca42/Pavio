$(document).ready(function () {
    $('body').delay(400).fadeIn(1000)

    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 100) {
        $('header').addClass('desce');
      } else {
        $('header').removeClass('desce');
      }
    });

});

$(".carrossel").owlCarousel({
    items: 1,

    slideSpeed: 300,
  	paginationSpeed: 3000,

    nav: 0,
    autoplayHoverPause: true,
    mouseDrag:0,
    autoplay: true,
    lazyLoad: true,
    loop: true,

     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,

})

$('.bt-menu').click(function(){
  $('header').toggleClass('open')
  $('body').toggleClass('fixed')
})
$('.trailer').click(function(){
   link = $(this).attr( "link" );
     $('.emcima iframe').attr('src',"https://www.youtube.com/embed/"+link);
  $('.emcima').delay(400).fadeIn();

})
$('.emcima .bt-fechar').click(function(){
  $('.emcima').fadeOut(800)
  $('.emcima iframe').attr('src','')
  
})

$('.lang-btn button').on('click', function() {
  idioma = $(this).attr('lg-op')
  $('.lang-btn button').removeClass('active')
  $('.lang-btn button[lg-op='+idioma+']').addClass('active')
  $('.multi-lang:not(.'+idioma+')').fadeOut(800)
  $('.'+idioma).delay(800).fadeIn(800)
})




$('.sub-menu-projetos nav ul li').on('click', function() {
  $('.sub-menu-projetos nav ul li').removeClass('active')
  $(this).addClass('active')

  selectedType = $(this).attr('tipo')

  if(selectedType=='todos'){
    $('.bloco').fadeIn(400)
  }
  else{

    $('.bloco').fadeOut(400);
    $('.bloco').each(function(index, value) {
      if($(this).attr( "tipo" ).indexOf(selectedType) != -1){
        $(this).delay(400).fadeIn();
      }
    });


  }

})

function Acordeon(){
  $( ".acordeonON" ).slideToggle( "slow" );

}
function AcordeonPre(){
  $( ".acordeonPre" ).slideToggle( "slow" );

}
