<?php
	
require'Lista.php';
require 'Nodo.php';

public class ListaEnlazada extends Lista(){

	
	public function __construct((Nodo)$inicial){
		
		$this->inicial = $inicial;
		
	}		
	
	public function elemento((int)$pos){
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

