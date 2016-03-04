<?php 
	session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<script src="jquery-1.12.0.min.js"></script>
	<style type="text/css">
	.rs{
		border:;
		text-align: center;

	}
	</style>
	</head>
	<body>
		<div class="rs">
			<?php
			if(isset($_POST['submit'])){
				$_SESSION['acertos'] = 0;
				$_SESSION['erros'] = 0;
				header("location: novo_quiz.php");

			}

				echo "Total de Acertos: " . $_SESSION['acertos'] . "<br/>";
				echo "Total de Erros: " . $_SESSION['erros'] . "<br/>";

			?>
			<form method="POST">
				<br/>
				<br/>
				<input type="submit" name="submit" value="Voltar">
			</form>
		</div>
</body>
</html>
