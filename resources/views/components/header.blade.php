<link id="css" rel="stylesheet" href="{{asset('css/components/header.css')}}">

    <div id="logoAreaCliente">
        <a id="linkLogo" href="index.html"><img id="logoHeader"src="/img/logos/LogoSustent.svg" alt="LogoSustent"></a>

        <div id="containerLoginHeader">
            <a href="login.html"><button id="btn-loginHeader"type="button" >Login</button></a>
            <a id="perfilHeader" href="perfil.html">
                <svg id="iconUserHeader" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                Perfil
            </a>
            <a id="sairHeader" href="#">/ Sair</a>
        </div>

    </div>

    <nav id="navBar">

        <ul id="menuAmbientes" role="menu">
            <li><a  href="cozinha.html">Cozinha</a></li>
            <li><a href="quarto.html">Quarto</a></li>
            <li><a href="sala.html">Sala</a></li>
            <li><a href="varanda.html">Varanda</a></li>
        </ul>

        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>

        <div id="containerNav">
            <a href="info.html">Sobre a Sustent</a>

            <a href="carrinho.html"><svg id="iconeCarrinho" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg></a>
        </div>
    </nav>




