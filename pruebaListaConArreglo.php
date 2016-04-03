<?php


require 'Lista.php';
require 'ListaConArreglo.php';
require 'Nodo.php';

$listaConArreglo = new ListaConArreglo();


//*************Creo y Agrego Nodos*******************
$nodo = new Nodo();
$nodo->setDato("nodo");

$nodo2 = new Nodo();
$nodo2->setDato("nodo2");

$nodo3 = new Nodo();
$nodo3->setDato("nodo3");



$listaConArreglo->agregar($nodo,0);
$listaConArreglo->agregar($nodo3,1);


//**********************Verifico si existen **********************
echo "nodo3: ";
var_dump($listaConArreglo->incluye($nodo3));
echo "<br> nodo: ";
var_dump($listaConArreglo->incluye($nodo));



//******************Elimino Nodos *******************************
$listaConArreglo->eliminar($nodo);
// $listaConArreglo->eliminar($nodo3);


//************** Verifico que no existan los eliminados **********************
echo "<br>-------------------------------------------<br>";
echo "<br> nodo incluye: ";

var_dump($listaConArreglo->incluye($nodo));
echo "<br> nodo3 incluye: ";
var_dump($listaConArreglo->incluye($nodo3));

///************Verifico otros datos de la Lista *************************

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
