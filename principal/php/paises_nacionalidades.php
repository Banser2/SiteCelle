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
                        <td>Afeganistão</td>
                        <td>Afghanistan</td>
                        <td>Afghan</td>
                    </tr>
                    <tr>
                        <td>África do Sul</td>
                        <td>South Africa</td>
                        <td>South African</td>
                    </tr>
                    <tr>
                        <td>Alemanha</td>
                        <td>Germany</td>
                        <td>German</td>
                    </tr>   
                    <tr>
                        <td>Arábia Saudita</td>
                        <td>Saudi Arabia</td>
                        <td>Saudi</td>
                    </tr>   
                    <tr>
                        <td>Argentina</td>
                        <td>Argentina</td>
                        <td>Argentinian</td>
                    </tr>   
                    <tr>
                        <td>Austrália</td>
                        <td>Australia</td>
                        <td>Australian</td>
                    </tr>   
                    <tr>
                        <td>Áustria</td>
                        <td>Austria</td>
                        <td>Austrian</td>
                    </tr>   
                    <tr>
                        <td>Bélgica</td>
                        <td>Belgium</td>
                        <td>Belgian</td>
                    </tr>   
                    <tr>
                        <td>Bolívia</td>
                        <td>Bolivia</td>
                        <td>Bolivian</td>
                    </tr>   
                    <tr>
                        <td>Brasil</td>
                        <td>Brazil</td>
                        <td>Brazilian</td>
                    </tr>               
                    <tr>
                        <td>Bulgária</td>
                        <td>Bulgaria</td>
                        <td>Bulgarian</td>
                    </tr>   
                    <tr>
                        <td>Canadá</td>
                        <td>Canada</td>
                        <td>Canadian</td>
                    </tr>   
                    <tr>
                        <td>Chile</td>
                        <td>Chile</td>
                        <td>Chilean</td>
                    </tr>   
                    <tr>
                        <td>China</td>
                        <td>China</td>
                        <td>Chinese</td>
                    </tr>   
                    <tr>
                        <td>Colômbia</td>
                        <td>Colombia</td>
                        <td>Colombian</td>
                    </tr>   
                    <tr>
                        <td>Coréia</td>
                        <td>Korea</td>
                        <td>Korean</td>
                    </tr>   
                    <tr>
                        <td>Cuba</td>
                        <td>Cuba</td>
                        <td>Cuban</td>
                    </tr>   
                    <tr>
                        <td>Dinamarca</td>
                        <td>Denmark</td>
                        <td>Dane</td>
                    </tr>   
                    <tr>
                        <td>Egito</td>
                        <td>Egypt</td>
                        <td>Egyptian</td>
                    </tr>   
                    <tr>
                        <td>Equador</td>
                        <td>Ecuador</td>
                        <td>Ecuadorian</td>
                    </tr>
                </table>
                <br/>
                <a class="next_prev" href="paises_nacionalidades1.php">Próximo</a>
                <br/>
            </div>
        </div>
    </section>
</body>
</html>
<?php 
include_once 'rodape.php';
?>
