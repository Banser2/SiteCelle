<!DOCTYPE HTML> 
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<script src="jquery-1.12.0.min.js"></script>
	<style>
		img {
			height: 180px;
			width: 250px;
		}
		* {
			font-size: 20px;
			font-family: sans-serif;
		}
		h2, span, img, audio, input, table{
			margin-left: 25%;
		}
		.middle {
			width: 20px;
		}
	</style>
</head>
<body> 

<?php
// define variables and set to empty values
session_start();

// some code here

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
/*Índice 0, pergunta 1 */	['spoon.jpg','Spoon','Knife','Cup','Ball','1', 'spoon.mp3'],
/*Índice 1, pergunta 2 */	['knife.JPG','Fork','Door','Knife','Refrigerator','3', 'knife.mp3'],
/*Índice 2, pergunta 3 */	['table.jpg','Glass','Table','Freezer','Pan','2', 'table.mp3'],
/*Índice 3, pergunta 4 */	['plates.jpg','Banch','Jar','Couch','Plates','4', 'plates.mp3'],
/*Índice 4, pergunta 5 */	['chair.jpg','Bed','Window','Sofa','Chair','4', 'chair.mp3'],
/*Índice 5, pergunta 6 */	['cup_c.jpg','Cup','Lamp','Wall','Hat','1', 'cup_c.mp3'],
/*Índice 6, pergunta 7 */	['fork.jpg','Ladder','Desk','Fork','Glasses','3', 'fork.mp3'],
/*Índice 7, pergunta 8 */	['refrigerator.jpg','Microwave','Refrigerator','Sofa','Floor','2', 'refrigerator.mp3'],
/*Índice 8, pergunta 9 */	['air_conditioning.jpg','Air Conditioning','Stereo','Computer','Notebook','1', 'air_conditioning.mp3'],
/*Índice 9, pergunta 10 */	['wardrobe_arm.jpg','Floor Mat','Stereo','Arm Chair','WardRobe','4', 'wardrobe_arm.mp3'],
/*Índice 10, pergunta 11 */	['aspirator.jpg','Shelf','Lampshade','Aspirator','Glass','3', 'aspirator.mp3'],
/*Índice 11, pergunta 12 */	['food_mixer.jpg','Shelf','Food Mixer','Blender','Vessel','2', 'food_mixer.mp3'],
/*Índice 12, pergunta 13 */	['coffee_machine.jpg','Coffee Machine','Bottle','Blender','Coffee Filter','1', 'coffee_machine.mp3'],
/*Índice 13, pergunta 14 */	['bed.jpg','Table','Arm Chair','Curtains','Bed','4', 'bed.mp3']
];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $escolha = $_POST["escolha"];

	  /*if ($escolha == null) {
	   		$indice = 0;
	   		$erros = 0;
	   		$acertos = 0;
	   }*/
		if($escolha === $perguntas[$indice][5]){
			echo "ACERTOU";
			$indice++;
			$acertos++;
			if($indice === 14){
				$indice = 0;
				echo "<br/>Total de acertos: ". $acertos. "<br/>";
				echo "Total de erros: ". $erros. "<br/><br/>";
				$acertos = 0;
				$erros = 0;
			}else{
			}
		}else{
			echo "ERROU";
			$erros++;
		}
			$_SESSION['indice'] = $indice;
			$_SESSION['acertos'] = $acertos;
			$_SESSION['erros'] = $erros;
	}


?>

<h2>Selecione a palavra correspondente à Imagem</h2>
	<p><span><b>Pergunta: <b><?php echo $indice+1; ?></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
   	<img src="../imagens/55/<?php echo $perguntas[$indice][0]; ?>" /><br>
   	<br/><br/>
   	<audio controls autoplay>
   		<source src="../audios/<?php echo $perguntas[$indice][6]; ?>"/>
   	</audio><br/>
   	<br/>
	<?php	
		for($i = 1 ; $i <= 4 ; $i++){
	?>
   <input class="opcoes" type="radio" name="escolha"  value="<?php echo $i; ?>">
	<?php echo $perguntas[$indice][$i]; ?>
	<br>
	<?php } ?>
   <br>
   <!-- <table>
	<tr> -->
		<td><input type="submit" name="submit" value="Responder"></td>
		<!-- <td class="middle"></td>
		<td><input type="submit" name="reset" class="reset" value="Início"></td>
	</tr>
	</table> -->
</form>
</body>
 </html>