<?php

	include_once("Conta.php");

	class ContaCorrente extends Conta{
		private $taxa_manutencao;
		private $taxa_operacao;
		
		public function __construct($nome,$nro,$data,$saldo,$taxa_manutencao,$taxa_operacao){
			parent::__construct($nome,$nro,$data,$saldo);	
			$this->taxa_manutencao = $taxa_manutencao;
			$this->taxa_operacao = $taxa_operacao;
		}
		
		
		public function sacar($valor_saque){
			$this->saldo = $this->saldo - $valor_saque - $valor_saque * ( $this->taxa_operacao/ 100) ;
		}
		
		public function depositar($valor_deposito){
			$this->saldo = $this->saldo + $valor_deposito - $valor_deposito * ( $this->taxa_operacao/ 100) ;
		}

		public function verificacao_saque($valor_sauqe){
			if(($this->saldo - $valor_sauqe - $valor_sauqe * ($this->taxa_operacao / 100)) >= 0)
			{
				return(true);
			}
			else
			{
				return(false);
			}
		}
		
		public function exibe_dados($id){
			echo "
				<tr>
					<td>".$this->get_nro()."</td>
					<td>".$this->get_nome()."</td>
					<td>".$this->get_data_abertura()."</td>
					<td>$this->saldo</td>
					<td>$this->taxa_manutencao</td>
					<td>$this->taxa_operacao</td>
					<td>
						<a href='sacar.php?id=$id'>Sacar</a>

						<a href='depositar.php?id=$id'>Depositar</a>
					</td>
				</tr>";
		}
	}
	
?>