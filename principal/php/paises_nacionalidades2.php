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
                <h2>Países e Nacionalidades</h2>
                <hr id="hr-top"></hr>
                    <tr>
                        <td>Português</td>
                        <td>Inglês</td>
                        <td>Nacionalidade</td>
                    </tr>
                    <tr>
                        <td>Mônaco</td>
                        <td>Monaco</td>
                        <td>Monacan</td>
                    </tr>
                    <tr>
                        <td>Noruega</td>
                        <td>Norway</td>
                        <td>Norwegian</td>
                    </tr>
                    <tr>
                        <td>Nova Zelâdia</td>
                        <td>New Zeland</td>
                        <td>New Zelander</td>
                    </tr>
                    <tr>
                        <td>Panamá</td>
                        <td>Panama</td>
                        <td>Panamanian</td>
                    </tr>
                    <tr>
                        <td>Paquistão</td>
                        <td>Pakistan</td>
                        <td>Pakistani</td>
                    </tr>
                    <tr>
                        <td>Paraguai</td>
                        <td>Paraguay</td>
                        <td>Paraguayan</td>
                    </tr>
                    <tr>
                        <td>Peru</td>
                        <td>Peru</td>
                        <td>Peruvian</td>
                    </tr>
                    <tr>
                        <td>Polônia</td>
                        <td>Poland</td>
                        <td>Pole</td>
                    </tr>
                    <tr>
                        <td>Portugal</td>
                        <td>Portugal</td>
                        <td>Portuguese</td>
                    </tr>
                    <tr>
                        <td>Rússia</td>
                        <td>Russia</td>
                        <td>Russian</td>
                    </tr>
                    <tr>
                        <td>Suécia</td>
                        <td>Sweden</td>
                        <td>Swede</td>
                    </tr>
                    <tr>
                        <td>Suíça</td>
                        <td>Swizerland</td>
                        <td>Swiss</td>
                    </tr>
                    <tr>
                        <td>Tailândia</td>
                        <td>Thailand</td>
                        <td>Thai</td>
                    </tr>
                    <tr>
                        <td>Turquia</td>
                        <td>Turkey</td>
                        <td>Turkish</td>
                    </tr>
                    <tr>
                        <td>Venezuela</td>
                        <td>Venezuela</td>
                        <td>Venezuelan</td>
                    </tr>
                    <tr>
                        <td>Uruguai</td>
                        <td>Uruguay</td>
                        <td>Uruguayan</td>
                    </tr>
                    <tr>
                        <td>Vietnã</td>
                        <td>Vietnam</td>
                        <td>Vietnamese</td>
                    </tr>
            </table>
                <a href="paises_nacionalidades.php">Inicio</a>
            <a href="paises_nacionalidades1.php">Anterior</a>
        </div>
    </section>
</body>
</html>
<?php 
	include_once 'rodape.php';
?>	