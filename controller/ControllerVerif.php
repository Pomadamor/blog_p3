<?php


	class Verif{

		public function verifRempli($chaine){
			if(!empty($chaine)){
					//return $this->_chaine;
					return true;
			}return false;
		}

		public function verifSecure($chaine){
			if($this->verifRempli($chaine)){
				$forbidden = array("<",">","/","\\");
				foreach ($forbidden as $value){
					if (strpos($chaine, $value)){
						return false;
					}
				}return $chaine;
				//return true;
			}
		}

		public function verifMail($mail){
			if($this->verifRempli($mail) ){
			   if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
				   //return true;
					return htmlentities($mail);
			   }
			}else return false;
		}
	}
