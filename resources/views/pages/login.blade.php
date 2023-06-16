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



        <form id="form_login"action="{{route('auth.user')}}" method="post" name="form_login" id="telalogin">
            @csrf

            <div class="divlogo_login">
              <img src="/img/logos/logoLogin.png"id="logo_login">
            </div>

            @if(session('success'))
                        <div id="success-message" class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as $error )
                        <h6>{{$error}}</h6>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('error_login'))
            <div  class="alert alert-danger">
                <ul>
                 {{session('error_login')}}
                </ul>
            </div>
            @endif


            <div name="camposlogin" id="camposlogin">

              <label for="email"><b>Email</b></label><br>
              <input class="campos_obrigatorios" type="text" name="email" id=email><br>
              <br><br>

              <label for="senha"><b>Senha</b></label><br>
              <input class="campos_obrigatorios" type="password" name="password" ><br>
              <br><br>


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
    <script src="/js/message.js" ></script>
</body>
</html>

