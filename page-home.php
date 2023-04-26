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
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/clube.webp" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Clube de Campo</h2>
                            <p class="destaque__slide-subtitulo">Diversão e alegria</p>
                            <a href="/locais" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>
    
                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/pousada.webp" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Pousada Litoral</h2>
                            <p class="destaque__slide-subtitulo">Experiência e conforto</p>
                            <a href="/locais" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>

                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede.webp" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Sede</h2>
                            <p class="destaque__slide-subtitulo">Ampla e acolhedora</p>
                            <a href="/locais" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>  
                    </div>


                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/atividade.webp" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Atividades</h2>
                            <p class="destaque__slide-subtitulo">Energia e bem estar</p>
                            <a href="/locais" class="btn destaque__slide-btn">Saiba mais</a>
                        </div>
                    </div>
                    <div class="swiper-slide destaque__slide">
                        <img class="destaque__slide-img"   src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/convenio.webp" alt="">
                        <div class="destaque__slide-textos">
                            <h2 class="destaque__slide-titulo">Convênio médico</h2>
                            <p class="destaque__slide-subtitulo">Saúde e longevidade</p>
                            <a href="/locais" class="btn destaque__slide-btn">Saiba mais</a>
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

            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'cat' => 6,
                    'paged' => $paged,
                    'posts_per_page' => 6, 	
                );
                $query = new WP_Query( $args );

                // Verifica se há postagens
                if ( $query->have_posts() ) :

                    // Loop através das postagens
                    while ( $query->have_posts() ) : $query->the_post();

                        // Obtem o nome da categoria
                        $category = get_the_category();
                        $category_name = '';
                        if ( ! empty( $category ) ) {
                            $category_name = $category[0]->name;
                        }

                        // Exibe o conteúdo da postagem
                        echo '<div class="noticias__item">
                                <div>
                                    <a href="'.get_permalink().'">
                                    <img class="noticias__item-img" src="' . esc_url( get_field('thumbnail_materia' ) ) . '">
                                    </a>
                                </div>
                                <div class="noticias__item-texto">
  
                                    <a class="noticias__item-link" href="'.get_permalink().'">
                                        <p class="noticias__item-titulo">'. get_the_title() .'</p>
                                    </a>
                                </div>
                            </div>';

                    endwhile;
                    wp_reset_postdata();
                else :
                    // Se não houver postagens, exibe uma mensagem de erro
                    echo __( 'Desculpe, nenhum post encontrado.', 'textdomain' );
                endif;
            ?>


            </div>

            <div class="noticias__footer">
                <a href="/blog" class="noticias__footer-link">Mais notícias...</a>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/associar.webp" alt="" class="chamada__img">
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/associar.webp" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col">
                <h2 class="tituloHr">Por que me associar?</h2>
                <p class="chamada__texto">
                Junte-se a nós, como associado, você terá acesso a uma variedade de atividades e eventos emocionantes, ter experiência e diversão com nossa Pousada e Clube de Campo.  Não perca mais tempo, torne-se um associado hoje mesmo
                </p>
                <a href="/associar" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <div class="linha"></div>

    <div class="chamada">
        <div class="container chamada__container chamada__container--inverso">
            <div class="chamada__col">
                <div class="chamada__imagens">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/convenio2.webp" alt="" class="chamada__img">
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/convenio2.webp" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col chamada__col">
                <h2 class="tituloHr">Convênios médicos</h2>
                <p class="chamada__texto">
                Você está preocupado com a sua saúde da sua família? Quer ter acesso a uma ampla rede de médicos e hospitais? Associado tem acesso a diversos planos com preços que se adapta às suas necessidades
                </p>
                <a href="/convenios" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <section class="atividades">
        <h2 class="tituloHr atividades__tituloHr">Temos diversas atividades físicas e escolinhas</h2>
        <div class="swiper atividades__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/escolinha.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/hidro.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/ballet.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/urban.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/dcventre.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/musculacao.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/violao.webp" />
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="/atividades" class="btn atividades__btn">Saiba mais</a>
    </section>

    <div class="locais">

        <div class="locais__banner">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede.webp">
            </div>
            <div></div>
            <h2 class="tituloHr">Espaço e lazer para toda família</h2>
        </div>

        <div class="locais__container">

            <div class="locais__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/pousada.webp">
                <p>Pousada Litoral</p>
            </div>
            <div class="locais__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/sede.webp">
                <p>Sede</p>
            </div>
            <div class="locais__item">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/clube.webp">
                </div>
                <p>Clube de Campo</p>
            </div>
        </div>
        <a href="/locais" class="btn locais__btn">Saiba mais</a>
    </div>

    <div class="chamada chamada__desconto">
        <div class="container chamada__container">
            <div class="chamada__col">
                <div class="chamada__imagens">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/compras.webp" alt="" class="chamada__img">    
                    <div class="chamada__img"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-home/compras.webp" alt="" class="chamada__img">
                </div>
            </div>
            <div class="chamada__col">
                <h2 class="tituloHr">Clube de desconto</h2>
                <p class="chamada__texto">
                A ASSEM conta com uma rede de parcerias com empresas de diversas áreas, os nossos associados tem acesso a preços e oportunidades especiais. Isto é uma ótima opção para quem busca economizar dinheiro.
                </p>
                <a href="/desconto" class="btn chamada__btn">Saiba mais</a>
            </div>
        </div>
    </div>

    <section class="associar">
        <div class="container associar__container">
            <h2 class="tituloHr">Aproveite agora</h2>
            <a href="/associar" class="btn associar__btn">Fique sócio</a>
        </div>
    </section>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
<?php get_footer(); ?>