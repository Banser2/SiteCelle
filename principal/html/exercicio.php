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

$comida = [
[<audio controls>'meat.jpg ','Cheese',<source src="Cheese.mp3" type="audio/mpeg">,'Meat','Chicken','Cooke','2'],
['candy.jpg','Eggs','Hot-dog','Candy','Milk','3'],
['eggs.jpg','Eggs','Potato','Apple','Guava','1'],
['bread.jpg','Peas','Beans','Banana','Bread','4'],
['fish.jpg ','Cheese','Fish','Chicken','Cooke','2'],
['pepper.jpg','Eggs','Hot-dog','Pepper','Milk','3'],
['apple.jpg','Apple','Potato','Eggs','Guava','1'],
['tomato.jpg','Coconut','Beans','Banana','Tomato','4'],
['strawberries.jpg','Peas','Beans','Strawberries','Bread','3'],
['pineapple.jpg ','Cheese','Pineapple','Chicken','Cooke','2'],
['sugar.jpg','Eggs','Hot-dog','Sugar','Milk','3'],
['rice.jpg','Rice','Potato','Apple','Guava','1'],
['potato.jpg','Peas','Beans','Banana','Potato','4'],
['carrots.jpg ','Cheese','Carrots','Chicken','Cooke','2'],
['cheese.jpg','Eggs','Hot-dog','Cheese','Milk','3'],
['beans.jpg','Beans','Potato','Eggs','Guava','1'],
['watermelon.jpg','Coconut','Beans','Banana','Watermelon','4'],
['papaya.jpg','Peas','Beans','Papaya','Bread','3'],
['lemon.jpg','Lemon','Potato','Apple','Guava','1'],
['fruits.jpg','Peas','Beans','Banana','Fruits','4'],
['peaches.jpg ','Cheese','Peaches','Chicken','Cooke','2'],
['guava.jpg','Eggs','Hot-dog','Guava','Milk','3'],
['orange.jpg','Orange','Potato','Eggs','Guava','1'],
['coconut.jpg','Bacon','Beans','Banana','Coconut','4'],
['popcorn.jpg','Peas','Beans','Pop Corn','Bread','3']</audio> ];
$escola = [
['auditorium.jpg ','Class','Auditorium','Stadium','Parking','2'],
['blackboard.jpg','Teacher','Classmate','blackboard','Board','3'],
['book.jpg','Book','Notebook','Chair','Desk','1'],
['classroom.jpg','Room','Bathroom','Snack Bar','classroom','4'],
['eraser.jpg ','Pencil','Eraser','Door','Bike','2'],
['exam.jpg','Pencil','Pen','Exam','Room','3'],
['library.jpg','Library','Book','Room','Pencil','1'],
['student.jpg','Coconut','Desk','Human','Student','4'],
['teacher.jpg','Student','Classmate','Teacher','Board','3'],
['pen.jpg ','Pencil','Pen','Case','Paper','2'] ];
$transporte = [
['skateboard.jpg','Roller Skates','Skate','Skateboard','Wheels','3'],
['car.jpg','Car','Bus','Road','Asphalt','1'],
['airplane.jpg','Helicopter','Sky','Clouds','Airplane','4'],
['boat.jpg ','Water','Boat','Ship','Canoe','2'],
['bicycle.jpg','Tire','Unicycle','Bicycle','Car','3'],
['streetcar.jpg','Streetcar','Train','Subway','Bus','1'],
['pickuptruck.jpg','Car Truck','Truck','Car','Pickup Truck','4'],
['subway.jpg','Vehicle','Micro Bus','Subway','Station','3'],
['motorbike.jpg','Motorbike','Bike','Scooter','Cart','1'],
['ship.jpg','Boat','Motor Boat','Canoe','Ship','4'],
['bus.jpg ','Truck','Bus','Train','Skate','2'],
['scooter.jpg','Taxi Cab','Cigar','Scooter','Wheels','3'],
['rollerskates.jpg','Roller Skates','Rollercoaster','Wain','Horse','1'],
['yellowcab.jpg','Bus','Car','Ship','Yellow Cab','4'],
['train.jpg','Streetcar','Subway','Train','Monster Truck','3'] ];
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