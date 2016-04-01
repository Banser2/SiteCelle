<?php
include_once("cabecalho.php");
session_start();
?>
<style type="text/css">
a {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
</style>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<table>
				<tr>
					<td>Usuário</td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Login">
		</form>
		<a href="cadastro.php"><small>Não é cadastrado? Registre-se aqui</small></a>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	// echo md5($_POST['senha']) . "<br>"	;


	$user = $_POST['usuario'];
	$pass = md5($_POST['senha']);
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "site_celle";

	
	$link = mysqli_connect ($server, $username, $password, $dbname);
	$query = "SELECT senha FROM usuarios WHERE usuarios='$user'";
	$result = mysqli_query($link, $query);
	$result = mysqli_fetch_array($result);
	/*echo $result['SENHA'];
	echo "<br>" . $pass;*/
 // var_dump($result);
	if($result){
		$row = count($result);
		// echo "entrou";
		if($row != 0 && $result['senha'] === $pass) {
			// header("location: home.php");
			echo "senha correta!!";
		}
		else {
			echo "Usuário ou senha inválidos!!";
		}
	}
	// echo "nao entrou";
}

mysqli_close($link);
include_once("rodape.php");
?>