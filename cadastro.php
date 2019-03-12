<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	
	<body>

		<?php
		if(empty($_GET)){
		?>
		<h1>Tipo Conta</h1>
		<form method="get" action="cadastro.php">
		
			<input type="radio" name="conta" value="poupanca" />
			Poupança 


			<input type="radio" name="conta" value="corrente" />
			Corrente 
			<br /><br />
			<button>Próximo</button>
		</form>
		<?php
		}
		else{
		?>
			<form method="post" action="insere_cadastro.php">
			
				<input type="text" name="cliente" 
					placeholder="Digite o nome do cliente..." />
				<br /><br />
				
				<input type="number" name="nro" 
					placeholder="Digite o nro da conta..." />
				<br /><br />

				<input type="date" name="data_abertura"
							placeholder="digite a data de abertura..." /> 
				<br /><br />
				

				<input type="number" name="saldo"
							placeholder="digite o saldo inicial..." /> 
				<br /><br />

				<?php
				if($_GET["conta"]=="corrente"){
				?>
				<input type="number" name="taxa_manutencao"
							placeholder="digite a taxa de manutenção..." />
				<br /><br />
				<input type="number" name="taxa_operacao"
							placeholder="digite a taxa de operacao (%)..." />
				<br /><br />

				<?php
				}
				else{
				?>
				<input type="number" name="taxa_rendimento"
							placeholder="digite a taxa de rendimento..." />
				<br /><br />

				<?php
				}
				?>
				
				<input type="hidden" name="conta"
							value="<?php echo $_GET["conta"];?>" />
				<br /><br />
				<button>Próximo</button>
			</form>
		<?php
		}
		?>
	</body>
</html>