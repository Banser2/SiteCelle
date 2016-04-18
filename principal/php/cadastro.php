<?php 
include_once 'cabecalho.php';
?>
<title>Cadastro</title>
<section>
	<div id="conteudo">
     <h1 class="t1">Cadastro</h1>
     <hr id="hr-top"></hr>
     <div id="area">
        <span>Atenção, os campos marcados com o (*) são obrigatórios</span>
        <form method="POST" accept-charset="utf-8" class="form-group" action="validador.php" id="formulario">
            <div style="display:none">
                <input type="hidden" name="_method" value="POST">
            </div>
            <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="input text required" style="min-width: 350px; width: 35%">
                    <label for="nome">Nome *</label>
                    <input type="text" name="nome" class="control" required maxlength="50" id="nome">
                </div>
                <div class="mi-form-inline">
                    <div class="input select required" style="min-widht: 210px; width: 30%;" float="left">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" required id="sexo">
                            <option value="empty">Selecione</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>    
                    <div class="input date required" style="min-widht: 280px; width: 40%;" float="left">
                     <label>Data de Nascimento:</label>
                     <select name="nasc_dia">
                        <option value="dia">Dia</option>
                        <option value="01">1</option>
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

                    <select name="nasc_mes">
                        <option value="mes" selected>Mês</option>
                        <option value="01" >Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março</option>
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

                    <select name="nasc_ano">
                        <option value="ano"  selected>Ano</option>
                        <option value="2006">2006</option>
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
                <div class="my-form-inline" style="min-width: 100px; width: 15%;" float="left">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="control" maxlength="11" id="telefone">
                </div>
            </div>
            <div class="my-form-inline">
                <div class="input email required" style="min-width: 350px; width: 35%">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="control" id="email" required maxlength="50">
                </div>
                <div class="input usuario required" style="min-width: 350px; width: 35%">
                    <label for="usuario">Usuário *</label>
                    <input type="usuario" name="usuario" class="control" id="usuario" required maxlength="30">
                </div>
                <div style="min-width: 120px; width: 15%" class="input password required">
                  <label for="password">Senha *</label>
                  <input type="password" name="password" class="control" required id="password">
              </div>
              <div style="min-width: 120px; width: 15%" class="input password required">
                <label for="confirm_password">Confirmar Senha *</label>
                <input type="password" name="confirm_password" class="control" required id="confirm-password">
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Curso</legend>
        <div class="my-form-inline">
            <div class="imput matricula required" style="min-width: 100px; width: 20%;">
                <label for="matricula">Matricula *</label>
                <input type="text" name="matricula" class="control" required id="matricula" maxlength="14"> 
            </div>
            <div class="input text required" style="min-width: 90px; width: 15%">
                <label for="periodo">Periodo *</label>
                <select name="periodo" required id="Periodo">
                    <option value="1">1° Periodo</option>
                    <option value="2">2° Periodo</option>
                    <option value="3">3° Periodo</option>
                    <option value="4">4° Periodo</option>
                </select>
            </div>
            <div class="input text required" style="min-width: 100px; width: 15%">
                <label for="curso">Curso *</label>
                <input type="text" name="curso" class="control" id="curso" maxlength="30">
            </div>
        </div>
    </fieldset>
    <input class="submit" type="submit" name="submit" value="Enviar">
    <input class="reset" type="reset" name="reset" value="Limpar">
</form>
</div>
</div>
</section>
<script type="text/javascript">
$('form').on('submit', function () {
    if($(this).find('input[name="password"]').val() != $(this).find('input[name="confirm_password"]').val()) {
        alert("Senhas digitadas não conferem!!");
        $('#password').focus();
        return false;
    }
});
</script>
<?php 
include_once 'rodape.php';
?>