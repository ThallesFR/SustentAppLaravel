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
    <link id="css" rel="stylesheet" href="/css/pages/produtos.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

    @include('components.header')



    <main id="mainProduto">

        <div id="containerProduto">

            <h1>{{ $findProduto->first()->ambiente}}</h1><br>

            <div id="container1">
                @foreach ($findProduto as $produto)
                    <a href="{{ route('produtos.ambiente.movel', ['ambiente' => $produto->ambiente, 'movel' => $produto->nome]) }}">
                        <img src="/img/products/{{ $produto->nome }}.jpg" alt="">
                        <h5>{{ $produto->nome }}</h5>
                        <p>R$ {{ number_format($produto->valor, 2, ',', '.') }} à vista</p>
                    </a><br>
                @endforeach
            </div>
        </div>
    </main>


    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
