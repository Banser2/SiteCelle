<?php 
require 'cabecalho.php';   
?>
  <div id="conteudo">
<?
include "funcao.php";
?>
<?
if(strlen($_POST['nome']))
{
    if(sendMail($_POST['matricula'],'suamatricula', $_POST['mensagem'], 'Envio de Arquivos'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    ?>
    <?php
    echo "<br><a href='form.php'>Voltar</a>";
   
?>
<?php


$uploaddir = '/var/www/uploads/';

?>
<!DOCTYPE html>
<html>
<head>
  
	<title>Envio de Arquivos</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    
</head>
<body>
	<h2>Envio de arquivos </h2>
    <hr id="hr-top"></hr>
    <form method="post" id="envio_de_arquivo" onsubmit="validaForm(); return false;" class="form">
		<p class="name">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
		<p class="matricula">
            <label for="matricula">Nº da Matricula </label>
            <input type="text" name="matricula" id="matricula" placeholder="Sua Matricula" />
		</p>			
	<form enctype="multipart/form-data" action="form.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
   <label >Arquivo </label> <input name="userfile" type="file" />
    <p class="submit">
    <input type="submit" value="Enviar arquivo" /></p>
</form>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#matricula').val() == '' && !erro)
            {
                echo alert(echo'Você precisa preencher o campo Matricula');erro = true;
            }
           
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
  
</body> 
</html>
</div>
 <?php 
require 'rodape.php';   
?>