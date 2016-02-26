<!DOCTYPE HTML> 
<html>
	<head>
		<style>
			.error {color: #FF0000;}
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

$perguntas = [
['carne.jpg ','Cheese','Meat','Chicken','Cooke','2'],
['doce.jpg','Eggs','Hot-dog','Candy','Milk','3'],
['ovos.jpg','Eggs','Potato','Apple','Guava','1'],
['pao.jpg','Peas','Beans','Banana','Bread','4'],
['peixe.jpg ','Cheese','Fish','Chicken','Cooke','2'],
['pimenta.jpg','Eggs','Hot-dog','Pepper','Milk','3'],
['maca.jpg','Apple','Potato','Eggs','Guava','1'],
['tomate.jpg','Coconut','Beans','Banana','Tomato','4'],
['morango.jpg','Peas','Beans','Strawberries','Bread','3'],
['abacaxi.jpg ','Cheese','Pineapple','Chicken','Cooke','2'],
['acucar.jpg','Eggs','Hot-dog','Sugar','Milk','3'],
['arroz.jpg','Rice','Potato','Apple','Guava','1'],
['batata.jpg','Peas','Beans','Banana','Potato','4'],
['cenoura.jpg ','Cheese','Carrots','Chicken','Cooke','2'],
['queijo.jpg','Eggs','Hot-dog','Cheese','Milk','3'],
['feijao.jpg','Beans','Potato','Eggs','Guava','1'],
['melancia.jpg','Coconut','Beans','Banana','Watermelon','4'],
['mamao.jpg','Peas','Beans','Papaya','Bread','3'],
['limao.jpg','Lemon','Potato','Apple','Guava','1'],
['frutas.jpg','Peas','Beans','Banana','Fruits','4'],
['pessego.jpg ','Cheese','Peaches','Chicken','Cooke','2'],
['goiaba.jpg','Eggs','Hot-dog','Guava','Milk','3'],
['laranja.jpg','Orange','Potato','Eggs','Guava','1'],
['coco.jpg','Bacon','Beans','Banana','Coconut','4'],
['pipoca.jpg','Peas','Beans','Pop Corn','Bread','3'],
['auditorio.jpg ','Class','Auditorium','Stadium','Parking','2'],
['quadro_negro.jpg','Teacher','Classmate','blackboard','Board','3'],
['livro.jpg','Book','Notebook','Chair','Desk','1'],
['sala_de_aula.jpg','Room','Bathroom','Snack Bar','classroom','4'],
['borracha.jpg ','Pencil','Eraser','Door','Bike','2'],
['prova.jpg','Pencil','Pen','Exam','Room','3'],
['biblioteca.jpg','Library','Book','Room','Pencil','1'],
['estudante.jpg','Coconut','Desk','Human','Student','4'],
['professor.jpg','Student','Classmate','Teacher','Board','3'],
['caneta.jpg ','Pencil','Pen','Case','Paper','2'],
['skate.jpg','Roller Skates','Skate','Skateboard','Wheels','3'],
['carro.jpg','Car','Bus','Road','Asphalt','1'],
['aviao.jpg','Helicopter','Sky','Clouds','Airplane','4'],
['barco.jpg ','Water','Boat','Ship','Canoe','2'],
['bicicleta.jpg','Tire','Unicycle','Bicycle','Car','3'],
['bonde.jpg','Streetcar','Train','Subway','Bus','1'],
['caminhonete.jpg','Car Truck','Truck','Car','Pickup Truck','4'],
['metro.jpg','Vehicle','Micro Bus','Subway','Station','3'],
['motocicleta.jpg','Motorbike','Bike','Scooter','Cart','1'],
['navio.jpg','Boat','Motor Boat','Canoe','Ship','4'],
['onibus.jpg ','Truck','Bus','Train','Skate','2'],
['patinete.jpg','Taxi Cab','Cigar','Scooter','Wheels','3'],
['patins.jpg','Roller Skates','Rollercoaster','Wain','Horse','1'],
['taxi.jpg','Bus','Car','Ship','Yellow Cab','4'],
['trem.jpg','Streetcar','Subway','Train','Monster Truck','3'] ];
?>
<h2>Exercicio de Revisão</h2>
		<p><span><b>o que você vê ? <b><?php echo $indice;?></span></p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $escolha = $_POST["escolha"];
	if($escolha === $perguntas[$indice][5]){
		echo "ACERTOU";
		$indice++;
		if($indice === 50){
			$indice = 0;
			$_SESSION['indice'] = $indice;
		}else{
			$_SESSION['indice'] = $indice;
		}
	}else{
		echo "ERROU";
?><p><span class="error">* Tente Novamente.</span></p>
	<?php	
		}
	}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   	<img src="../Imagens/imagens_exercicios/<?php echo $perguntas[$indice][0];?>" />
	<?php	
		for($i = 1 ; $i <= 4 ; $i++){
	?>
		<br>
   		<input type="radio" name="escolha"  value="<?php echo $i;?>">
   		<src="audios/<?php echo $perguntas[$indice][$i];?>.mp3">
	<?php echo $perguntas[$indice][$i];?>
	
	<?php } ?>
   	<br><br>
   		<input type="submit" name="submit" value="Submit"> 
</form>
</body>
</html>