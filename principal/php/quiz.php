<?php
// Inicia a Sessão
session_start();
include_once 'cabecalho.php';

if (!isset($_SESSION['contexto'])) {
	$_SESSION['contexto'] = 'default';
	$contexto = $_SESSION['contexto'];
}

?>
<section>
	<div id="conteudo">
		<h1 class="t1"> Quiz </h1> 
		<hr id="hr-top"></hr>
		<label id="contexto">Escolha o Contexto:</label><br/><br/>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			<select name="contexto" onchange="this.form.submit()">
				<option value="default">Selecione</option>
				<option value="cozinha">Utensílios de Cozinha</option>
				<option value="vestuario">Vestuario</option>
				<option value="jardim">Jardim</option>
				<option value="mobilias">Mobílias</option>
				<option value="profissoes">Profissões</option>
				<option value="eletrodomesticos">Eletrodomésticos</option>
			</select> 
		</form>


		<?php
		
// define variables and set to empty values

		$cozinha = [
		/*Índice 0, pergunta 1 */	['spoon.mp3','spoon.jpg','knife.jpg','glass.jpg','cup.jpg','1', 'Spoon'],
		/*Índice 1, pergunta 2 */	['knife.mp3','fork.jpg','coffee_filter.jpg','knife.jpg','drainer.jpg','3', 'Knife'],
		/*Índice 2, pergunta 3 */	['shell.mp3','cup.jpg','shell.jpg','spatula.jpg','pan.jpg','2', 'Shell'],
		/*Índice 3, pergunta 4 */	['plates.mp3','cuscuzeira.jpg','jar.jpg','cake_pan.jpg','plates.jpg','4', 'Plates'],
		/*Índice 4, pergunta 5 */	['kettle.mp3','coffee_filter.jpg','fork.jpg','spatula.jpg','kettle.jpg','4', 'Kettle'],
		/*Índice 5, pergunta 6 */	['glass.mp3','glass.jpg','drainer.jpg','pressure_cooker.jpg','frying_pan.jpg','1', 'Glass'],
		/*Índice 6, pergunta 7 */	['fork.mp3','shell.jpg','kettle.jpg','fork.jpg','serving_platter.jpg','3', 'Fork'],
		/*Índice 7, pergunta 8 */	['drainer.mp3','cake_pan.jpg','drainer.jpg','wooden_spoon.jpg','thermal_bottle.jpg','2', 'Drainer'],
		/*Índice 8, pergunta 9 */	['jar.mp3','jar.jpg','spoon.jpg','serving_platter.jpg','spatula.jpg','1', 'Jar'],
		/*Índice 9, pergunta 10 */	['frying_pan.mp3','pan.jpg','thermal_bottle.jpg','fork.jpg','frying_pan.jpg','4', 'Frying Pan'],
		/*Índice 10, pergunta 11 */	['thermal_bottle.mp3','drainer.jpg','glass.jpg','thermal_bottle.jpg','cup.jpg','3', 'Thermal Bottle'],
		/*Índice 11, pergunta 12 */	['cup.mp3','pan.jpg','cup.jpg','kettle.jpg','jar.jpg','2', 'Cup'],
		/*Índice 12, pergunta 13 */	['spatula.mp3','spatula.jpg','cake_pan.jpg','cuscuzeira.jpg','coffee_filter.jpg','1', 'Spatula'],
		/*Índice 13, pergunta 14 */	['pressure_cooker.mp3','jar.jpg','spatula.jpg','plates.jpg','pressure_cooker.jpg','4', 'Pressure Cooker'],
		/*Índice 14, pergunta 15 */	['cake_pan.mp3','shell.jpg','drainer.jpg','cake_pan.jpg','thermal_bottle.jpg','3', 'Cake Pan'],
		/*Índice 15, pergunta 16 */	['serving_platter.mp3','plates.jpg','fork.jpg','pan.jpg','serving_platter.jpg','4', 'Serving Platter'],
		/*Índice 16, pergunta 17 */	['cuscuzeira.mp3','shell.jpg','cuscuzeira.jpg','coffee_filter.jpg','knife.jpg','2', 'Cuscuzeira'],
		/*Índice 17, pergunta 18 */	['wooden_spoon.mp3','wooden_spoon.jpg','spatula.jpg','serving_platter.jpg','frying_pan.jpg','1', 'Wooden Spoon'],
		/*Índice 18, pergunta 19 */	['pan.mp3','plates.jpg','pan.jpg','fork.jpg','drainer.jpg','2', 'Pan'],
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
		/*Índice 10, pergunta 11 */	['shoe.mp3','shoes.jpg','blouse.jpg','blazer.jpg','pants.jpg','1', 'Shoes'],
		/*Índice 11, pergunta 12 */	['skirt.mp3','coat.jpg','swimwear.jpg','skirt.jpg','dress.jpg','3', 'Skirt'],
		/*Índice 12, pergunta 13 */	['swimwear.mp3','nightdress.jpg','jumpsuit.jpg','swimwear.jpg','coat.jpg','3', 'Swimwear'],
		/*Índice 13, pergunta 14 */	['tie.mp3','blouse.jpg','hat.jpg','shoes.jpg','tie.jpg','4', 'Tie'],
		/*Índice 14, pergunta 15 */	['vest.mp3','vest.jpg','dress.jpg','shirt.jpg','pants.jpg','1', 'Vest']
		];

		$jardim = [
		/*Índice 0, pergunta 1 */	['watering.mp3','flowerpot.jpg','watering.jpg','loan.jpg','esculpture.jpg','2', 'Watering'],
		/*Índice 1, pergunta 2 */	['planter.mp3','fork.jpg','stool.jpg','planter.jpg','flower.jpg','3', 'Planter'],
		/*Índice 2, pergunta 3 */	['flower.mp3','flower.jpg','fountain.jpg','tree.jpg','grass.jpg','1', 'Flower'],
		/*Índice 3, pergunta 4 */	['decking.mp3','decking.jpg','tree.jpg','bird.jpg','pergola.jpg','1', 'Decking'],
		/*Índice 4, pergunta 5 */	['composto.mp3','watering.jpg','stool.jpg','flower.jpg','composto.jpg','4', 'Composto'],
		/*Índice 5, pergunta 6 */	['grass.mp3','bird.jpg','esculpture.jpg','grass.jpg','planter.jpg','3', 'Grass'],
		/*Índice 6, pergunta 7 */	['pergola.mp3','fork.jpg','decking.jpg','pergola.jpg','stool.jpg','3', 'Pergola'],
		/*Índice 7, pergunta 8 */	['bird.mp3','tree.jpg','bird.jpg','fountain.jpg','flowerpot.jpg','2', 'Bird'],
		/*Índice 8, pergunta 9 */	['tree.mp3','loan.jpg','composto.jpg','grass.jpg','tree.jpg','4', 'Tree'],
		/*Índice 9, pergunta 10 */	['fountain.mp3','fountain.jpg','planter.jpg','watering.jpg','flower.jpg','1', 'Fountain'],
		/*Índice 10, pergunta 11 */	['stool.mp3','bird.jpg','planter.jpg','pergola.jpg','stool.jpg','4', 'Stool'],
		/*Índice 11, pergunta 12 */	['fork.mp3','decking.jpg','tree.jpg','fork.jpg','esculpture.jpg','3', 'Fork'],
		/*Índice 12, pergunta 13 */	['loan.mp3','loan.jpg','flower.jpg','fountain.jpg','flowerpot.jpg','1', 'Loan'],
		/*Índice 13, pergunta 14 */	['esculpture.mp3','composto.jpg','esculpture.jpg','grass.jpg','watering.jpg','2', 'Esculpture'],
		/*Índice 14, pergunta 15 */	['flowerpot.mp3','pergola.jpg','flowerpot.jpg','fork.jpg','bird.jpg','2', 'Flowerpot']
		];

		$mobilias = [
		/*Índice 0, pergunta 1 */	['table.mp3','couch.jpg','wardrobe_arm.jpg','table.jpg','nightstand.jpg','3', 'Table'],
		/*Índice 1, pergunta 2 */	['couch.mp3','bed.jpg','chair.jpg','wardrobe_gr.jpg','couch.jpg','4', 'Couch'],
		/*Índice 2, pergunta 3 */	['wardrobe_arm.mp3','fruit_bowl.jpg','wardrobe_arm.jpg','curtains.jpg','chair.jpg','2', 'Wardrobe'],
		/*Índice 3, pergunta 4 */	['nightstand.mp3','nightstand.jpg','dresser.jpg','table.jpg','wardrobe_gr.jpg','1', 'Nightstand'],
		/*Índice 4, pergunta 5 */	['bed.mp3','fruit_bowl.jpg','couch.jpg','curtains.jpg','bed.jpg','4', 'Bed'],
		/*Índice 5, pergunta 6 */	['fruit_bowl.mp3','wardrobe_arm.jpg','chair.jpg','fruit_bowl.jpg','nightstand.jpg','3', 'Fruit Bowl'],
		/*Índice 6, pergunta 7 */	['dresser.mp3','wardrobe_gr.jpg','dresser.jpg','curtains.jpg','couch.jpg','2', 'Dresser'],
		/*Índice 7, pergunta 8 */	['curtains.mp3','nightstand.jpg','curtains.jpg','chair.jpg','table.jpg','2', 'Curtains'],
		/*Índice 8, pergunta 9 */	['chair.mp3','chair.jpg','wardrobe_arm.jpg','couch.jpg','fruit_bowl.jpg','1', 'Chair'],
		/*Índice 9, pergunta 10 */	['wardrobe_gr.mp3','nightstand.jpg','bed.jpg','wardrobe_gr.jpg','dresser.jpg','3', 'Wardrobe']
		];

		$profissoes = [
		/*Índice 0, pergunta 1 */	['electrician.mp3','lawyer.jpg','electrician.jpg','dentist.jpg','singer.jpg','2', 'Electrician'],
		/*Índice 1, pergunta 2 */	['programmer.mp3','writer.jpg','baker.jpg','journalist.jpg','programmer.jpg','4', 'Programmer'],
		/*Índice 2, pergunta 3 */	['writer.mp3','cultivator.jpg','mechanic.jpg','writer.jpg','teacher.jpg','3', 'Writer'],
		/*Índice 3, pergunta 4 */	['driver.mp3','photographer.jpg','driver.jpg','dentist.jpg','doctor.jpg','2', 'Driver'],
		/*Índice 4, pergunta 5 */	['baker.mp3','baker.jpg','teacher.jpg','lawyer.jpg','journalist.jpg','1', 'Baker'],
		/*Índice 5, pergunta 6 */	['teacher.mp3','teacher.jpg','veterinarian.jpg','photographer.jpg','programmer.jpg','1', 'Teacher'],
		/*Índice 6, pergunta 7 */	['veterinarian.mp3','cultivator.jpg','doctor.jpg','veterinarian.jpg','electrician.jpg','3', 'Veterinarian'],
		/*Índice 7, pergunta 8 */	['journalist.mp3','singer.jpg','mechanic.jpg','writer.jpg','Journalist.jpg','4', 'Journalist'],
		/*Índice 8, pergunta 9 */	['lawyer.mp3','dentist.jpg','electrician.jpg','lawyer.jpg','driver.jpg','3', 'Lawyer'],
		/*Índice 9, pergunta 10 */	['mechanic.mp3','baker.jpg','mechanic.jpg','photographer.jpg','cultivator.jpg','2', 'Mechanic'],
		/*Índice 10, pergunta 11 */	['dentist.mp3','dentist.jpg','teacher.jpg','veterinarian.jpg','programmer.jpg','1', 'Dentist'],
		/*Índice 11, pergunta 12 */	['photographer.mp3','singer.jpg','doctor.jpg','photographer.jpg','journalist.jpg','3', 'Photographer'],
		/*Índice 12, pergunta 13 */	['cultivator.mp3','cultivator.jpg','electrician.jpg','writer.jpg','veterinarian.jpg','1', 'Cultivator'],
		/*Índice 13, pergunta 14 */	['doctor.mp3','journalist.jpg','driver.jpg','lawyer.jpg','doctor.jpg','4', 'Doctor'],
		/*Índice 14, pergunta 15 */	['singer.mp3','dentist.jpg','singer.jpg','mechanic.jpg','baker.jpg','2', 'Singer']
		];

		$eletrodomesticos = [
		/*Índice 0, pergunta 1 */	['microwave.mp3','microwave.jpg','blender.jpg','fan.jpg','sandwich_maker.jpg','1', 'Microwave'],
		/*Índice 1, pergunta 2 */	['tv.mp3','radio.jpg','washing_machine.jpg','freezer.jpg','tv.jpg','4', 'TV'],
		/*Índice 2, pergunta 3 */	['sandwich_maker.mp3','refrigerator.jpg','food_mixer.jpg','sandwich_maker.jpg','cooker.jpg','3', 'Sandwich Maker'],
		/*Índice 3, pergunta 4 */	['blender.mp3','coffee_machine.jpg','blender.jpg','aspirator.jpg','clothes_iron.jpg','2', 'blender'],
		/*Índice 4, pergunta 5 */	['air_conditioning.mp3','microwave.jpg','radio.jpg','food_mixer.jpg','air_conditioning.jpg','4', 'Air Conditioning'],
		/*Índice 5, pergunta 6 */	['radio.mp3','radio.jpg','washing_machine.jpg','refrigerator.jpg','aspirator.jpg','1', 'Radio'],
		/*Índice 6, pergunta 7 */	['coffee_machine.mp3','blender.jpg','tv.jpg','cooker.jpg','coffee_machine.jpg','4', 'Coffee Machine'],
		/*Índice 7, pergunta 8 */	['fan.mp3','freezer.jpg','sandwich_maker.jpg','fan.jpg','clothes_iron.jpg','3', 'Fan'],
		/*Índice 8, pergunta 9 */	['freezer.mp3','aspirator.jpg','freezer.jpg','air_conditioning.jpg','refrigerator.jpg','2', 'Freezer'],
		/*Índice 9, pergunta 10 */	['washing_machine.mp3','tv.jpg','washing_machine.jpg','cooker.jpg','microwave.jpg','2', 'Washing Machine'],
		/*Índice 10, pergunta 11 */	['cooker.mp3','radio.jpg','freezer.jpg','cooker.jpg','coffee_machine.jpg','3', 'Cooker'],
		/*Índice 11, pergunta 12 */	['clothes_iron.mp3','refrigerator.jpg','air_conditioning.jpg','sandwich_maker.jpg','clothes_iron.jpg','4', 'Clothes Iron'],
		/*Índice 12, pergunta 13 */	['food_mixer.mp3','food_mixer.jpg','microwave.jpg','aspirator.jpg','blender.jpg','1', 'Food Mixer'],
		/*Índice 13, pergunta 14 */	['refrigerator.mp3','cooker.jpg','fan.jpg','refrigerator.jpg','tv.jpg','3', 'Refrigerator'],
		/*Índice 14, pergunta 15 */	['aspirator.mp3','coffee_machine.jpg','aspirator.jpg','microwave.jpg','sandwich_maker.jpg','2', 'Aspirator']
		];

		if ( $_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['contexto']) && $_POST['contexto'] !== "default")) {
			$_SESSION['contexto'] = $_POST['contexto'];
			$_SESSION['indice'] = 0;
			$_SESSION['acertos'] = 0;
			$_SESSION['erros'] = 0;
		}

		$contexto = $_SESSION['contexto'];

		if ($contexto === 'cozinha'){
			$perguntas = $cozinha;
			$pasta = "utensilios_cozinha";
		}
		else if ($contexto === 'vestuario'){
			$perguntas = $vestuario;
			$pasta = "vestuario";
		}
		else if ($contexto === 'jardim'){
			$perguntas = $jardim;
			$pasta = "jardim";
		}
		else if ($contexto === 'mobilias'){
			$perguntas = $mobilias;
			$pasta = "mobilias";
		}
		else if ($contexto === 'profissoes'){
			$perguntas = $profissoes;
			$pasta = "profissoes";
		}
		else if ($contexto === 'eletrodomesticos'){
			$perguntas = $eletrodomesticos;
			$pasta = "eletrodomesticos";
		}

		if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset"])) {
			$contexto = 'default';
			$_POST['contexto'] = 'default';
			$_SESSION['indice'] = 0;
			$_SESSION['acertos'] = 0;
			$_SESSION['erros'] = 0;
			$indice = 0;
		}

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

		if (isset($_POST["escolha"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
			$escolha = $_POST["escolha"];
			if($escolha === $perguntas[$indice][5]){
				$indice++;
				$acertos++;
				if($indice === sizeof($perguntas)){
					$indice = 0;

					header("location:resultado_final.php");
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
		}
		$_SESSION['indice'] = $indice;
		$_SESSION['acertos'] = $acertos;
		$_SESSION['erros'] = $erros;
	}
	
	if($contexto !== "default"){
		?>
		<h2>Selecione a imagem correspondente ao áudio</h2>
		
		<p style="text-indent: 0;"><span><b>Pergunta: <?= $indice+1; ?></b></span></p>
		<br>
		<br>
		<table>
			<tr>
				<td>
					<h2><?= $perguntas[$indice][6]; ?></h2>
				</td>
				<td>
					<div id="botao_audio">
						<audio id="audio" autoplay src="../audios/<?= $perguntas[$indice][0]; ?>"/></audio>
						<button onclick="document.getElementById('audio').play()"></button>
					</div>
				</td>
			</tr>
		</table>

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			<div class="content">
				<ul class="itens">
					<?php	
					for($i = 1 ; $i <= 4 ; $i++){
						?>
						<div class="item">
							<li class="itens">
									<input class="img" id="img_<?= $i;?>" type="image" src="../imagens/imagens_quiz/<?= $pasta; ?>/<?= $perguntas[$indice][$i]; ?>" name="escolha" value="<?= $i; ?>"/>
							</li>
						</div>
						<?php } ?>
					</ul>
				</div>
			</form>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				<br/>
				<input class="submit" type="submit" name="reset" value="Reset"> 
			</form>
			<?php 
		}
		?>
	</div>
</section>
<?php
include_once 'rodape.php';
?>