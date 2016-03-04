<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML> 
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<script src="jquery-1.12.0.min.js"></script>
	<style>
		* {
			font-size: 12px;
			font-family: sans-serif;
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
			margin-right: 15px;
		}
		h2, span, input, form, .audio, option, label, body{
			margin-left: 0%;
			margin-right: 0%;
		}
		select {
			margin-left: 0;
			margin-right: 0;
		}
		.img {
			height: 180px;
			width: 220px;
			border: 7px solid white;
			margin-left: 0%;
			margin-right: 0%;
		}
		audio {
			margin-left: 14%;
		 	position: relative;
		}
		.palavra {
			font-size: 30px;
			text-align: center;
		}
	</style>
</head>
<body>
    <h1 class="t1"> QUIZ </h1> 
    <hr id="hr-top"></hr>
    <br>

<?php

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


	/*if (!isset($_SESSION['contexto'])) {
	    $_SESSION['contexto'] = "default";
		$contexto = "default";
	} else {
	    $contexto = $_SESSION['contexto'];
	}
	$_SESSION['contexto'] = $contexto;*/

$pasta = "utensilios_cozinha";


$cozinha = [
/*Índice 0, pergunta 1 */	['spoon.mp3','spoon.jpg','knife.jpg','cup_c.jpg','cup_x.jpg','1', 'Spoon'],
/*Índice 1, pergunta 2 */	['knife.mp3','fork.jpg','coffee_filter.jpg','knife.jpg','drainer.jpg','3', 'Knife'],
/*Índice 2, pergunta 3 */	['shell.mp3','cup_x.jpg','shell.jpg','spatula.jpg','pan.jpg','2', 'Shell'],
/*Índice 3, pergunta 4 */	['plates.mp3','cuscuzeira.jpg','jar.jpg','cake_pan.jpg','plates.jpg','4', 'Plates'],
/*Índice 4, pergunta 5 */	['kettle.mp3','coffee_filter.jpg','fork.jpg','spatula.jpg','kettle.jpg','4', 'Kettle'],
/*Índice 5, pergunta 6 */	['cup_c.mp3','cup_c.jpg','drainer.jpg','pressure_cooker.jpg','frying_pan.jpg','1', 'Cup'],
/*Índice 6, pergunta 7 */	['fork.mp3','shell.jpg','kettle.jpg','fork.jpg','serving_platter.jpg','3', 'Fork'],
/*Índice 7, pergunta 8 */	['drainer.mp3','cake_pan.jpg','drainer.jpg','wooden_spoon.jpg','thermal_bottle.jpg','2', 'Drainer'],
/*Índice 8, pergunta 9 */	['jar.mp3','jar.jpg','spoon.jpg','serving_platter.jpg','pan.jpg','1', 'Jar'],
/*Índice 9, pergunta 10 */	['frying_pan.mp3','pan.jpg','thermal_bottle.jpg','fork.jpg','frying_pan.jpg','4', 'Frying Pan'],
/*Índice 10, pergunta 11 */	['thermal_bottle.mp3','drainer.jpg','cup_c.jpg','thermal_bottle.jpg','cup_x.jpg','3', 'Thermal Bottle'],
/*Índice 11, pergunta 12 */	['cup_x.mp3','pan.jpg','cup_x.jpg','kettle.jpg','jar.jpg','2', 'Cup'],
/*Índice 12, pergunta 13 */	['spatula.mp3','spatula.jpg','cake_pan.jpg','cuscuzeira.jpg','coffee_filter.jpg','1', 'Spatula'],
/*Índice 13, pergunta 14 */	['pressure_cooker.mp3','jar.jpg','spatula.jpg','plates.jpg','pressure_cooker.jpg','4', 'Pressure Cooker'],
/*Índice 14, pergunta 15 */	['cake_pan.mp3','shell.jpg','drainer.jpg','cake_pan.jpg','thermal_bottle.jpg','3', 'Cake Pan'],
/*Índice 15, pergunta 16 */	['serving_platter.mp3','plates.jpg','fork.jpg','pan.jpg','serving_platter.jpg','4', 'Serving Platter'],
/*Índice 16, pergunta 17 */	['cuscuzeira.mp3','shell.jpg','cuscuzeira.jpg','coffee_filter.jpg','knife.jpg','2', 'Cuscuzeira'],
/*Índice 17, pergunta 18 */	['wooden_spoon.mp3','wooden_spoon.jpg','spatula.jpg','serving_platter.jpg','frying_pan.jpg','1', 'Wooden Spoon'],
/*Índice 18, pergunta 19 */	['pan.mp3','plates.jpg','pressure_cooker.jpg','fork.jpg','drainer.jpg','2', 'Pan'],
/*Índice 19, pergunta 20 */	['coffee_filter.mp3','coffee_filter.jpg','pressure_cooker.jpg','drainer.jpg','spoon.jpg','1', 'Coffee Filter']
];

