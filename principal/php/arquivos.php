<?php 
require 'cabecalho.php';   
?>
  <div id="conteudo">
<?php


$uploaddir = '/var/www/uploads/';

?>
<!DOCTYPE html>
<html>
<head>
  
	<title>Envio de Arquivos</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <script type="text/javascript">
        function validaForm()
        {
            console.log($('#nome').val());
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#matricula').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Matricula');erro = true;
            }
           
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
</head>
<body>
	<h2>Envio de arquivos </h2>
    <hr id="hr-top"></hr>
    <form method="post" id="envio_de_arquivo" onsubmit="validaForm(); return false;" class="form">
		<div class="name">
            <label for="name">Nome da Atividade</label>
            <input type="text" name="nome" class="control" id="nome" placeholder="Nome da Atividade" />
		</div>
		<div class="name">
            <label for="matricula">Nº da Matricula </label>
            <input type="text" name="matricula" class="control" id="matricula" placeholder="Sua Matricula" />
		</div>			
	<form enctype="multipart/form-data" action="" method="POST" onsubmit="validaForm();">
    <input type="hidden" name="MAX_FILE_SIZE" class="control" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
   <label >Arquivo </label> <input name="arquivo" type="file" class="control"/>
    <input type="submit" value="Enviar arquivo" /></p>
</form>
    
  
</body> 
</html>
</div>
 <?php 
require 'rodape.php';   
?>