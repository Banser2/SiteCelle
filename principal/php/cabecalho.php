<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <!-- <title>Sobre</title> -->
    <meta charset="utf-8">
    <script src="../javaScript/jquery-1.12.0.min.js"></script>
    <link rel="shortcut icon" href="../imagens/logoIFPE.png"/>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/estilo_quiz.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/kickstart-buttons.css" media="all">
    <script src="../javaScript/javaScript.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <?php
            if(!isset($_SESSION['usuario'])){
            ?>
            <!-- formulário de login -->
                <div class="login">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <table id="login" cellspacing="5">
                            <tr>
                                <td><span class="log">Usuário</span></td>
                                <td><input type="text" name="usuario" required></td>
                            </tr>
                            <tr>
                                <td><span class="log">Senha</span></td>
                                <td><input type="password" name="senha" required></td>
                                <td><input class="large" type="submit" name="enviar" Value="Login"></td>
                            </tr>
                        </table>
                        <a href="cadastro.php"><small>Não é cadastrado? Cadastre-se aqui</small></a>
                    </form>
                </div>
                <?php
            } else {            
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <input class="submit logout" style="margin-right: 15%; margin-top: 52px;" type="submit" name="logout" value="Logout">
                </form>
                <?php
                echo "<span class='boas_vindas'>Bem vindo(a), <b>" . $_SESSION['usuario'] . "</b>!! </span>";
            }
            if(isset($_POST['logout'])) {
                unset($_SESSION['usuario']);
                header("location: home.php");
            }
            ?>
            <div class="banner">
                <div id="logo-reitoria">
                    <img src="../imagens/logo.png" widht="300px" height="90px">
                    <a class="acesso-reitoria"></a>
                </div>
            </div>
        </div>  
        <nav id="menu">
            <ul class="menu">        
                <li><a href="home.php" class="botaoMenu" id="home.php">Home</a></li>
                <li><a href="sobre.php" class="botaoMenu" id="sobre.php">Sobre</a></li>
                <li><a href="noticias.php" class="botaoMenu" id="noticias.php">Notícias</a></li>
                <li><a href="#" id="#">Mídia</a>
                    <ul>
                        <li><a href="videos.php" class="botaoMenu" id="videos.php">Vídeos</a></li>
                        <li><a href="audios.php" class="botaoMenu" id="audios.php">Áudios</a></li>
                    </ul>
                </li>
                <li><a href="#" id="#">Atividades</a>
                    <ul>
        <li><a href="quiz.php" class="botaoMenu">Quiz 1</a></li>
        <li><a href="exercicio.php" class="botaoMenu">Quiz 2</a></li>
                    </ul>
                </li>
                <li><a href="#" id="#">Conteúdos</a>
                    <ul>
                        <li><a href="paises_nacionalidades.php" class="botaoMenu" id="paises_nacionalidades.php">Países e Nacionalidades</a></li>
                        <li><a href="expressoes_termos.php" class="botaoMenu" id="expressoes_termos.php">Expressões e Termos</a></li>
            <li><a href="numero.php" class="botaoMenu" id="numero.php">Numerais</a></li>
    <li><a href="medidas.php" class="botaoMenu" id="medidas.php">Medidas</a></li>
                    </ul>    
                </li>
                <li><a href="arquivos.php" class="botaoMenu" id="arquivos.php">Envio</a></li>
                <li><a href="sites_relacionados.php" class="botaoMenu" id="sites_relacionados.php">Sites Relacionados</a></li>        
                <li><a href="contatos.php" class="botaoMenu" id="CONTATOS.php">Contato</a></li>
            </ul>
            <br><br>
        </nav>
    </header>
    <?php
    if(isset($_POST['enviar'])) {
        $user = $_POST['usuario'];
        $pass = md5($_POST['senha']);
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "site_celle";

        $link = mysqli_connect ($server, $username, $password, $dbname);
        $query = "SELECT senha, usuario FROM usuarios WHERE usuario='$user' AND senha='$pass'";
        $result = mysqli_query($link, $query);
        
        if($result){
            $arr = mysqli_fetch_assoc($result);
            $row = mysqli_num_rows($result);
        // echo "entrou";
            if($user == $arr['usuario'] && $pass == $arr['senha']){
                $_SESSION['usuario'] = $user;
            }
            if($row != 0) {
                header("location: home.php");
            }
            else {
            // header("location: sobre.php");
                echo "<script>
                alert('Usuário ou senha incorretos!!');
                </script>";
            }
        }

        mysqli_close($link);
    }
    ?>