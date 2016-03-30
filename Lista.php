<?php

require 'Recorredor.php';


	abstract class Lista(){

		(int)$tamanio;


		abstract public  function elemento((int) $pos){}
		abstract public function agregar((Object) $elem,int $pos){}
		abstract public function eliminar((Object) $elem){}
		abstract public function esVacia(){}
		abstract public function incluye((Object) $elem){}
		
		public function recorredor(){
			return new Recorredor();
		}
		
		public function getTamanio(){
			return $this->tamanio;
		}



	}

?>
