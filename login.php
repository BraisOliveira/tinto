<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2 class="sesion-scroll">Inicio de sesi&oacute;n</h2>
    <form id="registro" class="registro" action="includes/functions/pagar.php" method="post">
      <div id="datos_usuario" class="clearfix registro">
        <div id="error" class="error">

        </div>
        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre">
        </div>
        <div class="campo">
          <label for="apellido">Apellidos</label>
          <input type="text" id="apellido" name="apellido">
        </div>
        <div class="campo">
          <label for="email">E-mail</label>
          <input type="text" id="email" name="email">
        </div>
      </div> <!-- fin toma de datos cliente -->

      <div id="paquetes" class="paquetes">
        <h3>Contrata tu tarifa</h3>
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Basic</h3>
              <p id="precioBasic" class="numero">44.00€</p>
              <ul>
                <li><i class="fas fa-check"></i>Una recogida semanal</li>
                <li><i class="fas fa-check"></i>Una de nuestras bolsas llena</li>
                <li><i class="fas fa-check"></i>En 24 horas tendrás tu ropa limpia, seca y doblada</li>
              </ul>
              <div class="orden">
                <label for="basic">Olvidarme durante </label>
                <input type="number" min="0" name="basic" value="0" id="basic" size="3">
                <span>meses</span>
              </div>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
                      <h3>Plus</h3>
                      <p id="precioPlus" class="numero">77.00€</p>
              <ul>
                <li><i class="fas fa-check"></i>Una recogida semanal</li>
                <li><i class="fas fa-check"></i>Dos de nuestras bolsas llenas</li>
                <li><i class="fas fa-check"></i>Selecciona 5 prendas que quieres que te planchemos</li>
                <li><i class="fas fa-check"></i>En 48 horas tendr&aacute;s tu ropa limpia, seca, doblada y planchada</li>
              </ul>
              <div class="orden">
                <label for="plus">Olvidarme durante </label>
                <input type="number" min="0" name="plus" value="0" id="plus" size="3">
                <span>meses</span>
              </div>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Premium</h3>
              <p id="precioPremium" class="numero">99.00€</p>
              <ul>
                <li><i class="fas fa-check"></i>Una recogida semanal</li>
                <li><i class="fas fa-check"></i>Dos de nuestras bolsas llenas</li>
                <li><i class="fas fa-check"></i>Selecciona 12 prendas que quieres que te planchemos</li>
                <li><i class="fas fa-check"></i>En 48 horas tendr&aacute;s tu ropa limpia, seca, doblada y planchada</li>
              </ul>
              <div class="orden">
                <label for="premium">Olvidarme durante <input type="number" min="0" name="premium" value="0" id="premium" size="3"> meses</label>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div id="resumen" class="clearfix resumen">
        <h3 class="finalizar-scroll">Finalizar compra</h3>
        <div class="clearfix caja">
          <div class="extras">
            <div class="orden">
              <label for="cesta_ropa">Cesta para la ropa 12€</label>
              <input type="number" id="cesta_ropa" name="cesta_ropa" value="0" size="2" min="0">
            </div>
            <div class="orden">
              <label for="bolsa_traje">Bolsa con percha para traje 5€ <small>(Promo -10%)</small></label>
              <input type="number" id="bolsa_traje" name="bolsa_traje" value="0" size="2" min="0">
            </div>
            <div class="orden">
                <label for="regalo">¡Selecciona uno de nuestros regalos!</label>
                <select id="regalo" class="regalo" name="regalo" required>
                  <option value="">Selecciona el que m&aacute;s te guste</option>
                  <option value="1">Entrada Multicines Yelmo</option>
                  <option value="2">Pizza familiar Pizza Pepe</option>
                </select>
            </div>
            <input type="button" id="calcular" class="boton" name="calcular" value="calcular">
          </div> <!-- .extras -->
          <div class="total">
            <p>Resumen</p>
            <div id="lista_productos" class="">

            </div>
            <p>Total</p>
            <div id="suma_total">

            </div>
            <input type="hidden" name="totalPedido" id="totalPedido">
            <input id="btnRegistro" class="boton" name="submit" value="Pagar" type="submit">
          </div>
        </div><!-- .caja -->
      </div>
    </form>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>

<script src="js/login.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/main.js"></script>

<div class="footer-scroll">
  <?php include 'includes/templates/footer.php'; ?>
</div>
</body>
</html>
