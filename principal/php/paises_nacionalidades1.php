<?php
    include_once 'cabecalho.php';
?>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Tabela</title>
</head>
<style type="text/css">
    * {
        font-family:sans-serif;
    }
    table, tr, td, th{
        border-collapse: collapse;
        padding: 8px 10px;
    }
    table tr:first-child{
        background-color: #353535;
        color: #FFF
    }
    table tr:nth-child(even){
        background-color: #DFDFDF;
    }
    th{
        text-align: left;
    }
    #conteudo{
        padding-left: 10px;
        padding-right: 10px;
    }

</style>
<body>
    <section>
        <div id="conteudo">
            <table>
                <h2>Paises e Nacionalidades</h2>
                <hr id="hr-top"></hr>
                    <tr>
                        <th>Português</th>
                        <th>Inglês</th>
                        <th>Nacionalidades</th>
                    </tr>
                    <tr>
                        <td>Escócia</td>
                        <td>Scotland</td>
                        <td>Scot, Scottish</td>
                    </tr>	
                    <tr>
                        <td>Espanha</td>
                        <td>Spain</td>
                        <td>Spaniard, Spanis</td>
                    </tr>	
                    <tr>
                        <td>Estados Unidos da América</td>
                        <td>United States of America</td>
                        <td>American</td>
                    </tr>	
                    <tr>
                        <td>Filipinas</td>
                        <td>Philippines</td>
                        <td>Philippine</td>
                    </tr>	
                    <tr>
                        <td>Finlândia</td>
                        <td>Finland</td>
                        <td>Finn</td>
                    </tr> 
                    <tr>
                        <td>França</td>
                        <td>France</td>
                        <td>French</td>
                    </tr> 
                    <tr>
                        <td>Gales</td>
                        <td>Wales</td>
                        <td>Welsh</td>
                    </tr> 
                    <tr>
                        <td>Grécia</td>
                        <td>Greece</td>
                        <td>Greek</td>
                    </tr> 
                    <tr>
                        <td>Holanda</td>
                        <td>Holland</td>
                        <td>Dutch</td>
                    </tr> 
                    <tr>
                        <td>Hungria</td>
                        <td>Hungary</td>
                        <td>Hungarian</td>
                    </tr>
                    <tr>
                        <td>Índia</td>
                        <td>India</td>
                        <td>Indian</td>
                    </tr>
                    <tr>
                        <td>Inglaterra</td>
                        <td>England</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>Indonésia</td>
                        <td>Indonesia</td>
                        <td>Indonesian</td>
                    </tr>
                    <tr>
                        <td>Iraque</td>
                        <td>Iraq</td>
                        <td>Iraqi</td>
                    </tr>
                    <tr>
                        <td>Israel</td>
                        <td>Israel</td>
                        <td>Israeli</td>
                    </tr>
                    <tr>
                        <td>Itália</td>
                        <td>Italy</td>
                        <td>Italian</td>
                    </tr>
                    <tr>
                        <td>Jamaica</td>
                        <td>Jamaica</td>
                        <td>Jamaican</td>
                    </tr>
                    <tr>
                        <td>Japão</td>
                        <td>Japan</td>
                        <td>Japanese</td>
                    </tr>
                    <tr>
                        <td>Líbano</td>
                        <td>Lebanon</td>
                        <td>Lebanese</td>
                    </tr>
                    <tr>
                        <td>Marrocos</td>
                        <td>Marrocco</td>
                        <td>Marroccan</td>
                    </tr>
                    <tr>
                        <td>México</td>
                        <td>Mexico</td>
                        <td>Mexican</td>
                    </tr>

                </table>
                    <a href="paises_nacionalidades.php">Anterior</a>
                    <a href="paises_nacionalidades2.php">Proximo</a>
        </div>
    </section>
</body>
</html>
<?php 
	include_once 'rodape.php';
?>