<?php
	
	require 'Lista.php';
	require 'Nodo.php';

	public class LiscaConArreglo extends Lista(){

		private (int) $inicial;
	
	public function elemento((int)$pos){
	
		return $this->datos[$pos];
	}

	public function agregar((Object)$elem,(int)$pos){
                $this->datos[$pos] = $elem;
        }

	public function eliminar((Object)$elem){
		foreach($this->datos as $i=>$value){
			if ($elem == $this->datos[$i]){
				unset($this->datos[$i]);
			}
		}
	}

	public function esVacia(){
		if(count($this->datos == 0)){
			return true;
		}
		else{
			return false;
		}		
	}

	public function incluye((Object)$elem){

		$encontrado = false;

                foreach($this->datos as $i=>$value){
                        if ($elem == $this->datos[$i]){
                        	$encontrado = true;
				break();
                        }
			else{
				$encontrado = false;
			}
                }

		return $encontrado;
        }


}

