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
    <link id="css" rel="stylesheet" href="/css/pages/info.css">

    <title>Sustent</title>
    <link rel="icon" type="image/png" href="/img/incons/LogoSustent ícone.png"/>
</head>

<body >

@include('components.header')

    <main id="mainInfo">

        <div id="containerInfo">

            <h1>Sobre a Sustent</h1><br>

            <div id="secInfo1">
                <img src="/img/diversas/arvoreMão.jpg" alt="">
                <div  class="containerTextinfo">
                    <p>A Sustent é uma empresa que foi fundada em 2022 com o intuito de
                     produzir móveis sustentáveis que atendam às necessidades dos clientes
                     em termos de design e praticidade, sem causar danos ao meio ambiente.
                      Seu forte compromisso com a sustentabilidade é refletido em sua busca
                      constante por utilizar materiais reciclados e renováveis em seus produtos,
                       bem como na minimização do impacto ambiental de seus processos produtivos.
                    </p>
                </div>
            </div><br><br>

            <div id="secInfo2">
                <div class="containerTextinfo">
                    <p>A empresa acredita que o design e a sustentabilidade podem caminhar juntos,
                    sendo assim, seus móveis possuem um design diferenciado e moderno, criados
                     por uma equipe de designers talentosos que unem a funcionalidade à beleza.
                      Além disso, a Sustent valoriza a qualidade de seus produtos e utiliza materiais
                       de alta qualidade em todas as etapas do processo produtivo.
                    </p>
                </div>

                <img src="/img/diversas/producao-de-moveis.jpg" alt="">
            </div><br><br>

            <div id="secInfo3">
                <img src="/img/diversas/terra.jpg" alt="">
                <div  class="containerTextinfo">
                   <p>A Sustent não se preocupa somente em produzir móveis, mas também em ser socialmente
                     responsável. Ela oferece condições de trabalho justas e seguras para seus
                      colaboradores, incentivando práticas sustentáveis na comunidade local e educando
                      seus clientes sobre a importância da sustentabilidade. A empresa oferece uma
                      ampla variedade de produtos, desde móveis para a casa até móveis para escritórios
                       e hotéis, além de serviços personalizados para atender às necessidades específicas
                        de seus clientes.
                    </p>
                </div>
            </div><br><br>

            <div id="secInfo4">
                <img src="/img/diversas/onu2030.jpg" alt="">
                <div  class="containerTextinfo">
                    <p>Com seu compromisso forte com a sustentabilidade, a Sustent está ajudando a construir
                    um futuro mais verde e saudável para todos. Sua atuação se alinha com a <a target="_blank" href="https://brasil.un.org/pt-br/sdgs">Agenda 2030
                        da ONU&nbsp;</a>  para o Desenvolvimento Sustentável, que visa promover um mundo mais justo,
                    igualitário e com menor impacto ambiental.
                    </p>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="/js/script_navbar.js"> </script>
</body>
</html>
