<?php
    // Template Name: Page-atividades
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="pgAtividades">       
         
         <div class="pgAtividades__banner">
            <h1 class="pgAtividades__banner-titulo">Atividades físicas <br>e escolinhas</h1>    
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/banner.webp" class="pgAtividades__banner-img"/>    
         </div>

         <div class="pgAtividades__descricao">
            <div class="pgAtividades__descricao-col">
               <div class="pgAtividades__descricao-bg"></div>
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/academia.webp"  class="pgAtividades__descricao-img"/> 
            </div>
            <div class="pgAtividades__descricao-col">
               <h2 class="pgAtividades__descricao-titulo">Atividades para todas a família</h2>
               <div class="pgAtividades__descricao-texto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eum, placeat a laboriosam perspiciatis accusantium veniam? Tempore laboriosam quos quaerat, officia, corrupti suscipit magnam a quas sunt odio vitae debitis.</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam deserunt aut quasi ex inventore, eligendi nesciunt. A omnis, ad earum rerum hic dolores sed neque soluta officia veritatis eaque tempore!</p>
               </div>
            </div> 
         </div>

         <div class="pgAtividades__fotos">
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/ballet.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/banner.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/dcventre.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/escolinha.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/hidro.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/musculacao.webp" class="pgAtividades__fotos-img"/>
            </div>
            <div class="pgAtividades__fotos-item">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/violao.webp" class="pgAtividades__fotos-img"/>
            </div>

         </div>

         <div class="pgAtividades__depoimentos">

            <div class="pgAtividades__depoimentos-container">
               <div class="pgAtividades__depoimentos-header">
                  <h2 class="pgAtividades__depoimentos-title tituloHr">Depoimentos</h2>
               </div>

               <div class="pgAtividades__depoimentos-body">
            
                  <div class="pgAtividades__depoimentos-card">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/rosto.webp" />
                     <p>Joao Augusto</p>
                     <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe incidunt perferendis repellendus totam distinctio odit, dolore quaerat, dolores molestiae eligendi."</p>
                  </div>
                  <div class="pgAtividades__depoimentos-card">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/rosto.webp" />
                     <p>Joao Augusto</p>
                     <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe incidunt perferendis repellendus totam distinctio odit, dolore quaerat, dolores molestiae eligendi."</p>
                  </div>
                  <div class="pgAtividades__depoimentos-card">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/rosto.webp" />
                     <p>Joao Augusto</p>
                     <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe incidunt perferendis repellendus totam distinctio odit, dolore quaerat, dolores molestiae eligendi."</p>
                  </div>
               </div>

            </div>
         </div>

         <div class="pgAtividades__horarios">
            <div class="swiper pgAtividades_swiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/horarios.webp" />
                  </div>
                  <div class="swiper-slide">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/horarios.webp" />
                  </div>
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-pagination"></div>
            </div>
         </div>


      </section>


   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>