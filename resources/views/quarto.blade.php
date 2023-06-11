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
    <link id="css" rel="stylesheet" href="/css/pages/quarto.css">


    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

@include('components.header')

    <main id="mainQuarto">
        <div id="containerQuarto">
            <a href="#" id="produtoQua1">
                <img src="/img/products/qua 1.jpg" alt="">
                <h5>Cama de pinho</h5>
                <p>R$1500 à vista</p>
            </a>
            <a href="#" id="produtoQua2">
                <img src="/img/products/qua 2.jpg" alt="">
                <h5>Guarda roupas</h5>
                <p>R$3500 à vista</p>
            </a>

        </div>
    </main>

    @include('components.footer')

    <script src="/js/includeHTML.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
