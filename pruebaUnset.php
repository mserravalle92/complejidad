<?php

$array = array("hola","chau","fuera");

$eliminar = "chau";


var_export($array);
echo "|||||||||||";

foreach($array as $i => $value){
	if($eliminar == $array[$i]){
		unset($array[$i]);
	}
}

var_export($array);
echo count($array);


