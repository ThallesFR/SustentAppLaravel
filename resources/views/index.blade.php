<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link id="css" rel="stylesheet" href="{{asset('css/pages/css.css')}}">
    <link id="css" rel="stylesheet" href="{{asset('css/pages/index.css')}}">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="{{asset('img/incons/LogoSustent ícone.png')}}" />
</head>

<body >

    @include('components.header')

    <main id="mainHome">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="/img/banner/interior.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="/img/banner/interior2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="sectionCards">
            <h1>Produtos</h1><br>
            <div id="containerCards">
                <a href="{{ route('produtos.ambiente.movel', ['ambiente' => 'Sala', 'movel' => "Sofá livros"]) }}"id="card1">
                    <img src="/img/products/Sofá livros.jpg" alt="móvel">
                    <h5 class="textCards">Sofá Livros</h5><br>
                    <p class="textCards">R$1000,00</p>
                </a>

                <a href="{{ route('produtos.ambiente.movel', ['ambiente' => 'Varanda', 'movel' => "Poltronas tonel"]) }}"id="card2">
                    <img src="/img/products/Poltronas tonel.jpg" alt="móvel">
                    <h5 class="textCards">Poltronas Tonel</h5><br>
                    <p class="textCards">R$3450,90</p>
                </a>

                <a href="{{ route('produtos.ambiente.movel', ['ambiente' => 'Sala', 'movel' => "Mesa pallet"]) }}"id="card3">
                    <img src="/img/products/Mesa pallet.jpg" alt="móvel">
                    <h5 class="textCards">Mesa Pallet</h5><br>
                    <p class="textCards">R$500,00</p>
                </a>

                <a href="{{ route('produtos.ambiente.movel', ['ambiente' => 'Quarto', 'movel' => "Cama de pinho"]) }}"id="card4">
                    <img src="/img/products/Cama de pinho.jpg" alt="móvel">
                    <h5 class="textCards">Cama de Pinho</h5><br>
                    <p class="textCards">R$1500,00</p>
                </a>
                </div>
          </section>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
