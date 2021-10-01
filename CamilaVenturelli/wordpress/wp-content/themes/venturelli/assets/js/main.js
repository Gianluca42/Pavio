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
    autoplay: 1,
    slideSpeed: 300,
  	paginationSpeed: 3000,
  	loop: !0,
    nav: 0,
    autoplayHoverPause: true,
    mouseDrag:0,
})

$('.bt-menu').click(function(){
  $('header').toggleClass('open')
  if (window.matchMedia("(max-width: 700px)").matches) {
      $('body').toggleClass('fixed')
    } else {

  }


})

$('.lightbox .bt-fechar').click(function(){
  $('.lightbox').fadeOut(800)
  $('.lightbox iframe').attr('src','')
  $('body').toggleClass('fixed')
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
    $('.container-projetos').fadeIn(400)
  }
  else{

    $('.container-projetos').fadeOut(400)
    $('.container-projetos[tipo='+selectedType+']').delay(400).fadeIn()

  }

})

$('.corpo .grupo .img-posts img').on('click', function() {
  $(this).siblings(".poster").fadeIn();
  $('body').addClass('fixed');
})
function fecharposter() {
  $('.poster').fadeOut();

  $('body').removeClass('fixed');

}
function abrirHashtag(parametro) {
  $(parametro).siblings(".classe-hash").fadeIn()
  $('body').addClass('fixed')
}
function fecharhashtag() {
  $('.classe-hash').fadeOut()

  $('body').removeClass('fixed')

}
document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
		fecharhashtag();
    fecharposter();
	}
});
function goBack() {
  window.history.back();
}
