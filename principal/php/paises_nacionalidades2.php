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
    font-family: 'SegoeUI', Arial, Helvetica !important;
}
table, tr, td, th{
    border-collapse: collapse;
    padding: 8px 10px;
    font-size: 14.5px;
}
table tr:first-child{
    background-color: #353535;
    color: #FFF
}
table tr:nth-child(even){
    background-color: #DFDFDF;
}
table th{
    text-align: left;
}
#conteudo{
    padding-left: 10px;
    padding-right: 10px;
}
.next_prev {
    text-decoration: none;
    float: right;
    padding-left: 15px;
}
.next_prev:hover {
    color: #00F;
}
th:first-child, th:nth-child(2), th:last-child {
    width: 220px;
}
.paises {
    width: 680px;
}
</style>
<body>
    <section>
        <div id="conteudo">
            <h1 class="t1">Países e Nacionalidades</h1>
            <hr id="hr-top"></hr>
            <div class="paises">
                <table>
                    <tr>
                        <th>Português</th>
                        <th>Inglês</th>
                        <th>Nacionalidade</th>
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
                <br/>
                <a class="next_prev" href="paises_nacionalidades.php">Início</a>
                <a class="next_prev" href="paises_nacionalidades1.php">Anterior</a>
                <br/>
            </div>
        </div>
    </section>
</body>
</html>
<?php 
include_once 'rodape.php';
?>	