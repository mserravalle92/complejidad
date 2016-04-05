<?php

class ListaEnlazada extends Lista{

	var $inicial = null;


	public function elemento($pos){
		$posAux=0;

		while($this->inicial->getSiguiente()!= null){
			if($pos == $posAux){
				return $this->inicial;
			}
			else{
				$this->inicial = $this->inicial->getSiguiente();
				$posAux +=1;
			}
		}
		return $this->inicial;
	}

	public function agregar($elem,  $pos){
		$actual = 0;
  	if ($this->inicial == null) {
  		$this->inicial = $elem;
  	}
		else{
			while ( $this->inicial->getSiguiente() != null) {
				$this->inicial = $this->inicial->getSiguiente();
				$actual +=1;
			}
			$this->inicial->setSiguiente($elem);
		}
	}

	public function eliminar($elem){

	}

	public function esVacia(){
		if ($this->inicial == null) {
			return true;
		}
		else{
			return false;
		}
	}

	public function incluye($elem){
		$encontrado = false;
		//creo un elemento auxiliar con el elemento inicial para no setear el inicial con otro nodo
		$elemAux = $this->inicial;
		// Si el inicial es nulo no se puede encontrar.
		if ($elemAux == null) {
			$encontrado = false;
		}

		//mientras encontrado sea falso verificamos si el inicial es igual al pedido

		else{
			while ($encontrado == false and $elemAux != null) {
				if ($elemAux === $elem) {
					$encontrado = true;
					break;
				}
				$elemAux = $elemAux->getSiguiente();
			}
		}
		return $encontrado;
		}


	}
