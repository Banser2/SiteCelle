<?php 
session_start();
include_once 'cabecalho.php';
?>
<title>Resultado Quiz</title>
<section>
	<div id="conteudo">
		<h1 class="t1"> Resultado </h1> 
		<hr id="hr-top"></hr>
		<br>
		<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
		<br/>
		<br/>
		<div class="resultado">
			<?php
			if(!isset($_SESSION['aproveitamento'])){
				$_SESSION['aproveitamento'] = 0;
				$aproveitamento = 0;
			}
			else {
				$aproveitamento = $_SESSION['aproveitamento'];
			}

			if(isset($_POST['voltar'])){
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
				<br/>
				<div class="msg"><h3><?= "Parabéns, você foi muito bem!!";?></h3></div>
				<?php
			}
			elseif ($aproveitamento >= 50) {
				?>
				<br/>
				<div class="msg"><h3><?= "Você foi bem, mas pode melhorar!!";?></h3></div>
				<?php
			}
			elseif ($aproveitamento < 50) {
				?>
				<br/>
				<div class="msg"><h3><?= "Você não foi bem dessa vez. Estude um pouco mais!!";?></h3></div>
				<?php
			}
			$_SESSION['aproveitamento'] = $aproveitamento;
			?>
		</div>
		<br/>
		<br/>
		<style type="text/css">
		${demo.css}
		</style>

		<script type="text/javascript">
		
		$(function () {
			$('#container').highcharts({
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Aproveitamento'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %',
							style: {
								color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
							}
						}
					}
				},
				series: [{
					name: 'Aproveitamento',
					colorByPoint: true,
					data: [{
						name: 'Acertos',
						y: <?= $_SESSION['acertos'] ?>
					}, {
						name: 'Erros',
						y: <?= $_SESSION['erros'] ?>,
						sliced: true,
						selected: true
						
					},  ]
				}]
			});
		});
		</script>    
		<script src="../javaScript/highcharts.js"></script>
		<script src="../javaScript/exporting.js"></script>

		
		<form action="#" method="POST">
			<input class="submit" type="submit" name="voltar" value="Voltar ao Quiz">
		</form>

		<form action="desempenho.php" method="POST">
			<label for="matricula">Matricula:</label>
			<input type="text" name="matricula"  maxlength="14" style="min-width: 100px; width: 20%;"/> 
			<input class="submit" type="submit" name="salvar" value="Salvar"/>
		</form>
	</form>
</div>
<br/>
</section>
<?php 
include_once 'rodape.php';
?>