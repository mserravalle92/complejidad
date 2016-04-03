<?php

	// require 'Lista.php';
	// require 'Nodo.php';

	class ListaConArreglo extends Lista{

		private $inicial = null;
		public $datos = array();

	public function elemento($pos){

		if ($this->datos[$pos]) {
			return $this->datos[$pos]->getDato();
		}
		else{
			return "No hay elemento en la posición $pos";
		}

	}

	public function agregar( $elem, $pos){
	  $this->datos[$pos] = $elem;
		$this->tamanio +=1;
  }

	public function eliminar($elem){
		foreach($this->datos as $i=>$value){
			if ($elem === $this->datos[$i]){
				unset($this->datos[$i]);
				$this->tamanio -= 1;
			}
		}
	}

	public function esVacia(){
		if(count($this->datos) == 0
		){
			return true;
		}
		else{
			return false;
		}
	}

	public function incluye($elem){

		$encontrado = false;

    foreach($this->datos as $i=>$value){

						if ($elem === $this->datos[$i]){
            	$encontrado = true;
							break;
            }
						else{
							$encontrado = false;
						}
    }

		return $encontrado;

	}


}
