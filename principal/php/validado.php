<?php
require["conexao.php"];
$acao=$_GET ["acao"];

if($acao == ["enviar"]){
	$nome = $_POST ['nome'];
	$sexo = $_POST ['sexo'];
	$data_de_Nascimento = $_POST ['Data de Nascimento'];
	$telefone = $_POST ['Telefone'];
	$email  = $_POST ['Email '];
	$senha  = $_POST ['Senha '];
	$confirmar_Senha = $_POST ['Confirmar Senha'];
	$matricula  = $_POST ['Periodo'];
	$curso = $_POST ['Curso'];

	$datanasc =$dia."/".$mes."/".$ano

	$enviar_banco=mysql_query("INSERT INTO cadastro_aluno values (",'$matricula','$nome','$sexo','$$data_de_Nascimento','$telefone','$email ','$senha',
		'$confirmar_Senha','$curso',")
}




?>
