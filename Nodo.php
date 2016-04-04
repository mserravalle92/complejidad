<?php

	class Nodo{

		private $dato = null;
		private $siguiente = null;

		public function getDato(){
			return $this->dato;
		}

		public function setDato($elem){
			$this->dato = $elem;
		}

		public function getSiguiente(){
			return $this->siguiente;
		}

		public function setSiguiente($siguiente){
			$this->siguiente = $siguiente;
		}

	}
