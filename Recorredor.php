<?php

require 'Lista.php';

public class Recorredor(){


	public function __construct((Lista)$lista,$actual){
	
		$this->lista = $lista;
		$this->actual = $actual
	}

	public function comenzar(){
		
	}

	public function elemento(){
		
		return $this->lista->elemento($this->actual);
	}
	
	public function proximo(){
		$this->actual += 1;
		return $this->lista->elemento($this->actual);
	}

	public function fin(){
		if($this->lista->esVacia()){
			return true;
		}
		else{
			return false;
		}
	}
		
	public function agregar($elem){
	
		$this->lista->agregar($elem,$this->actual);	
	
	}

	public function eliminar(){
		$this->lista->eliminar($this->lista->elemento($this->actual));
	}

}

