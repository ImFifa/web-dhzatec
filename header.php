    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Filip Urban">
    <meta name="description" content="Webové stránky dentální hygienistky Jany Růžičkové, DiS. | mobil.: 602 306 637 | e-mail: dhruzickova@centrum.cz | Ordinace Žatec, Ordinace Louny.">

    <meta property="og:title" content="Dentální hygiena Žatec - Jana Růžičková, DiS.">
    <meta property="og:description" content="Webové stránky dentální hygienistky Jany Růžičkové, DiS. | mobil.: 602 306 637 | e-mail: dhruzickova@centrum.cz | Ordinace Žatec, Ordinace Louny.">
    <meta property="og:image:url" content="https://www.dhzatec.cz/img/fbimg.jpg">
    <meta property="og:url" content="https://www.dhzatec.cz/">
    <meta property="og:type" content="website">

    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="/icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>
<body>

    <nav>
        <div class="navbar-brand">
            <a href="/">
                <i class="fas fa-tooth"></i>
                Dentální hygiena Žatec
            </a>
        </div>
        <ul id="myTopnav">
            <li><a href="<?php echo site_url('/'); ?>">Úvod</a></li>
            <li><a href="<?php echo site_url('/prubeh-vysetreni'); ?>">Průběh vyšetření</a></li>
            <li><a href="<?php echo site_url('/cenik'); ?>">Ceník</a></li>
            <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
            <li class="bottom-menu">
                <span><a href="tel:+420-602-306-637" aria-label="Call dental hygienist">
                <i class="i fas fa-phone-alt"></i>
                +420 602 306 637</a></span>

                <span><a href="mailto:dhruzickova@centrum.cz" aria-label="Send mail to dental hygienist">
                <i class="i fas fa-envelope"></i>
                dhruzickova@centrum.cz</a></span>

                <a href="https://filipurban.cz/" target="top" aria-label="Visit author's portfolio">
                <picture>
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/urban-logo.webp">
                    <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/img/urban-logo.png">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/urban-logo.png" alt="Urban Webdesign">
                </picture>
            </li>
        </ul>
        <a href="javascript:void(0);" class="icon" aria-label="Open hamburger navigation">
            <i class="hamburger fas fa-bars"></i>
        </a>
    </nav>
