<?php require_once './includes/functions.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confira toda a agenda! Hackeando a Indústria</title>

    <link rel="icon" href="./assets/images/icon.ico" type="image/png" sizes="16x16">

    <!-- OG -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://hackeandoaindustria.weme.com.br/">
    <meta property="og:title" content="Confirmado! Agora vamos hacker a indústria!">
    <meta property="og:site_name" content="Hackeando a Indústria">
    <meta property="og:description" content="Entenda a inovação com quem já inova na indústria">
    <meta property="og:image" content="https://hackeandoaindustria.weme.com.br/assets/images/og-image.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">

    <!-- METAS -->
    <meta name="description" content="Entenda a inovação com quem já inova na indústria">
    <meta name="theme-color" content="#0c8fe6">
    <meta name="msapplication-TileColor" content="#0c8fe6">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=2.1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25632384-22"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-25632384-22');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '612572842609532');
    fbq('track', 'PageView');
    </script>
    
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=612572842609532&ev=PageView&noscript=1"
    /></noscript>


</head>
<body>

    <header>
        <div class="global">
            <div class="flex-row">
                <h1>
                    <a href="./">
                        <img src="./assets/images/logo-hackeando-a-industria.png" alt="" alt="Logo do Hackeando a indústria by: weme">
                    </a>
                </h1>

                <nav>
                    <a href="javascript:void(0);" id="menu-script"><i class="fas fa-stream"></i> Menu</a>
                    
                    <ul id="principal-menu">
                        <li><a href="./#about-us">Sobre o evento</a></li>
                        <li><a href="./#macro-all-lives">Agenda</a></li>
                        <li><a href="#learn">Conteúdo exclusivo</a></li>
                        <li><a href="https://weme.com.br" target="_blank"><b>weme</b></a></li>
                        <li><a href="./#inscreva-se" class="subscribe-btn">Inscreva-se</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="agenda">
        <div class="global">       
            <div class="principal-info">
                <h2 style="color:#ca34f1; font-size:2.5em;">Como serão as lives!</h2>
                <h3>Saiba mais sobre os temas e quais serão os participantes.</h3>
            </div>
        </div>
    </section>


    <section id="big-numbers">
        <div class="global">
            
            <?php include "./view/all-info-lives.php"; ?>

            <div style="text-align:center; margin-top:2em;">
                <a href="#inscreva-se" class="subscribe-btn">Não vou ficar de fora!</a>
            </div>
        </div>
    </section>

    
    <section id="learn">
        <?php include "./view/learn.php"; ?>
    </section>

    <div class="global-button">
        <a href="#inscreva-se" class="button-subscribe">Inscreva-se agora!</a>
        <p>Não fique de fora das lives!</p>
    </div>

    <section id="cases-weme">
        <?php include "./view/cases.php"; ?>
    </section>

    <footer>
        <div class="global">
            <p>Copyright © <?=date('Y')?> Todos os direitos reservados | Essa página foi feita com ♡ pela weme.</p>
        </div>
    </footer>

<script src="https://kit.fontawesome.com/869a698328.js" crossorigin="anonymous"></script>
<script src="./assets/js/menu.js"></script>

<!-- FANCYBOX -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>
</html>