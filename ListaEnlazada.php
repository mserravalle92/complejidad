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
  	$posAux = 0;
		//Verifico que si el inicial es null lo agregue al inicio.
		if ($this->inicial == null) {
			$this->inicial = $elem;
		}
		//sino hasta que las posiciones sean iguales busco el siguiente.
		else{
			while($posAux =! $pos){
				$this->inicial = $this->inicial->getSiguiente();
				$posAux +=1;
			}
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


		// Si el inicial es nulo no se puede encontrar.
		if ($this->inicial == null) {
			$encontrado = false;
		}

		//mientras encontrado sea falso verificamos si el inicial es igual al pedido
		else{
			while ($encontrado == false) {
				if($this->inicial === $elem){
					$encontrado = true;
				}

				// si no es igual que se obtenga el siguiente nodo mientras no sea null
				else{
					if ($this->inicial->getSiguiente() != null) {
						$this->incial == $this->inicial->getSiguiente();
					}
					//en caso de no encontrarse nada retorna falso y sale del bucle
					else{
						$encontrado == false;
						return $encontrado;
						break;
					}
				}

			}
		}

		return $encontrado;
	}





}
