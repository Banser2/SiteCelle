<?php
include_once 'cabecalho.php';

if(isset($_POST['submeter'])){
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
$contexto = $_SESSION['contexto'];

$sql = "INSERT INTO `resultados`(`erros`,`acertos`,`percentual`, `matricula`, `contexto`) VALUES ('$erros', '$acertos', '$percentual', '$matricula', '$contexto')";

if (mysqli_query($conn, $sql)) {
	$_SESSION['erros'] = 0;
	$_SESSION['acertos'] = 0;
	$_SESSION['contexto'] = "default";

	echo "<div id='conteudo'>
			<h3 style='margin-top: 30px;'>Resultado salvo com sucesso!!</h3>
			<br/><br/>
			<a href='quiz.php'>Clique aqui para voltar ao quiz</a>
		  </div>
	";
    // header("location: quiz.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
include_once 'rodape.php';
?>