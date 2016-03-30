<?php

$array = array("hola","chau","fuera");

$elem = "pepe";



$encontrado = false;

var_export($encontrado);

echo "||||||||||||||||";

foreach($array as $i=>$value){

	if ($elem == $array[$i]){
             	$encontrado = true;
                       	break;
                }
                else{
                        $encontrado = false;
                }
  
         }

var_export($encontrado);

