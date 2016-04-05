<?php



class Recorredor{

	var $actual;

	public function __construct($lista){

		$this->lista = $lista;
		$this->comenzar();
	}

	public function comenzar(){
		$this->actual =0;
	}

	public function elemento(){
		return $this->lista->elemento($this->actual);
	}

	public function proximo(){
		$this->actual += 1;
		// return $this->elemento();
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

	public function actual(){
		return $this->actual;
	}

}
