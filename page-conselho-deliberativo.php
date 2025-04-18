<?php
    // Template Name: Page-conselho-deliberativo
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="pgExecutiva">
        <div class="container pgExecutiva__container">
            <!-- <div class="pgExecutiva__header">
                <img src="assets/img/carnaval.jpg" alt="" class="pgNoticias__img">
            </div> -->

            <h1 class="tituloHr pgExecutiva__tituloHr">
                Conselho Deliberativo
            </h1>

            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Mesa Diretora</h2>
            </div>
            <div class="pgExecutiva__content">
                <div class="pgExecutiva__content-col">
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/joao-friggi.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>João Frigi Neto</p>
                            <p>Presidente</p>
                        </div>
                    </div> 
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/francisco-sato.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Francisco Sato</p>
                            <p>Vice-Presidente</p>
                        </div>
                    </div>

                </div>
                <div class="pgExecutiva__content-col">
                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/adriana-jorge.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Adriana de Castilho Jorge</p>
                            <p>1ª Secretária</p>
                        </div>

                    </div> 

                    <div class="pgExecutiva__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/rita-cassia.webp" class="pgExecutiva__avatar-img">

                        <div class="pgExecutiva__avatar-texto">
                            <p>Rita de Cássia Giovaneli</p>
                            <p>2ª Secretária</p>
                        </div>

                    </div>          
                </div>                
            </div>

            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Conselheiros Vitalícios</h2>
            </div>
            <div class="pgExecutiva__content">
                <div class="pgExecutiva__content-col">

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/antonio-batista-gomes.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Antoninho Batista Saraiva Gomes</p>
                        </div>
                    </div>   
                    
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/antonio-ribeiro-guedes.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Antônio Ribeiro Guedes</p>
                        </div>
                    </div>

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/arao-carvalho.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Arão Antônio de Andrade Carvalho</p>
                        </div>
                    </div>    

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/carlos-marcelo-oliveira.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Carlos Marcelo de Oliveira</p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/edmilson-bernardino-pereira.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Edmilson Bernardino Pereira</p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/francisco-sato.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Francisco Sato</p>
                        </div>
                    </div>

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/joao-bastista-castro.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>João Batista de Castro</p>
                        </div>
                    </div>      

                </div>

                <div class="pgExecutiva__content-col">
 
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/joao-friggi.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>João Frigi Neto</p>
                        </div>
                    </div>

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/jorge-cursino-santos.webp" class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Jorge Cursino dos Santos</p>
                        </div>
                    </div>  
 
                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/paulo-sergio-alciprete.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Paulo Sérgio Alciprete</p>
                        </div>
                    </div> 

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/dorival-custodio.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Dorival Custódio dos Santos</p>
                        </div>
                    </div>

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/romualdo-pereira-castro.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Romualdo Pereira de Castro</p>
                        </div>
                    </div> 

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/sidney-ribeiro-santos.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Sidney Ribeiro de Paulo</p>
                        </div>

                    </div>                   
                </div>                
            </div>



            <div class="pgExecutiva__content-header">
                <h2 class="pgExecutiva__subtitulo">Conselheiros Eleitos</h2>
            </div>
            <div class="pgExecutiva__content">
                <div class="pgExecutiva__content-col">

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/adriana-jorge.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Adriana de Castilho Jorge</p>
                        </div>
                    </div> 
                    
                    <!-- <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/carlos-marcelo-oliveira.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Carlos Marcelo Oliveira </p>
                        </div>
                    </div>  -->

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/celso-antonio-souza.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Celso Antônio de Souza</p>
                        </div>
                    </div> 

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/cid-sampaio-almeida.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Cid Sampaio de Almeida</p>
                        </div>
                    </div> 

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/claudemir-assis-cabral2.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Claudemir de Assis Cabral</p>
                        </div>
                    </div> 


                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/edmundo-paula.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Edmundo de Paula</p>
                        </div>
                    </div> 

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/Dulcinea-Borges-Ribeiro.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Dulcinea Borges Ribeiro </p>
                        </div>
                    </div>      
                    <!-- <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/jose-valter-andrade.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>José Valter de Andrade </p>
                        </div>
                    </div>       -->

                </div>

                <div class="pgExecutiva__content-col">

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/keinam-mendes-leite.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Keina Mendes Leite</p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/madoka-hashimoto.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Madoka Hashimoto </p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/marco-antonio-camargo.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Marco Antônio Camargo</p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/rita-cassia.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Rita de Cássia Giovaneli</p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/Valdecir-vilhena-costa.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Valdecir Vilhena da Costa </p>
                        </div>
                    </div>  

                    <div class="pgExecutiva__avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-deliberativo/paulo-vita-neres.webp"  class="pgExecutiva__avatar-img">
                        <div class="pgExecutiva__avatar-texto">
                            <p>Paulo Vita Neres</p>
                        </div>
                    </div>  

                </div>                
            </div>

        </div>
    </div>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
<?php get_footer(); ?>