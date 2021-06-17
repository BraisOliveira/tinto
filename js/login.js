
let regalo = document.querySelector('#regalo');
//Precios
var precioBasic = document.getElementById("precioBasic");
var precioPlus = document.getElementById("precioPlus");
var precioPremium = document.getElementById("precioPremium");

let floatBasic = parseFloat(precioBasic.textContent);
let floatPlus = parseFloat(precioPlus.textContent);
let floatPremium = parseFloat(precioPremium.textContent);
let floatCesta = 12.0;
let floatBolsa = 5.0;
let floatDescuento10 = 0.9; //multiplicar para descontar 10%

(function(){
    "use strict";
    document.addEventListener('DOMContentLoaded', function(){
    //Datos usuario
    let nombre = document.querySelector('#nombre');
    let apellido = document.querySelector('#apellido');
    let email = document.querySelector('#email');

    //Paquetes - items
    let basic = document.querySelector('#basic');
    let plus = document.querySelector('#plus');
    let premium = document.querySelector('#premium');
    let cesta = document.querySelector('#cesta_ropa');
    let bolsa = document.querySelector('#bolsa_traje');

    //Botonera
    let botonCalcular = document.querySelector('#calcular');
    let divError = document.querySelector('#error');
    let botonRegistro = document.getElementById('btnRegistro');
    let lista_productos = document.querySelector('#lista_productos');
    let suma_total = document.querySelector('#suma_total');

    nombre.addEventListener('blur', validacionLogin);
    apellido.addEventListener('blur', validacionLogin);
    email.addEventListener('blur', validacionLogin);
    email.addEventListener('blur', validacionMail);
    //Metodos

    function validacionLogin() {
      if (this.value == '') {
        divError.style.display = 'block';
        divError.innerHTML = 'Campo obligatorio';
        this.style.border = '1px solid rgb(0,255,0)';
      } else {
        divError.style.display = 'none';
        this.style.border = '1px solid var(--secundario)';
      }
    };

    function validacionMail() { // Revisar para hacer una regex potente
      if (this.value.indexOf('@') >-1) {
        divError.style.display = 'none';
        this.style.border = '1px solid var(--secundario)';
      } else {
        divError.style.display = 'block';
        divError.innerHTML = 'Formato de coreo no v&aacute;lido';
        this.style.border = '1px solid rgb(0,255,0)';
      }
    };
    botonRegistro.setAttribute("type", "hidden");
    botonCalcular.addEventListener('click', function calcularPrecio(){
        if (regalo.value === '') {
            event.preventDefault();
            alert('Recuerda tu regalo!');
            regalo.focus();
        } else {
          let numBasic = basic.value,
              numPlus = plus.value,
              numPremium = premium.value,
              numCesta = cesta.value,
              numBolsa = bolsa.value;

          let pagoTotal = (floatBasic * numBasic) + (floatPlus * numPlus) + (floatPremium * numPremium)
          + (floatCesta * numCesta) + (floatDescuento10 * (floatBolsa * numBolsa));

          let listadoProductos = [];
          if (numBasic > 0) {
            listadoProductos.push(numBasic + ' meses de contrato Basic');
          }
          if (numPlus > 0) {
            listadoProductos.push(numPlus + ' meses de contrato Plus');
          }
          if (numPremium > 0) {
            listadoProductos.push(numPremium + ' meses de contrato Premium');
          }
          if (numCesta > 0) {
            listadoProductos.push(numCesta + ' cestas de ropa en el carrito');
          }
          if (numBolsa > 0) {
            listadoProductos.push(numBolsa + ' bolsas porta traje en el carrito');
          }

          lista_productos.style.display = 'block'; //oculto desde css , muestro desde js
          lista_productos.innerHTML = ''; // limpiar para que no se acumulen compras si se cambia un valor
          for (var i = 0; i < listadoProductos.length; i++) {
            lista_productos.innerHTML += listadoProductos[i] + '<br />';
          }
          suma_total.innerHTML = pagoTotal.toFixed(2) + ' €';
          botonRegistro.setAttribute("type", "submit");
          document.getElementById('totalPedido').value = pagoTotal;
        }
    });

  }); //cierre addEventListener
})();
