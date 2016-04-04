<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'Lista.php';
require 'ListaEnlazada.php';
require 'Nodo.php';

$nodo = new Nodo();
$nodo->setDato("Nodo1");

$nodo2 = new Nodo();
$nodo2->setDato("Nodo2");


$nodo->setSiguiente($nodo2);

$listaEnlazada = new ListaEnlazada($nodo);

var_dump($listaEnlazada->esVacia());

$listaEnlazada->agregar($nodo,3);

var_dump($listaEnlazada->esVacia());

$listaEnlazada->agregar($nodo2,1);

var_dump($listaEnlazada->incluye($nodo2));

 ?>
