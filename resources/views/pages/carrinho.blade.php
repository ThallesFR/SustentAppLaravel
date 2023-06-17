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
    <link id="css" rel="stylesheet" href="/css/pages/carrinho.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

@include('components.header')

    <main id="mainCarrinho">

        <div id="containerCarrinho">
            <h1 id="titulo">Carrinho</h1>
            @if(session('error'))
                <div id="error-message" class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($numeroItens != "0" )

                @foreach ( $findCarrinho as $itens )
                    <div id="produto">
                        <a id="imagemtxt">
                            <img src="/img/products/{{$itens->produto->nome}}.jpg" alt="movel"><br>
                            <p>{{$itens->produto->nome}}</p>
                        </a>

                        <form method="POST" action="{{ route('carrinho.quantidadeItem', $itens) }}" id="containerContador">
                            @csrf
                            @method('PUT')

                            <button type="submit" id="cetaEsquerda{{$itens->id}}" class="cetas-ativas" onclick="decrementar({{ $itens->id }})" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                </svg>
                            </button>

                            <input name="quantidade" id="{{$itens->id}}" value="{{ $itens->quantidade }}" readonly>

                            <button type="submit" id="cetaDireita{{$itens->id}}" class="cetas-ativas" onclick="incrementar({{ $itens->id }});" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </button>
                        </form>


                        <div id="valor">
                            <h4>Valor</h4>
                            <h6>R${{number_format($itens->produto->valor * $itens->quantidade, 2,',', '.')}}</h6>
                        </div>

                        <meta name='csrf-token' content=" {{ csrf_token() }}" />
                        <a  onclick=" deleteRegistroPaginacao('{{route('carrinho.delete')}}',{{$itens->id}})" id="deleteLixeira">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </div><br>
                @endforeach <br>

                <div id="containerTotalCompra">
                    <h3>Total da compra: R${{number_format($numeroItens *$itens->produto->valor * $itens->quantidade, 2,',', '.')}}</h3>
                </div>

                <div id="containerButons">

                    <meta name='csrf-token' content=" {{ csrf_token() }}" />
                        <a  onclick=" deleteRegistroPaginacao('{{route('carrinho.deleteAll')}}',{{$itens->id}})" id="deleteAll" class="btn btn-danger">Remover produtos
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>

                        <a href="{{route('index')}}"class="btn btn-light">Continuar comprando</a>

                        <form method="POST" action="{{ route('pedidos') }}">
                            @csrf
                                 <input name="valor" value="{{($numeroItens *$itens->produto->valor * $itens->quantidade)}}" type="hidden">
                                 <input name="user_id" value="{{ auth()->user()->id }}" type="hidden">
                            <button type="submit" class="btn btn-success">Pagar</button>
                        </form>

                </div>

                @else
                    <h1 id="textvazio" class="carrinhoVazio">O seu carrinho está vazio.</h1><br>
                    <div class="carrinhoVazio">
                         <a href="{{route('index')}}"class="btn btn-success">Continuar comprando</a>
                    </div>
            @endif



        </div>
    </main>

    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
    <script src="/js/funcoes.js"></script>
    <script src="/js/message.js" ></script>
</body>
</html>
