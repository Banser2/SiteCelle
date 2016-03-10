<!DOCTYPE HTML> 
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <select name="contexto" onchange="this.form.submit()">
	<option value="default">Selecione</option>
	<option value="comida">Comida</option>
	<option value="escola">Escola</option>
	<option value="transporte">Transporte</option>
	<option value="animais">Animais</option>
	<option value="esportes">Esportes</option>
	<option value="partedocorpo">Partes do Corpo</option>
  
</select> 
</form>

<?php

// define variables and set to empty values
session_start();

$comida = [
['meat.jpg ','Cheese','Meat','Chicken','Cooke','2'],
['candy.jpg','Eggs','Hot-dog','Candy','Milk','3'],
['eggs.jpg','Eggs','Potato','Apple','Guava','1'],
['bread.jpg','Peas','Beans','Banana','Bread','4'],
['fish.jpg ','Cheese','Fish','Chicken','Cooke','2'],
['pepper.jpg','Eggs','Hot-dog','Pepper','Milk','3'],
['apple.jpg','Apple','Potato','Eggs','Guava','1'],
['tomato.jpg','Coconut','Beans','Banana','Tomato','4'],
['strawberry.jpg','Peas','Beans','Strawberry','Bread','3'],
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
['popcorn.jpg','Peas','Beans','Pop Corn','Bread','3'] ];
$escola = [
['auditorium.jpg ','Class','Auditorium','Stadium','Parking','2'],
['blackboard.jpg','Teacher','Classmate','Blackboard','Board','3'],
['books.jpg','Books','Notebook','Chair','Desk','1'],
['classroom.jpg','Room','Bathroom','Snack Bar','Classroom','4'],
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
['motorcycle.jpg','Motorcycle','Bike','Scooter','Cart','1'],
['ship.jpg','Boat','Motor Boat','Canoe','Ship','4'],
['bus.jpg ','Truck','Bus','Train','Skate','2'],
['scooter.jpg','Taxi Cab','Cigar','Scooter','Wheels','3'],
['rollerskates.jpg','Roller Skates','Rollercoaster','Wain','Horse','1'],
['yellowcab.jpg','Bus','Car','Ship','Yellow Cab','4'],
['train.jpg','Streetcar','Subway','Train','Monster Truck','3'] ];
$animais = [
['bear.jpg','Bird','Fox','Owl','Bear','4'],
['butterfly.jpg','Butterfly','Fox','Horse','Bird','1'],
['bird.jpg','Dog','Bird','Bug','Brid','2'],
['dolphin.jpg','Whale','Shark','Fish','Dolphin','4'],
['wolf.jpg','Fox','Lion','Wolf','Horse','3'],
['horse.jpg','House','Horse','Wolf','Bear','2'],
['fox.jpg','Owl','Wolf','Dragon','Fox','4'],
['owl.jpg','Parrot','Owl','Bird','Hawk','2'],
['shark.jpg','Shark','Dolphin','Wolf','Bear','1'],
['parrot.jpg','Bird','Owl','Parrot','Hawk','3'] ];
$esportes = [
['archery.jpg','Arrow','Archery','Wrestling','Boxing','2'],
['baseball.jpg','Soccer','Karate','Parachuting','Baseball','4'],
['boxing.jpg','Gloves','Cycling','Boxing','Tennis','3'],
['canoeing.jpg','Canoeing','Surfing','Rugby','Swimming','1'],
['cycling.jpg','Motocross','Race','Snowboard','Cycling','4'],
['fencing.jpg','Sword','Fencing','Boxing','Fencer','2'],
['american_football.jpg','American Football','Soccer','Rugby','Tennis','1'],
['horsemanship.jpg','Horse Racing','Horse','Horsemanship','Cowboy','3'],
['ice_hockey.jpg','Field Hockey','Ice Hockey','Ice Skating','Javelin Throw','2'],
['long_jump.jpg','Triple Jump','Pole Vault','Sand Jump','Long Jump','4'],
['motoring.jpg','Motoring','Motocross','Formula One','Top Gear','1'],
['parachuting.jpg','Hang Gliding','Football','Parachuting','Bowling','3'],
['pole_vault.jpg','Pole Vault','Javelin Throw','Pole Dance','Shooting','1'],
['race.jpg','Snowboard','Race','Fencing','Cycling','2'],
['roller_skating.jpg','Sailing','Race','Horsemanship','Roller Skating','4'],
['rowing.jpg','Canoeing','Boating','Rowing','Swimming','3'],
['rugby.jpg','Football','Rugby','Soccer','Fencing','2'],
['sailing.jpg','Canoeing','Rowing','Swimming','Sailing','4'],
['shot.jpg','Shot','Hunting','Track Field','Cycling','1'],
['slackline.jpg','Rugby','Wrestling','Slackline','Boxing','3'],
['soccer.jpg','Rugby','Soccer','Volleyball','Tennis','2'],
['swimming.jpg','Swimming','Canoeing','Track Field','Ice Skating','1'],
['tennis.jpg','Ping Pong','Volleyball','Wrestling','Tennis','4'],
['track_field.jpg','Triathlon','Track Field','Athletism','Pole Vault','2']];
$partedocorpo = [
['arm.jpg','Leg','Arm','Eye','Shoulder','2'],
['back.jpg','Knee','Head','Nails','Back','4'],
['belly.jpg','Elbow','Eyebrown','Belly','Back','3'],
['chin.jpg','Chin','Neck','Tooth','Mouth','1'],
['ear.jpg','Nose','Chin','Finger','Ear','4'],
['elbow.jpg','Wrist','Elbow','Nose','Knee','2'],
['eye.jpg','Eye','Eyelashes','Hair','Eyebrows','1'],
['eyebrows.jpg','Eyelashes','Ear','Eyebrows','Arm','3'],
['finger.jpg','Mouth','Finger','Foot','Nails','2'],
['foot.jpg','Leg','Thigh','Hands','Foot','4'],
['hair.jpg','Hair','Shoulder','Chin','Wrist','1'],
['hands.jpg','Wrist','Finger','Hands','Thigh','3'],
['knee.jpg','Knee','Foot','Hands','Elbow','1'],
['leg.jpg','Feet','Leg','Thigh','Neck','2'],
['mouth.jpg','Tooth','Leg','Finger','Mouth','4'],
['nails.jpg','Hands','Eyebrows','Nails','Tooth','3'],
['neck.jpg','Necklace','Neck','Chin','Shoulder','2'],
['nose.jpg','Mouth','Eye','Tongue','Nose','4'],
['shoulder.jpg','Shoulder','Arm','Knee','Leg','1'],
['thigh.jpg','Shank Leg','Spine','Thigh','Leg','3'],
['tooth.jpg','Mouth','Tooth','Lips','Tongue','2'],
['wrist.jpg','Wrist','Vein','Thumb','Forearm','1'], ]

