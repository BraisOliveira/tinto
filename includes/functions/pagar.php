<?php

if (!isset($_POST['submit'])) {
  exit("Error en el registro");
}

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


require '../paypal.php';

$textPedido = "";

if (isset($_POST['submit'])) {
  $fecha = date('Y-m-d H:i:s');
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $basic = $_POST['basic'];
  $plus = $_POST['plus'];
  $premium = $_POST['premium'];
  $cesta_ropa = $_POST['cesta_ropa'];
  $bolsa_traje = $_POST['bolsa_traje'];
  $regalo = $_POST['regalo'];
  $total = $_POST['totalPedido'];
  $precioBasic = 44.00;
  $precioPlus = 77.00;
  $precioPremium = 99.00;
  $precioCesta = 12.00;
  $precioBolsa = 5.00;
  $numBasics = "";
  $numPlus = "";
  $numPremium = "";
  $numCestas = "";
  $numBolsas = "";
  if ($basic != "0") {
    $numBasics = "Contratando Basics = " . $basic;
  }
  if ($plus != "0") {
    $numPlus = "Contratando Plus = " . $plus;
  }
  if ($premium != "0") {
    $numPremium = "Contratando Premium = " . $premium;
  }
  if ($cesta_ropa != "0") {
    $numCestas = "Contratando cestas = " . $cesta_ropa;
  }
  if ($bolsa_traje != "0") {
    $numBolsas = "Contratando Premium = " . $bolsa_traje;
  }
  global $textPedido;
  $textPedido = "Se ha pedido: " . $numBasics . " " . $numPlus . " " . $numPremium . " " . $numBolsas . " " . $numCestas;


  try {
    require_once('connection.php');
    $stmt = $conn->prepare("INSERT INTO cliente(nombre_cliente, apellidos_cliente, email_cliente) VALUES(?,?,?)");
    $stmt->bind_param("sss", $nombre, $apellido, $email);
    $stmt->execute();
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }
  try {
    $stmt = $conn->prepare("INSERT INTO servicio_cliente(totalPedido, id_regaloFK, fecha, clienteEmail, pedido) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sisss", $total, $regalo, $fecha, $email, $textPedido,);
    $stmt->execute();
    $idRegistro = $stmt->insert_id;
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }
}

$compra = new Payer();
$compra->setPaymentMethod('paypal');
/*
ZONA PARA LA CREACION DE ARTICULOS - POO
*/

$matrizPedido = array();
if($basic > 0) {
$articulo0 = new Item();
$articulo0->setName('Basic')
      ->setCurrency('EUR')
      ->setQuantity((int) $basic)
      ->setPrice((float)$precioBasic);
array_push($matrizPedido, $articulo0);
}

if ($plus > 0){
$articulo1 = new Item();
$articulo1->setName('Plus')
        ->setCurrency('EUR')
        ->setQuantity((int) $plus)
        ->setPrice((float)$precioPlus);
array_push($matrizPedido, $articulo1);
}

if ($premium > 0){
$articulo2 = new Item();
$articulo2->setName('Premium')
        ->setCurrency('EUR')
        ->setQuantity((int) $premium)
        ->setPrice((float)$precioPremium);
array_push($matrizPedido, $articulo2);
}

if ($cesta_ropa > 0){
$articulo3 = new Item();
$articulo3->setName('Cesta')
        ->setCurrency('EUR')
        ->setQuantity((int) $cesta_ropa)
        ->setPrice((float) $precioCesta);
array_push($matrizPedido, $articulo3);
}

if ($bolsa_traje > 0) {
  $articulo4 = new Item();
  $articulo4->setName('Bolsa')
          ->setCurrency('EUR')
          ->setQuantity((int) $bolsa_traje)
          ->setPrice((float) $precioBolsa * .90);
array_push($matrizPedido, $articulo4);
}

/*  FIN ZONA CREACIONN DE ARTICULOS */

$listaArticulos = new ItemList();
$listaArticulos->setItems($matrizPedido);

$cantidad = new Amount();
$cantidad->setCurrency('EUR')
          ->setTotal($total);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago de los servivicios Tintorer&iacute;a Avenida')
               ->setInvoiceNumber($idRegistro);

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true&id_pago{$idRegistro}")
              ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false&id_pago{$idRegistro}");

$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));

     try {
       $pago->create($apiContext);
     } catch (PayPal\Exception\PayPalConnectionException $pce) {
       // Don't spit out errors or use "exit" like this in production code
       echo '<pre>';print_r(json_decode($pce->getData()));exit;
   }

$aprobado = $pago->getApprovalLink();

header("Location: {$aprobado}");
