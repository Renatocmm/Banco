<?php

	class Conta{
		private $nome;
		private $nro;
		private $data_abertura;
		protected $saldo;
		
		protected function __construct($nome,$nro,$data_abertura,$saldo){
			$this->nome = $nome;
			$this->nro = $nro;
			$this->data_abertura = $data_abertura;
			$this->saldo = $saldo;
		}
		
		public function get_nome(){
			return($this->nome);
		}
		
		public function get_nro(){
			return($this->nro);
		}

		public function get_data_abertura(){
			return($this->data_abertura);
		}

		public function get_saldo(){
			return($this->saldo);
		}

	}
	
?>