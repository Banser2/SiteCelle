<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_celle";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





    $matricula  = $_POST ['matricula'];
	$nome = $_POST ['nome'];
	$sexo = $_POST ['sexo'];
	$nasc_dia = $_POST ['nasc_dia'];
	$nasc_mes = $_POST ['nasc_mes'];
	$nasc_ano = $_POST ['nasc_ano'];
	$telefone = $_POST ['telefone'];
	$email  = $_POST ['email'];
	$password  = $_POST ['password'];
	$confirm_password = $_POST ['confirm_password'];
    $periodo = $_POST ['periodo'];
	$curso = $_POST ['curso'];

	$datanasc = $nasc_dia."/".$nasc_mes."/".$nasc_ano;


	$sql = "INSERT INTO `usuario`(`matricula`, `nome`, `sexo`, `datanasc`, `telefone`, `email`, `senha`, `confirma_senha`, `periodo`, `curso`) VALUES ('$matricula','$nome','$sexo','$datanasc','$telefone','$email','$password','$confirm_password','$periodo','$curso')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>




