<?php
	class BeersModel{
		private $db;
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

		public function delete($id){
			try{
				$this->db->beers()->where("id",$id)->delete();
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}

		public function nuevo($cosas){
         try{
            $nuevo=$this->db->beers();
            $data=array(
                  'nombre'=> $cosas['nombre'],
                  'fabricante'=> $cosas['fabricante'],
                  'origen'=> $cosas['origen'],
                  'cantidad'=> $cosas['cantidad']


               );
         $nuevo->insert($data);
         return true;
         }catch(Exception $e){
            die($e->getMessage());
         }
      }

      public function obtener($id){
	    try{
	         $cervezas=$this->db->beers()->where('id',$id);
	         foreach ($cervezas as $r) {
	            $beer = new beers();


	            $beer->__SET('id', $r['id']);
	            $beer->__SET('nombre', $r['nombre']);
	            $beer->__SET('fabricante', $r['fabricante']);
	            $beer->__SET('origen', $r['origen']);
	            $beer->__SET('cantidad',$r['cantidad']);
	         }
	         return $beer;
	   } catch (Exception $e){
	         die($e->getMessage());
	   }


     }

     public function actualizar($elegida){
    	try{
				$update = array(
					'nombre'=>$elegida->__GET('nombre'),
					'fabricante'=>$elegida->__GET('fabricante'),
					'origen'=>$elegida->__GET('origen'),
					'cantidad'=>$elegida->__GET('cantidad'));
				$this->db->beers()->where('id',$elegida->__GET('id'))->update($update);
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
	}