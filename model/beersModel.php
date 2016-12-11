<?php
	class BeersModel{
		public function __CONSTRUCT(){
			try{
				$this->pdo = new PDO('sqlite:baseDatos.sqlite');
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->db=new NotORM($this->pdo);
			}catch(Exception $e){
				die($e->getMessage());
			}
		}
	

		public function mostrarBeers(){
			
			try{
				$result= array();
				$beers= $this->db->beers();
				foreach ($beers as $b) {
					$beer= new Beers();
					$beer->__SET('id',$b['id']);
					$beer->__SET('nombre',$b['nombre']);
					$beer->__SET('fabricante',$b['fabricante']);
					$beer->__SET('origen',$b['origen']);
					$beer->__SET('cantidad',$b['cantidad']);
					$result[]=$beer;
				}
				return $result;
			}catch(Exception $e){
				die($e->getMessage());
			}
			
		}
	}