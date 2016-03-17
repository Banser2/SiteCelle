<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro Celle</title>
        <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css">
    </head>
    <body>
        <div id="area">
            <span>Atenção, os campos marcados com o * asterisco são obrigatorias</span>
                <form method="post" accept-charset="utf-8" class="form-group" action="/user/add" id="formulario">
                    <div style="display:none">
                        <input type="hidden" name="_method" value="POST">
                    </div>
                    <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="input text required">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="control" required="required" maxlength="50" id="nome">
                        </div>
                        <div class="my-form-inline">
                            <div style="min-widht: 210px; width: 30%;">
                            <div class="input select required">
                                <label for="sexo">Sexo</label>
                                <select name="Sexo" required="required" id="sexo">
                                    <option value="empty">Selecione</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>    
                            </div>
                            <div style="min-widht: 280px; width: 40%;">
                            <div class="input date required">
                                <label>Data de Nascimento: (Dia/Mês/Ano)</label>
                                <select name="Nascimento[day]">
                                    <option value="01" selected="selected">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="nascimento[month]">
                                    <option value="01">Janeiro</option>
                                    <option value="02">Fevereiro</option>
                                    <option value="03" selected="selected">Março</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Maio</option>
                                    <option value="06">Junho</option>
                                    <option value="07">Julho</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select>
                                <select name="nascimento[year]">
                                    <option value="2006" selected="selected">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                </select>
                            </div>
                            </div>
                                <div class="my-form-inline">
                                <div style="min-width: 180px; widht:15%;">
                                    <div class="input text">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="telefone" class="control" maxlength="11" id="telefone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-form-inline">
                            <div style="min-width: 350px; width: 35%">
                            <div class="input email required">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="control" id="email" required="required" maxlength="50"
                            </div>
                        <div class="input passoword required">
                              <label for="passowrd">Senha</label>
                              <input type="password" name="passoword" class="control" required="required" id="passoword">
                        </div>
                            </div>
                        <div class="input passoword required">
                            <label for="confirm-passoword">Confirmar Senha</label>
                            <input type="passoword" name="confirm_passoword" class="control" required="required" id="conform-passoword">
                        </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Curso</legend>
                        <div class="my-form-inline">
                            <div style="min-width: 140px; width: 21%;">
                            <div class="imput matricula required">
                                <label for="matricula">Matricula</label>
                                <input type="text" name="matricula" class="control" required="required"
                                id="matricula" maxlength="14"> 
                            </div>
                            </div>
                        <div style="min-width: 180px; width: 25%">
                            <div class="input text required">
                                <label for="periodo">Periodo</label>
                                <input type="text" name="periodo" class="control" required="required"
                                id="periodo" maxlength="1">
                            </div>
                        </div>
                        <div style="min-width: 180px; width: 25%">
                            <div class="input text required">
                                <label for="curso">curso</label>
                                <input type="text" name="curso" class="control" required="required"
                                id="curso">
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </form>
        </div>
    </body>
</html>