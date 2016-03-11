<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Sobre</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="Imagens/logoIFPE.png"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
	</head>
	<body>
       <header>
        <div id="logo">
                <div class="banner">
                    <div id="logo-reitoria">
                        <img src="Imagens/Logo.png" widht="300px" height="90px">
                        <a class="acesso-reitoria"></a>
                    </div>
                </div>
            </div>  
          <nav id="menu">
        <ul class="menu">        
        <li><a href="#" class="botaoMenu" id="home.php">Home</a></li>
        <li><a href="#" class="botaoMenu" id="sobre.php">Sobre</a></li>
        <li><a href="#" class="botaoMenu" id="noticias.php">Notícias</a></li>
        <li><a href="#" id="#">Mídia</a>
            <ul>
                <li><a href="#" class="botaoMenu" id="videos.php">Vídeos</a></li>
                <li><a href="#" class="botaoMenu" id="audios.php">Áudios</a></li>
            </ul>
        </li>
        <li><a href="#" class="botaoMenu" id="sites_relacionados.php">Sites Relacionados</a></li>
        <li><a href="#" class="botaoMenu" id="contatos.php">Contato</a></li>
        <li><a href="#" class="botaoMenu" id="exercicio.php">exercicio</a><li>
            </ul>
<br><br><br>
 </nav>
</header>
<section>
    <div id="conteudo">
		
    </div>
</section>
<footer>
<br>
Avenida Alfredo Bandeira de Melo, BR 101 norte - km 44
Centro, Igarassu - PE, Cep: 53610-000<br>
Fale com o CELLE:
celle@igarassu.ifpe.edu.br
 (81) 3334 - 3507    
</footer>
		<script>
		$( window ).load(function() {
		  $('#conteudo').load('html/sobre.html');
		});
			
        $('.botaoMenu').click(function(event) {
			var pagina = event.target.id;
            $('#conteudo').load('html/' +pagina);
        });
		

      </script>
    </body>
    </html>