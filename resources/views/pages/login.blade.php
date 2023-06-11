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
    <link id="css" rel="stylesheet" href="/css/pages/login.css">


    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png" />
</head>

<body >
@include('components.header')

    <main id="mainLogin">
        <form id="form_login"action="index.html" method="post" name="form_login" id="telalogin">

            <div class="divlogo_login">
              <img src="/img/logos/logoLogin.png"id="logo_login">
            </div>

            <div name="camposlogin" id="camposlogin">

              <label for="login"><b>Usuário</b></label><br>
              <input class="campos_obrigatorios" type="text" name="login" id=login maxlength="6"><br>
              <span class="span" id="span_login">*mensagem!</span><br><br>

              <label for="senha"><b>Senha</b></label><br>
              <input class="campos_obrigatorios" type="password" name="senha"name=senha id="senha" maxlength="20"><br>
              <span class="span" id="span_senha">*mensagem!</span><br><br>


              <div class="botoes_login">
                <button  id="botaologin" type="submit">Login</button>
              </div>
            </div><br>


            <p id="cadastre_aqui">Não possui login? <a id="cadastre_aqui" href="{{route('cadastro')}}">Cadastre-se aqui.</a></p>
          </form>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>

