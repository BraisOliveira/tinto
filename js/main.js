//Mapa
function initMap() {
  const tinto = { lat: 43.355478124597276, lng: -8.4122251063275455 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: tinto,
  });
  const marker = new google.maps.Marker({
    position: tinto,
    map: map,
  });
}

$(function(){
  //Plugin lettering.js
  $('.nombre-sitio').lettering();

  $('body.nosotros .navegacion-principal a:contains("Nosotros")').addClass('activo');
  $('body.servicios .navegacion-principal a:contains("Servicios")').addClass('activo');
  $('body.contacto .navegacion-principal a:contains("Contacto")').addClass('activo');

  //nav scroll
  let alturaVentana = $(window).height();
  let alturaMenu = $('.barra').innerHeight();

  $(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if (scroll > alturaVentana) {
      $('.barra').addClass('fijada');
      $('body').css({'marigin-top': alturaMenu + 'px'});
    } else {
      $('.barra').removeClass('fijada');
      $('body').css({'marigin-top': '0px'});
    }
  });

//nav Responsive
let par = 0;
let contador = 0;
$('.menu-movil').on('click', function(){
  contador++;
    if (contador % 2 == !par) {
        $('.navegacion-principal').show();
    } else if (contador > 0) {
      contador = 0;
      $('.navegacion-principal').hide();
    }
  });

  $('.info:first').show();
  $('.nav-promo a:first').addClass('activo');

  $('.nav-promo a').on('click', function(){
    $('#nav-promo_caballero').removeClass('activo');
    $('#nav-promo_cama').removeClass('activo');
    $('#nav-promo_novia').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    let enlace = $(this).attr('href');
    $(enlace).fadeIn(500);

    return false;
  })
})
