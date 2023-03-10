<?php
    // Template Name: Page-home
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="destaque">
        <div class="destaque__container">

            <div class="swiper destaque__swiper">
                <div class="swiper-wrapper">
    
                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/sede.jpg" alt="">

                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Sede</h2>
                            <p class="destaque__slide-subtitulo">Amplo e acolhedor</p>
                            <a href="#" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>

                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/pousada.jpg" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Pousada Litoral</h2>
                            <p class="destaque__slide-subtitulo">Experiência e conforto</p>
                            <a href="#" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>

                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/clube.jpg" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Clube de Campo</h2>
                            <p class="destaque__slide-subtitulo">Diversão e alegria</p>
                            <a href="#" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>
                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/atividade.jpg" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Atividades</h2>
                            <p class="destaque__slide-subtitulo">Energia e bem estar</p>
                            <a href="#" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>
                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/convenio.jpg" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Convênio médico</h2>
                            <p class="destaque__slide-subtitulo">Sáude e longevidade</p>
                            <a href="#" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>

                </div>    
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <!-- <div class="busca">
                <i class="fa-solid fa-magnifying-glass busca__ico"></i>
                <input type="text" class="busca__input" placeholder="Buscar no site">
            </div> -->
        </div>
    </section>

    <section class="noticias">
        <div class="container noticias__container">

            <div class="noticias__slide">

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/atividade.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <p class="noticias__item-tag">Fique por dentro</p>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/clube.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-tag">Fique por dentro</p>
                        </a>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/sede.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-tag">Fique por dentro</p>
                        </a>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/pousada.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-tag">Fique por dentro</p>
                        </a>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/pousada.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-tag">Fique por dentro</p>
                        </a>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

                <div class="noticias__item">
                    <div>
                        <a href="">
                            <img class="noticias__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/sede.jpg" alt="">
                        </a>
                    </div>
                    <div class="noticias__item-texto">
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-tag">Fique por dentro</p>
                        </a>
                        <a class="noticias__item-link" href="">
                            <p class="noticias__item-titulo">Nao perca nenhuma novidade e noticias que esta rolando por
                                aqui no moento </p>
                        </a>
                    </div>
                </div>

            </div>

            <div class="noticias__footer">
                <a href="/blog.html" class="noticias__footer-link">Mais notícias...</a>
            </div>
        </div>
    </section>

    <section class="estatisticas">
        <div class="container estatisticas__container">
            <div class="estatisticas__item">
                <p>+14</p>
                <p>atividades físicas</p>
            </div>
            <div class="estatisticas__item">
                <p>+15mil</p>
                <p>associados</p>
            </div>
            <div class="estatisticas__item">
                <p>1000mil</p>
                <p>visitas diárias</p>
            </div>
        </div>
    </section>

    <div class="chamada">
        <div class="container chamada__container">
            <div class="chamada__col">
                <div class="chamada__imagens">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede2.jpg" alt="" class="chamada__img">
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede2.jpg" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col">
                <h2 class="tituloHr">Por que me associar?</h2>
                <p class="chamada__texto">
                    Quem é associado pode utilizar dos diversos espaço que ASSEM possue, como Pousada e Clube de Campo.
                    Contamos com diversas modalidades para cuidar do seu bem estar e de sua família. Tambem contamos com
                    diversos parceiro de convênio médico para sua saúde.
                </p>
                <a href="" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <div class="linha"></div>

    <div class="chamada">
        <div class="container chamada__container chamada__container--inverso">
            <div class="chamada__col">
                <div class="chamada__imagens">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/convenios.jpg" alt="" class="chamada__img">
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/convenios.jpg" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col chamada__col">
                <h2 class="tituloHr">Convênios médicos</h2>
                <p class="chamada__texto">
                    Quem é associado pode utilizar dos diversos espaço que ASSEM possue, como Pousada e Clube de Campo.
                    Contamos com diversas modalidades para cuidar do seu bem estar e de sua família. Tambem contamos com
                    diversos parceiro de convênio médico para sua saúde.
                </p>
                <a href="" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <section class="atividades">
        <h2 class="tituloHr atividades__tituloHr">Temos diversas atividades físicas e escolinhas</h2>
        <div class="swiper atividades__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/musculacao.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/escolinha.jpeg" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/ballet.jpeg" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/dcventre.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/hidro.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/pilates.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividades/violao.jpg" />
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="" class="btn atividades__btn">Saiba mais</a>
    </section>

    <div class="locais">

        <div class="locais__banner">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/destaque/sede.jpg">
            </div>
            <div></div>
            <h2 class="tituloHr">Espaço e lazer para toda família</h2>
        </div>

        <div class="locais__container">

            <div class="locais__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/pousada.jpg">
                <p>Pousada Litoral</p>
            </div>
            <div class="locais__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/sede.jpg">
                <p>Sede</p>
            </div>
            <div class="locais__item">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/destaque/clube.jpg">
                </div>
                <p>Clube de Campo</p>
            </div>
        </div>
        <a href="" class="btn locais__btn">Saiba mais</a>
    </div>

    <div class="chamada">
        <div class="container chamada__container">
            <div class="chamada__col">
                <div class="chamada__imagens">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede2.jpg" alt="" class="chamada__img">    
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede2.jpg" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col">
                <h2 class="tituloHr">Clube de desconto</h2>
                <p class="chamada__texto">
                    Os associado tem descontos em produtos ou serviços oferecidos por uma rede de parcerias
                    estabelecidas com a ASSEM, em várias áreas do mercado. Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Voluptatibus impedit ullam, sunt
                </p>
                <a href="" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <section class="associar">
        <div class="container associar__container">
            <h2 class="tituloHr">Aproveite agora</h2>
            <a href="#" class="btn associar__btn">Fique sócio</a>
        </div>
    </section>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
<?php get_footer(); ?>