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
    <link id="css" rel="stylesheet" href="/css/pages/movel.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

    @include('components.header')

    <main id="mainProduto">

        <form action="{{route('carrinho.cadastrarItem')}}" method="POST" id="containerProduto">
            @csrf
            <h1>{{$produto->ambiente}}</h1><br>
            <div id="container1">
                <img src="/img/products/{{ $produto->nome }}.jpg" alt="">

                <div id="text">

                    <h2>{{$produto->nome}}</h2>

                    <h5> R$ {{ number_format($produto->valor, 2, ',', '.') }} à vista</h5><br>

                    <input name="produto_id" value="{{$produto->id}}" type="hidden">
                    <input name="user_id" value="1" type="hidden">
                    <input name="quantidade" value="1" type="hidden">


                    <button type="submit" class="btn btn-success">Adicionar ao carrinho
                        <svg id="iconeCarrinho" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    </button>
                 </div>
            </div>
        </form>
    </main>




    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
