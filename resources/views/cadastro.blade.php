<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link id="css" rel="stylesheet" href="/css/pages/css.css">
    <link id="css" rel="stylesheet" href="/css/pages/cadastro.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body id="body_cadastro">

@include('components.header')

    <main id="mainCadastro">

        <form action="login.html" method="post" name=cadastro id="cadastro">


            <div class="container" name="campos_cadastro" id="campos_cadastro">

                <div id="infoPessoais">
                    <div id="infoPessoais1">
                        <label for="nome">Nome</label><br>
                        <input class="campos_obrigatorios" type="text" id="nome" name="nome" ><br>
                        <span class="span" id="span_nome">*mensagem!</span><br>

                        <label for="datanasci">Data de nascimento</label><br>
                        <input class="campos_obrigatorios" type="date" id="datanasci" name="datanasci"><br>
                        <span class="span" id="span_datanasci">*mensagem!</span><br>

                        <label for="cpf">CPF</label><br>
                        <input class="campos_obrigatorios" type="text"id="cpf"name="cpf" autocomplete="oof" placeholder="xxx.xxx.xxx-xx"><br>
                        <span class="span" id="span_cpf">*mensagem!</span><br>

                        <label for="tel_cel">Telefone celular</label><br>
                        <input class="campos_obrigatorios" type="tel" name="tel_cel" id="tel_cel"  placeholder="xx (xx) xxxx-xxxx"><br>
                        <span class="span" id="span_tel_cel">*mensagem!</span><br>
                    </div>

                    <div id="infoPessoais2">
                        <label for="email">E-mail</label><br>
                        <input class="campos_obrigatorios" type="text"id="email"name="email" placeholder="xx@xx.xx"><br>
                        <span class="span" id="span_email">*mensagem!</span><br>

                        <label for="senha">Senha</label><br>
                        <input class="campos_obrigatorios" type="password" name="senha" id="senha" ><br>
                        <span class="span" id="span_senha">*mensagem!</span>
                        <h6 id="inf_senha"> A senha deve conter de 8 a 15 caracteres com uma combinação de letras maiúsculas, minúsculas, números e símbolos</h6>
                        <br>

                        <label for="confsenha">Confirme a senha</label><br>
                        <input class="campos_obrigatorios" type="password" name="confsenha" id="confsenha"><br>
                        <span class="span" id="span_confsenha">*mensagem!</span>
                    </div>
                </div>

                <div id="endereco">
                    <div id="endereco1">
                        <label for="CEP">CEP</label><br>
                        <input class="campos_obrigatorios" type="text" id="CEP" name="CEP" size="10" placeholder="xxxxx-xx" onblur="pesquisacep(this.value);"><br>
                        <span class="span" id="span_CEP">*mensagem!</span><br>

                        <label for="UF">UF</label><br>
                        <select class="campos_obrigatorios" id="UF" name="UF">
                        <option value="">Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                        </select><br><br>

                        <label for="cidade">Cidade</label><br>
                        <input class="campos_obrigatorios" type="text" id="cidade" name="cidade"><br>
                        <span class="span" id="span_cidade">*mensagem!</span><br>

                        <label for="bairro">Bairro</label><br>
                        <input class="campos_obrigatorios" type="text" id="bairro" name="bairro"><br>
                        <span class="span" id="span_bairro">*mensagem!</span><br>
                    </div>

                    <div>
                        <label for="rua">Rua</label><br>
                        <input class="campos_obrigatorios" name="rua" id="rua"  ></input><br>
                        <span class="span" id="span_rua">*mensagem!</span><br>


                        <label for="numero_entrada">Número</label><br>
                        <input class="campos_obrigatorios" type="text" id="numero_entrada" name="numero_entrada"><br>
                        <span class="span" id="span_numero_entrada">*mensagem!</span><br>

                        <label for="complemento">Complemento</label><br>
                        <input type="text" id="complemento" name="complemento"><br>
                        <span class="span" id="span_complemento">*mensagem!</span>
                    </div>
                </div>
            </div><br>

            <div class="botoescontainerCadastro">

                <div class="divlogo_casdastro">
                    <img id="logo_cadastro" src="/img/logos/logoLogin.png"id="logo_login">
                  </div>

                <button class="botoes_cadastro"type="submit"name='botaocadastrar' id= 'botaocadastrar'>Cadastrar</button>
                <button class="botoes_cadastro"name= 'botaolimpar' id='botaolimpar' type="reset">Limpar</button>
            </div>

        </form>

    </main>

    @include('components.footer')

    <script src="/js/includeHTML.js"> </script>
    <script src="/js/cadastro.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
