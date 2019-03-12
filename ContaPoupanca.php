<?php

	include_once("Conta.php");

	class ContaPoupanca extends Conta{
		private $taxa_rendimento;
		
		public function __construct($nome,$nro,$data,$saldo,$taxa_rendimento){
			parent::__construct($nome,$nro,$data,$saldo);	
			$this->taxa_rendimento = $taxa_rendimento;
		}
		
		
		public function sacar($valor_saque){
			$this->saldo = $this->saldo - $valor_saque;
		}
		
		public function depositar($valor_deposito){
			$this->saldo = $this->saldo + $valor_deposito;
		}

		public function sacarRendimento($valor_rendimento){
			$this->saldo = $this->saldo * $taxa_rendimento;
		}
		
		public function exibe_dados(){
			echo "
				<tr>
					<td>".$this->get_nro()."</td>
					<td>".$this->get_nome()."</td>
					<td>".$this->get_data_abertura()."</td>
					<td>$this->saldo</td>
					<td>$this->taxa_rendimento</td>
				</tr>";
		}
	}
	
?>