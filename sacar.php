<!DOCTYPE html>
<?php
	include("ContaCorrente.php");
	session_start();
?>
<html>
	<head lang="pt-BR">

		<title>a</title>
		<meta charset="utf-8">

	</head>
	<body>

		<h1>Saque</h1>
		<?php
			if(empty($_POST))
			{
				$id = $_GET["id"];
				$cc = $_SESSION["cc"][$id];
		?>
		<form method="post" action="sacar.php">
			Correntista: <?php echo $cc->get_nome();?>
			<br/>
			CC: (<?php echo $cc->get_nro();?>)
			<br/>
			Saldo: <?php echo $cc->get_saldo();?>
			<input type="number" name="valor" placeholder="valor do saque..." />
			<input type="hidden" name="id" value="<?php echo $id;?>" />
			<button>Sacar</button>
		</form>
		<?php
			}
			else
			{
				// implementar saque
				$valor=$_POST["valor"];
				$id=$_POST["id"];

				if($_SESSION["cc"][$id]->verificacao_saque($valor))
				{
					$_SESSION["cc"][$id]->sacar($valor);
					header("location:listar_cc.php"); //redireciona para a outra pagina.
				}
				else
				{
					echo 'erro <br/>
						 <a href = "listar_cc.php">Voltar para lista de contas</a>';
				}

			}
		?>

	</body>
</html>