if ( $_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['contexto']) && $_POST['contexto'] !== "default")) {
	$contexto = $_POST['contexto'];
	$_SESSION['contexto'] = $contexto;
	
}

if ($_SESSION['contexto'] === 'comida'){
		$perguntas = $comida;
	} else if ($_SESSION['contexto'] === 'escola'){
		$perguntas = $escola;
	} else if ($_SESSION['contexto'] === 'transporte'){
		$perguntas = $transporte;
	} else if ($_SESSION['contexto'] === 'animais'){
		$perguntas = $animais;
	}else if ($_SESSION['contexto'] === 'esportes'){
		$perguntas = $esportes;
    }else if ($_SESSION['contexto'] === 'partedocorpo'){
		$perguntas = $partedocorpo;
	}
if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset"])) {
	$_SESSION['contexto'] = 'default';
	$_SESSION['indice'] = 0;
	$_POST['contexto'] = 'default';
	$contexto = 'default';
	$indice = 0;
}


if (!isset($_SESSION['contexto'])) {
    $_SESSION['contexto'] = 'default';
	$contexto = 'default';
	}

// some code here


	if (!isset($_SESSION['indice'])) {
    $_SESSION['indice'] = 0;
	$indice = 0;
	} else {
    $indice = $_SESSION['indice'];
	}



?>
<h2>Exercicio de Revisão</h2>
		<p><span><b>o que você vê ? <b><?php echo $indice;?></span></p>
<?php
if (isset($_POST["escolha"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
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

	<?php
		if($_SESSION['contexto'] !== "default"){
	?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   	<img src="../Imagens/imagens_exercicios/<?php echo $_SESSION['contexto'];?>/<?php echo $perguntas[$indice][0];?>" />
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   	
   		<input type="submit" name="reset" value="reset"> 
</form>
<?php 
	}
?>
</body>
</html>