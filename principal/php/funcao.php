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
 $matricula = $_POST['matricula']
 $nomeatividade = $_POST['nomeatividade']
 $arquivo = $_POST["arquivo"]

    $sql = "INSERT INTO `stc_envio`(`ENV_MATRICULA`,`ENV_MATRICULA`,`ENV_ARQUIVO`) VALUES
   ('$matricula','$nomeatividade','$arquivo')";

if (mysqli_query($conn, $sql)) {
  echo "new record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn) ;

?>