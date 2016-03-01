<!DOCTYPE HTML> 
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<script src="jquery-1.12.0.min.js"></script>
	<style>
		* {
			font-size: 20px;
			font-family: sans-serif;
		}
		.img {
			height: 180px;
			width: 220px;
			border: 7px solid white;
		}
		.img:hover {
			border-color: #21b4d0;
		}
		/*.error:hover {
			border-color: #FF1212;
		}*/
		ul li {
			float: left;
			list-style-type: none;
			margin-right: 40px;
		}
		h2, span, img, input, form, .audio{
			margin-left: 20%;
			margin-right: 20%;
		}
		audio {
			margin-left: 14%;
		 	position: relative;
		}
	</style>
</head>
<body> 

<?php
// define variables and set to empty values
session_start();


if (!isset($_SESSION['indice'])) {
    $_SESSION['indice'] = 0;
	$indice = 0;
} else {
    $indice = $_SESSION['indice'];
}

if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
	$acertos = 0;
} else {
    $acertos = $_SESSION['acertos'];
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
	$erros = 0;
} else {
    $erros = $_SESSION['erros'];
}


$perguntas = [
/*Índice 0, pergunta 1 */	['spoon.mp3','spoon.jpg','knife.jpg','cup_c.jpg','cup_x.jpg','1'],
/*Índice 1, pergunta 2 */	['knife.mp3','fork.jpg','coffee_filter.jpg','knife.jpg','drainer.jpg','3'],
/*Índice 2, pergunta 3 */	['shell.mp3','cup_x.jpg','shell.jpg','spatula.jpg','pan.jpg','2'],
/*Índice 3, pergunta 4 */	['plates.mp3','cuscuzeira.jpg','jar.jpg','cake_pan.jpg','plates.jpg','4'],
/*Índice 4, pergunta 5 */	['kettle.mp3','coffee_filter.jpg','fork.jpg','spatula.jpg','kettle.jpg','4'],
/*Índice 5, pergunta 6 */	['cup_c.mp3','cup_c.jpg','drainer.jpg','pressure_cooker.jpg','frying_pan.jpg','1'],
/*Índice 6, pergunta 7 */	['fork.mp3','shell.jpg','kettle.jpg','fork.jpg','serving_platter.jpg','3'],
/*Índice 7, pergunta 8 */	['drainer.mp3','cake_pan.jpg','drainer.jpg','wooden_spoon.jpg','thermal_bottle.jpg','2'],
/*Índice 8, pergunta 9 */	['jar.mp3','jar.jpg','spoon.jpg','serving_platter.jpg','pan.jpg','1'],
/*Índice 9, pergunta 10 */	['frying_pan.mp3','pan.jpg','thermal_bottle.jpg','fork.jpg','frying_pan.jpg','4'],
/*Índice 10, pergunta 11 */	['thermal_bottle.mp3','drainer.jpg','cup_c.jpg','thermal_bottle.jpg','cup_x.jpg','3'],
/*Índice 11, pergunta 12 */	['cup_x.mp3','pan.jpg','cup_x.jpg','kettle.jpg','jar.jpg','2'],
/*Índice 12, pergunta 13 */	['spatula.mp3','spatula.jpg','cake_pan.jpg','cuscuzeira.jpg','coffee_filter.jpg','1'],
/*Índice 13, pergunta 14 */	['pressure_cooker.mp3','jar.jpg','spatula.jpg','plates.jpg','pressure_cooker.jpg','4'],
/*Índice 14, pergunta 15 */	['cake_pan.mp3','shell.jpg','drainer.jpg','cake_pan.jpg','thermal_bottle.jpg','3'],
/*Índice 15, pergunta 16 */	['serving_platter.mp3','plates.jpg','fork.jpg','pan.jpg','serving_platter.jpg','4'],
/*Índice 16, pergunta 17 */	['cuscuzeira.mp3','shell.jpg','cuscuzeira.jpg','coffee_filter.jpg','knife.jpg','2'],
/*Índice 17, pergunta 18 */	['wooden_spoon.mp3','wooden_spoon.jpg','spatula.jpg','serving_platter.jpg','frying_pan.jpg','1'],
/*Índice 18, pergunta 19 */	['pan.mp3','plates.jpg','pressure_cooker.jpg','fork.jpg','drainer.jpg','2'],
/*Índice 19, pergunta 20 */	['coffee_filter.mp3','coffee_filter.jpg','pressure_cooker.jpg','drainer.jpg','spoon.jpg','1']
];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $escolha = $_POST["escolha"];

		if($escolha === $perguntas[$indice][5]){
			$indice++;
			$acertos++;
			if($indice === 14){
				$indice = 0;
				echo "<br/>Total de acertos: ". $acertos . "<br/>";
				echo "Total de erros: ". $erros . "<br/><br/>";
				$acertos = 0;
				$erros = 0;
			}
		}else{
			$erros++;
			if($escolha == 1){
				echo '<style type="text/css"> 
			        	#img_1 {
			            	border-color: red;
			        	}
	        		</style> 
	        		<audio autoplay>
						<source src="../audios/erro.mp3"/>
					</audio>';
        	}
        	if ($escolha == 2) {
        		echo '<style type="text/css"> 
		        	#img_2 {
		            	border-color: red;
		        	}
        		</style> 
        		<audio autoplay>
						<source src="../audios/erro.mp3"/>
					</audio>';
        	}
        	if ($escolha == 3) {
        		echo '<style type="text/css"> 
		        	#img_3 {
		            	border-color: red;
		        	}
        		</style> 
        		<audio autoplay>
						<source src="../audios/erro.mp3"/>
					</audio>';
        	}
        	if ($escolha == 4) {
        		echo '<style type="text/css"> 
		        	#img_4 {
		            	border-color: red;
		        	}
        		</style>
        		<audio autoplay>
						<source src="../audios/erro.mp3"/>
					</audio>';
        		
        	}
        	if($escolha == "Início"){
        		$indice = 0;
        	}
		}
			$_SESSION['indice'] = $indice;
			$_SESSION['acertos'] = $acertos;
			$_SESSION['erros'] = $erros;
	}
	/* <?= "string" ?> equivale a <?php echo "string" ?> */
?>

	<h2>Selecione a imagem correspondente ao áudio</h2>
		<p><span><b>Pergunta: <b><?= $indice+1; ?></span></p>
	<form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
   	<br/><br/>
   	<br/>
   	<ul>
	<?php	
		for($i = 1 ; $i <= 4 ; $i++){
	?>
   		<li>
   			<input class="img" id="img_<?= $i?>" type="image" name="escolha" value="<?= $i; ?>" src="../imagens/imagens_quiz/utensilios_cozinha/<?= $perguntas[$indice][$i]; ?>" />
   		</li>
	<?php } ?>
	</ul>
   	<audio class="audio" controls autoplay>
   		<source src="../audios/<?= $perguntas[$indice][0]; ?>"/>
   	</audio><br/>
   <br>
   <input type="submit" name="escolha" value="Início">
</form>
</body>
</html>