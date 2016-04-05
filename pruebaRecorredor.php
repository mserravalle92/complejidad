<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'Lista.php';
require 'ListaEnlazada.php';
require 'Nodo.php';
require 'Recorredor.php';

$nodo = new Nodo();
$nodo->setDato("Nodo1");

$nodo2 = new Nodo();
$nodo2->setDato("Nodo2");

$nodo3 = new Nodo();
$nodo3->setDato("Nodo3");


$listaEnlazada = new ListaEnlazada();
$recorredor = $listaEnlazada->recorredor();

$recorredor->agregar($nodo);
echo "Iteraci�n: ".$recorredor->actual()." <br />";
var_dump($recorredor->elemento());
$recorredor->proximo();
echo "<br/>";
echo "<br/>";
$recorredor->agregar($nodo2);
echo "Iteraci�n: ".$recorredor->actual()." <br />";
var_dump($recorredor->elemento());
$recorredor->proximo();
echo "<br/>";
echo "<br/>";
$recorredor->agregar($nodo3);
echo "Iteraci�n: ".$recorredor->actual()." <br />";
var_dump($recorredor->elemento());
echo "<br/>";
echo "<br/>";

$recorredor->eliminar();
var_dump($recorredor->elemento());



 ?>
