<?php
		
	class Palindromo 
		{
			var $frase;
						
			function __construct($fraseInicial)
				{
				$this->frase = $fraseInicial;
				}
				
			//método para conferir se a frase é palindromo ou não
			function conferir()
				{
				  $palindromo = "é um palíndromo.";
				  $naoPalindromo = "não é uma palíndromo.";

				  //substitui letras acentuadas por sem acentos
				  $this->frase = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$this->frase);

				  //retira todos os símbolos que não são alfanuméricos
				  $this->frase = preg_replace("/[^a-zA-Z0-9]/", "", $this->frase);

			      //deixa a string toda em maiúscula
			      $this->frase = strtoupper($this->frase);

			      //deixa a string ao contrário e salva em outra variável
			      $fraseReversa = strrev($this->frase);

			      //compara as strings
			      if($this->frase === $fraseReversa){
			      	return $palindromo;			        
			      	}

			      else{
			      	return $naoPalindromo;
			        }
			      
				}

			public function getFrase() 
			{
				return $this->frase;
			}
				 
			public function setFrase($frase) 
			{
				$this->frase = $frase;
			}

		}
?>