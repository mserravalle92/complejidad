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

$nodo3 = new Nodo();
$nodo3->setDato("Nodo3");


$listaEnlazada = new ListaEnlazada($nodo);

// echo "Esta vacia?: ";
//
// var_dump($listaEnlazada->esVacia());

$listaEnlazada->agregar($nodo,0);

//
echo "Siguiente del Nodo 1: ";
var_export($nodo->getSiguiente());
//
echo "<br>------------------------<br>";
//

//***********************Agrego nodo 2*************************

$listaEnlazada->agregar($nodo2,1);

echo "Incluye Nodo 2?: ";

var_dump($listaEnlazada->incluye($nodo2));


echo "<br>------------------------<br>";

echo "Siguiente del Nodo 1: ";

var_export($nodo->getSiguiente());


echo "<br>------------------------<br>";
echo "Incluye Nodo 2 antes de agregar?: ";

var_dump($listaEnlazada->incluye($nodo2));

echo "<br>------------------------<br>";


//***********************Agrego nodo 3*************************
$listaEnlazada->eliminar($nodo2);

$listaEnlazada->agregar($nodo3,2);
echo "Incluye Nodo 3?: ";
var_dump($listaEnlazada->incluye($nodo3));
echo "<br>------------------------<br>";

echo "Siguiente del Nodo 1 y del dos: ";
var_export($nodo->getSiguiente());


echo "<br>------------------------<br>";

echo "Siguiente del Nodo 2: ";
var_export($nodo2->getSiguiente());


echo "<br>------------------------<br>";
echo "Ahora esta vacia?: ";

var_dump($listaEnlazada->esVacia());

echo "<br>------------------------<br>";

// var_export($nodo2->getSiguiente());

echo "Nodo3 eliminado esta? ";
var_dump($listaEnlazada->incluye($nodo3));

echo "<br>------------------------<br>";
 ?>
