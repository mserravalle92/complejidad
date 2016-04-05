<?php

class ListaEnlazada extends Lista{

	var $inicial = null;


	public function elemento($pos){
		$posAux=0;
		$elemAux = $this->inicial;

		if($pos == $posAux){
			return $elemAux;
		}
		elseif($this->inicial==null){
				return $elemAux;
		}
		else{
			if ($elemAux->getSiguiente()!= null) {
				while($elemAux->getSiguiente()!= null){
					if($pos == $posAux){
						return $elemAux;
					}
					else{
						$elemAux = $elemAux->getSiguiente();
						$posAux +=1;
					}
				}
			}
			else{
				if ($pos == $posAux) {
					return $elemAux;
				}
				$elemAux = null;
			}
		}
		return $elemAux;
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
			if ($actual == $pos) {
				$this->inicial = $elem;
			}
			else{
				$this->inicial->setSiguiente($elem);
			}
		}
	}

	public function eliminar($elem){

		if ($this->inicial === $elem) {
			$this->inicial = null;
		}
		else{
			while ($this->inicial->getSiguiente() != null) {
				if ($this->inicial === $elem) {
					$this->inicial = null;
				}
				else{
					$this->inicial = $this->inicial->getSiguiente();
					if($this->inicial === $elem){
						$this->inicial = null;
						break;
					}
				}
			}
		}

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
