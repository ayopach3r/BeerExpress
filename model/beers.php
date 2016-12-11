<?php
	class Beers{
		private $id;
		private $nombre;
		private $fabricante;
		private $origen;
		private $cantidad;

		public function __GET($k){
			return $this->$k;
		}
		
		public function __SET($k, $v){
			return $this->$k = $v;
		}
	}