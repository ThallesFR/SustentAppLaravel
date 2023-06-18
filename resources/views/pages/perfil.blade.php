<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Toastr-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- css -->
    <link id="css" rel="stylesheet" href="/css/pages/css.css">
    <link id="css" rel="stylesheet" href="/css/pages/perfil.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

@include('components.header')

    <main id="mainPerfil">
        <div id="apresentacao">

            <div><svg id="iconUser" xmlns="http://www.w3.org/2000/svg"  width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </div>

            <h4>Olá!</h4>
        </div>

        <section>

            <h1>Dados pessoais</h1>
            <div id="dadosPessoais" >

                <div id="infoPessoais">
                    <div id="infoPessoais1">
                        <label for="nome">Nome: {{ auth()->user()->nome }}</label><br>

                        <label for="datanasci">Data de nascimento: {{ auth()->user()->nascimento }}</label><br>

                        <label for="cpf">CPF: {{ auth()->user()->CPF }} </label><br>

                        <label for="tel_cel">Telefone celular: {{ auth()->user()->celular }}</label><br>

                    </div>

                    <div id="infoPessoais2">
                        <label for="email">E-mail: {{ auth()->user()->email}}</label><br>

                    </div>
                </div><br><br>

                <div id="endereco">
                    <div id="endereco1">
                        <label for="CEP">CEP: {{ auth()->user()->CEP }}</label><br>

                        <label >UF: {{ auth()->user()->UF}}</label><br>

                        <label >Cidade: {{ auth()->user()->cidade}}</label><br>

                        <label for="bairro">Bairro: {{ auth()->user()->bairro }}</label><br>
                    </div>

                    <div>
                        <label for="rua">Rua</label><br>

                        <label for="numero_entrada">Número: {{ auth()->user()->numero }}</label><br>

                        @if (auth()->user()->complemento != "")

                            <label for="complemento">Complemento: {{ auth()->user()->complemento }}</label><br>

                        @endif
                    </div>
                </div>
            </div><br>


            <h1>Pedidos concluídos</h1>
            <div id="pedidosConcluidos">
                @if ($numeroPedidos != "0")
                    @foreach ($findPedidos as $pedido)
                        <div id="containerPedido">
                            <div>
                                <h5>NÚMERO DO PEDIDO</h5><br>
                                <p>{{ $pedido->id }}</p>
                            </div>

                            <div>
                                <h5>DATA/HORA</h5><br>
                                <p>{{ $pedido->created_at }}</p>
                            </div>

                            <div>
                                <h5>VALOR</h5><br>
                                <p>{{ $pedido->valor }}</p>
                            </div>

                            <meta name='csrf-token' content="{{ csrf_token() }}" />
                            <a onclick="deleteRegistroPaginacao('{{ route('pedidos.delete') }}', {{ $pedido->id }})" id="deleteLixeira">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>
                        </div>
                    @endforeach
                    @else

                        <h2 id="textvazio" class="carrinhoVazio">Você não tem pedidos registrados.</h2><br>

                @endif


            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
    <script src="/js/funcoes.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>
</html>
