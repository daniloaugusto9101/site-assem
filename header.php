<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Inicio Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Fim Font Google -->

    <!-- Inicio Link CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fim Link CDN Font Awesome -->

    <!-- Inicio Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- Fim do Swiper CSS -->

    <!-- Inicio do CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- Fim do CSS -->

    <title><?php bloginfo('name'); ?></title>

    <!-- Inicio Head Wordpress -->
        <?php wp_head(); ?>
    <!-- Fim Head Wordpress -->
</head>

<body>

    <header class="header">

        <div class="header__container <?php if(is_page('home')) { echo "header__container-home";}?>">

            <div class="logo">
                <a href="/" class="logo__link">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-home/logo-assem.png" class="logo__img">
                </a>
            </div>
            <div class="header__menu-mobile">
                <p>Menu</p>
                <!-- <i class="fa-solid fa-bars"></i> -->
            </div>
            <nav class="nav">
                <ul class="dropdown">
                    <li class="dropdown__item">
                        <a href="/" class="dropdown__link">Inicio</a>
                    </li>
                    <li class="dropdown__item">
                        <a href="/blog" class="dropdown__link">Notícias</a>
                    </li>
                    <li class="dropdown__item">
                        <a href="/contato" class="dropdown__link">Assem</a>

                        <ul class="dropdown__submenu">
                            <li class="dropdown__submenu-item">
                                <a href="/historia" class="dropdown__submenu-link">Nossa História</a>
                            </li>
                            <li class="dropdown__submenu-item">
                                <a href="/asd" class="dropdown__submenu-link">Diretoria e Conselho</a>
                            </li>
                            <li class="dropdown__submenu-item">
                                <a href="/estatuto" class="dropdown__submenu-link">Estatuto</a>
                            </li>
                            <li class="dropdown__submenu-item">
                                <a href="/jornal" class="dropdown__submenu-link">Jornal ASSEM</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown__item">
                        <a href="/contato" class="dropdown__link">Contato</a>
                    </li>
                    <li class="dropdown__item">
                        <a href="/fique-socio" class="dropdown__link">Fique Sócio</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>