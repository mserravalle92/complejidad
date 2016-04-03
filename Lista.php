<?php


abstract class Lista{

		var $tamanio = 0;

		abstract public  function elemento($pos);
		abstract public function agregar($elem,$pos);
		abstract public function eliminar($elem);
		abstract public function esVacia();
		abstract public function incluye($elem);

		public function recorredor(){
			return new Recorredor();
		}

		public function getTamanio(){
			return $this->tamanio;
		}



	}

?>
