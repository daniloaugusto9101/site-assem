<?php
    // Template Name: Page-conselho-fiscal
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="pgFiscal">
        <div class="container pgFiscal__container">
            <!-- <div class="pgFiscal__header">
                <img src="assets/img/carnaval.jpg" alt="" class="pgNoticias__img">
            </div> -->

            <h1 class="tituloHr pgFiscal__tituloHr">
                Conselho Fiscal
            </h1>

            <div class="pgFiscal__content-header">
                <h2 class="pgFiscal__subtitulo">Conselho Fiscal</h2>
            </div>
            <div class="pgFiscal__content">
                <div class="pgFiscal__content-col">
                    <div class="pgFiscal__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-fiscal/jose-aparecido-nunes.webp" class="pgFiscal__avatar-img">

                        <div class="pgFiscal__avatar-texto">
                            <p>José Aparecido Nunes</p>
                            <p>Presidente</p>
                        </div>

                    </div> 

                    <div class="pgFiscal__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-fiscal/rita-cassia-santos-correa.webp" class="pgFiscal__avatar-img">

                        <div class="pgFiscal__avatar-texto">
                            <p>Rita de Cássia Santos Correa</p>
                            <p>1ª Suplente</p>
                        </div>

                    </div> 
                    <div class="pgFiscal__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-fiscal/manoel-gomes-satos.webp"  class="pgFiscal__avatar-img">

                        <div class="pgFiscal__avatar-texto">
                            <p>Manoel Gomes dos Santos</p>
                            <p>2º Suplente</p>
                        </div>

                    </div> 
                </div>
                <div class="pgFiscal__content-col">


                    <div class="pgFiscal__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-fiscal/maurilio-calvo-filho.webp" class="pgFiscal__avatar-img">

                        <div class="pgFiscal__avatar-texto">
                            <p>Maurílio Calvo Filho</p>
                            <p>1º Membro Efetivo</p>
                        </div>

                    </div>          

                    <div class="pgFiscal__avatar">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-fiscal/sidnei-moises-ferreira.webp" class="pgFiscal__avatar-img">

                        <div class="pgFiscal__avatar-texto">
                            <p>Sidnei Moisés Ferreira</p>
                            <p>2º Membro Efetivo</p>
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