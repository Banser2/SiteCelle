<?php 
	session_start();
	include_once 'cabecalho.php';
?>
<section>
	<div id="conteudo">
		<div class="resultado">
			<?php
			if(isset($_POST['submit'])){
				$_SESSION['acertos'] = 0;
				$_SESSION['erros'] = 0;
				$_SESSION['contexto'] = "default";
				header("location: quiz.php");

			}
			$total = $_SESSION['acertos'] + $_SESSION['erros'];
			
			$aproveitamento = number_format((($_SESSION['acertos'] * 100) / $total), 2, ',', '.');

			echo "<h3>Total de Acertos: " . $_SESSION['acertos'] . "</h3>";
			echo "<h3>Total de Erros: " . $_SESSION['erros'] . "</h3>";
			echo "<h3>Aproveitamento: " . $aproveitamento . " %</h3>";

			if($aproveitamento >= 70){
				?>
				<div id="70+"><h3><?= "Parabéns, você foi muito bem!!";?></h3></div>
				<?php
			}
			elseif ($aproveitamento >= 50) {
				?>
				<div id="50+"><h3><?= "Você foi bem, mas pode melhorar!!";?></h3></div>
				<?php
			}

			?>
			<form method="POST">
				<br/>
				<br/>
				<input type="submit" name="submit" value="Voltar">
			</form>
		</div>
	</div>
</section>
<?php 
	include_once 'rodape.php';
?>