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
    <link id="css" rel="stylesheet" href="/css/pages/sala.css">


    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

@include('components.header')

    <main id="mainSala">
        <div id="containerSala">
            <a href="#" id="produtoSa1">
                <img src="/img/products/sa1.jpg" alt="">
                <h5>Sofá livros</h5>
                <p>R$1000 à vista</p>
            </a>
            <a href="#" id="produtoSa2">
                <img src="/img/products/sa2.jpg" alt="">
                <h5>Mesa pallet</h5>
                <p>R$500 à vista</p>
            </a>

        </div>
    </main>

    @include('components.footer')

    <script src="/js/includeHTML.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
