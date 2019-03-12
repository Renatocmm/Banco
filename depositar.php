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

		<h1>Deposito</h1>
		<?php
			if(empty($_POST))
			{
				$id = $_GET["id"];
				$cc = $_SESSION["cc"][$id];
		?>
		<form method="post" action="depositar.php">
			Correntista: <?php echo $cc->get_nome();?>
			<br/>
			CC: (<?php echo $cc->get_nro();?>)
			<br/>
			Saldo: <?php echo $cc->get_saldo();?>
			<input type="number" name="valor" placeholder="valor do Deposito..." />
			<input type="hidden" name="id" value="<?php echo $id;?>" />
			<button>Depositar</button>
		</form>
		<?php
			}
			else
			{
				// implementar deposito
				$valor=$_POST["valor"];
				$id=$_POST["id"];

				$_SESSION["cc"][$id]->depositar($valor);
				header("location:listar_cc.php"); //redireciona para a outra pagina.
			}
		?>

	</body>
</html>