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
['pao.jpg','peas','beans','banana','bread','4'],
['peixe.jpg ','Cheese','Fish','Chicken','Cooke','2'],
['pimenta.jpg','Eggs','Hot-dog','Pepper','Milk','3'],
['maca.jpg','Apple','Potato','Eggs','Guava','1'],
['tomate.jpg','Coconut','Beans','Banana','Tomato','4'],
['morango.jpg','Peas','Beans','Strawberries','Bread','3'],
['abacaxi.jpg ','Cheese','Pineapple','Chicken','Cooke','2'],
['acucar.jpg','Eggs','Hot-dog','Sugar','Milk','3'],
['arroz.jpg','Rice','Potato','Apple','Guava','1'],
['batata.jpg','peas','beans','banana','Potato','4'],
['cenoura.jpg ','Cheese','Carrots','Chicken','Cooke','2'],
['queijo.jpg','Eggs','Hot-dog','Cheese','Milk','3'],
['feijao.jpg','Beans','Potato','Eggs','Guava','1'],
['melancia.jpg','Coconut','Beans','Banana','Watermelon','4'],
['mamao.jpg','Peas','Beans','Papaya','Bread','3'],
['limao.jpg','Lemon','Potato','Apple','Guava','1'],
['frutas.jpg','peas','beans','banana','Fruits','4'],
['pessego.jpg ','Cheese','Peaches','Chicken','Cooke','2'],
['goiaba.jpg','Eggs','Hot-dog','Guava','Milk','3'],
['laranja.jpg','Orange','Potato','Eggs','Guava','1'],
['coco.jpg','Bacon','Beans','Banana','Coconut','4'],
['pipoca.jpg','Peas','Beans','Pop Corn','Bread','3']
['auditorio.jpg ','Cheese','auditorium','Chicken','Cooke','2'],
['quadro_negro.jpg','Eggs','Hot-dog','blackboard','Milk','3'],
['livro.jpg','book','Potato','Apple','Guava','1'],
['sala_de_aula.jpg','peas','beans','banana','classroom','4'],
['borracha.jpg ','Cheese','eraser','Chicken','Cooke','2'],
['prova.jpg','Eggs','Hot-dog','exam','Milk','3'],
['biblioteca.jpg','Library','Potato','Eggs','Guava','1'],
['estudante.jpg','Coconut','Beans','Banana','Student','4'],
['professor.jpg','Peas','Beans','teacher','Bread','3'],
['caneta.jpg ','Cheese','pen','Chicken','Cooke','2'],
['skate.jpg','roller skates','skate','skateboard','Milk','3'],
['carro.jpg','car','Potato','Apple','Guava','1'],
['aviao.jpg','peas','beans','banana','airplane','4'],
['barco.jpg ','Cheese','boat','Chicken','Cooke','2'],
['bicicleta.jpg','Eggs','Hot-dog','bicycle','Milk','3'],
['bonde.jpg','streetcar','Potato','Eggs','Guava','1'],
['caminhonete.jpg','Coconut','Beans','Banana','pickup truck','4'],
['metro.jpg','Peas','Beans','Subway','Bread','3'],
['motocicleta.jpg','motorbike','Potato','Apple','Guava','1'],
['navio.jpg','peas','beans','banana','ship','4'],
['onibus.jpg ','Cheese','bus','Chicken','Cooke','2'],
['patinete.jpg','Eggs','Hot-dog','scooter','Milk','3'],
['patins.jpg','roller skates','Potato','Eggs','Guava','1'],
['taxi.jpg','Bacon','Beans','Banana','taxi cab','4'],
['trem.jpg','Peas','Beans','train','Bread','3'] ];
?>
<h2>Exercicio de Revisão</h2>
		<p><span><b>o que você vê ? <b><?php echo $indice;?></span></p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $escolha = $_POST["escolha"];
	if($escolha === $perguntas[$indice][5]){
		echo "ACERTOU";
		$indice++;
		if($indice === 25){
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
   	<img src="<?php echo $perguntas[$indice][0];?>" />
	<?php	
		for($i = 1 ; $i <= 4 ; $i++){
	?>
		<br>
   		<input type="radio" name="escolha"  value="<?php echo $i;?>">

	<?php echo $perguntas[$indice][$i];?>
	
	<?php } ?>
   	<br><br>
   		<input type="submit" name="submit" value="Submit"> 
</form>
</body>
</html>