$vestuario = [
/*Índice 0, pergunta 1 */	['blazer.mp3','shirt.jpg','tie.jpg','vest.jpg','blazer.jpg','4', 'Blazer'],
/*Índice 1, pergunta 2 */	['blouse.mp3','blouse.jpg','hat.jpg','jumpsuit.jpg','skirt.jpg','1', 'Blouse'],
/*Índice 2, pergunta 3 */	['coat.mp3','swimwear.jpg','coat.jpg','pants.jpg','pijamas.jpg','2', 'Coat'],
/*Índice 3, pergunta 4 */	['dress.mp3','dress.jpg','nightdress.jpg','shirt.jpg','coat.jpg','1', 'Dress'],
/*Índice 4, pergunta 5 */	['hat.mp3','blazer.jpg','vest.jpg','hat.jpg','blouse.jpg','3', 'Hat'],
/*Índice 5, pergunta 6 */	['jumpsuit.mp3','shirt.jpg','tie.jpg','shoes.jpg','jumpsuit.jpg','4', 'Jumpsuit'],
/*Índice 6, pergunta 7 */	['nightdress.mp3','pants.jpg','vest.jpg','nightdress.jpg','hat.jpg','3', 'Nightdress'],
/*Índice 7, pergunta 8 */	['pants.mp3','dress.jpg','pants.jpg','pijamas.jpg','blazer.jpg','2', 'Pants'],
/*Índice 8, pergunta 9 */	['pijamas.mp3','swimwear.jpg','pijamas.jpg','tie.jpg','hat.jpg','2', 'Pijamas'],
/*Índice 9, pergunta 10 */	['shirt.mp3','jumpsuit.jpg','shoes.jpg','skirt.jpg','shirt.jpg','4', 'Shirt'],
/*Índice 10, pergunta 11 */	['shoes.mp3','shoes.jpg','blouse.jpg','blazer.jpg','pants.jpg','1', 'Shoes'],
/*Índice 11, pergunta 12 */	['skirt.mp3','coat.jpg','swimwear.jpg','skirt.jpg','dress.jpg','3', 'Skirt'],
/*Índice 12, pergunta 13 */	['swimwear.mp3','nightdress.jpg','jumpsuit.jpg','swimwear.jpg','coat.jpg','3', 'Swimwear'],
/*Índice 13, pergunta 14 */	['tie.mp3','blouse.jpg','hat.jpg','shoes.jpg','tie.jpg','4', 'Tie'],
/*Índice 14, pergunta 15 */	['vest.mp3','vest.jpg','dress.jpg','shirt.jpg','pants.jpg','1', 'Vest']
];

$perguntas = $cozinha;

	if(isset($_POST['contexto'])) {
	    // Set session variables
	    $_SESSION["contexto"] = $_POST['contexto'];
	    $contexto = $_SESSION['contexto'];

		if($contexto === "vestuario"){
			$perguntas = $vestuario;
			$pasta = "vestuario";
			$_SESSION['contexto'] = $contexto;
	   	}
		if($contexto === "cozinha"){
		   	$perguntas = $cozinha;
			$pasta = "utensilios_cozinha";
		   	$_SESSION['contexto'] = $contexto;
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(isset($escolha)){
			$escolha = $_POST["escolha"];

			if($escolha === $perguntas[$indice][5]){
				$indice++;
				$acertos++;
				if($indice === sizeof($perguntas)){
					$indice = 0;
					echo "<br/>Total de acertos: ". $acertos . "<br/>";
					echo "Total de erros: ". $erros . "<br/><br/>";
					$acertos = 0;
					$erros = 0;
				}
			}else{
				$erros++;
				echo '<style type="text/css"> 
						#img_' . $escolha .' {
							border-color: red;
						}
					</style> 
					<audio autoplay>
						<source src="../audios/erro.mp3"/>
					</audio>';
				
				if($escolha == "Início"){
					$indice = 0;
				}
			}
				$_SESSION['indice'] = $indice;
				$_SESSION['acertos'] = $acertos;
				$_SESSION['erros'] = $erros;
		}
	}
	/* <?= "string" ?> equivale a <?php echo "string" ?> */
?>
	<label>Selecione o Contexto:</label>
	<br>
	<br>
	<form method="POST" action="#">
	<select name="contexto" onchange="this.form.submit()">
		<option value="default">Default</option>
		<option <?php if(isset($_POST["contexto"])) echo $_POST["contexto"] === "cozinha" ? 'selected' : '' ; ?> value="cozinha">Utensílios de Cozinha</option>
		<option <?php if(isset($_POST["contexto"])) echo $_POST["contexto"] === "vestuario" ? 'selected' : '' ; ?> value="vestuario" >Vestuário</option>
	</select>
	</form>
	
<?php	
		if(isset($_POST["contexto"]) && $_POST["contexto"] !== "default"){	
		?>
    <h2>Selecione a imagem correspondente ao áudio</h2>
		<p><span><b>Pergunta: <b><?= $indice+1; ?></span></p><br>
   	<audio class="audio" controls autoplay>
   		<source src="../audios/<?= $perguntas[$indice][0]; ?>"/>
   	</audio><br/>
   	<br/>
   	<br/>
   	<label class="palavra"><?= $perguntas[$indice][6]; ?></label>
   <br>
	<form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
   	<br/><br/>
   	<br/>
   	<div class="lista">
   	<ul>
	<?php
		for($i = 1 ; $i <= 4 ; $i++){
	?>
   		<li>
   			<input class="img" id="img_<?= $i?>" type="image" name="escolha" value="<?= $i; ?>" src="../imagens/imagens_quiz/<?= $pasta; ?>/<?= $perguntas[$indice][$i]; ?>" />
   		</li>
	<?php } ?>
	</ul>
	</div>

   <input type="submit" name="escolha" value="Início">
   <?php } ?>
</form>
</body>
</html>