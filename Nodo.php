<?php

	public class Nodo(){
	
		private $dato;
		private $nodo;

		public function getDato(){
			return $this->dato;
		}

		public function setDato($elem){
			$this->dato = $elem;
		}

		public function getSiguiente(){
			return $this->nodo;
		}

		public function setSiguiente($siguiente){
			$this->nodo = $siguiente;
		}
	
	}
