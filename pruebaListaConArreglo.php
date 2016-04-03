<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '0');


require 'Lista.php';
require 'ListaConArreglo.php';
require 'Nodo.php';

$listaConArreglo = new ListaConArreglo();

$nodo = new Nodo();
$nodo->setDato("nodo");
$nodo2 = new Nodo();
$nodo2->setDato("nodo2");
$nodo3 = new Nodo();
$nodo3->setDato("nodo3");



$listaConArreglo->agregar($nodo,0);
$listaConArreglo->agregar($nodo3,1);


echo "nodo3: ";
var_dump($listaConArreglo->incluye($nodo3));
echo "<br> nodo: ";
var_dump($listaConArreglo->incluye($nodo));


// $listaConArreglo->eliminar($nodo);
// $listaConArreglo->eliminar($nodo3);
echo "<br>-------------------------------------------<br>";
echo "<br> nodo incluye: ";

var_dump($listaConArreglo->incluye($nodo));
echo "<br> nodo3 incluye: ";
var_dump($listaConArreglo->incluye($nodo3));


echo "<br>-------------------------------------------<br>";
echo "<br> Ahora está vacía?: ";
var_dump($listaConArreglo->esVacia());

echo "<br>-------------------------------------------<br>";
echo "Tamaño: ";
echo $listaConArreglo->getTamanio();

echo "<br>-------------------------------------------<br>";
$pos = 2;
echo "Elemento en la posición $pos: ";
echo $listaConArreglo->elemento($pos);

?>
