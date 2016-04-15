<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_celle";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$erros = $_SESSION['erros'];
$acertos = $_SESSION['acertos'];
$percentual = $_SESSION['aproveitamento'];
$matricula = $_POST['matricula'];

$sql = "INSERT INTO `resultados`(`erros`,`acertos`,`percentual`, `matricula`) VALUES ('$erros', '$acertos', '$percentual', '$matricula')";

if (mysqli_query($conn, $sql)) {
	$_SESSION['erros'] = 0;
	$_SESSION['acertos'] = 0;
	$_SESSION['contexto'] = "default";
    header("location: quiz.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>