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
               <div>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/pilates3.webp"  class="pgAtividades__descricao-img"/> 
               </div>
               <div>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-atividades/dcventre2.webp"  class="pgAtividades__descricao-img"/> 
               </div>
            </div>

            <div class="pgAtividades__descricao-col">
               <h2 class="pgAtividades__subtitulo">Sobre nós</h2>
               <p class="pgAtividades__descricao-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eum, placeat a laboriosam perspiciatis accusantium veniam? Tempore laboriosam quos quaerat, officia, corrupti suscipit magnam a quas sunt odio vitae debitis.</p>
               <p class="pgAtividades__descricao-texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam deserunt aut quasi ex inventore, eligendi nesciunt. A omnis, ad earum rerum hic dolores sed neque soluta officia veritatis eaque tempore!</p>
               <a href="/horarios.pdf" class="btn pgAtividades__descricao-btn">Horários</a>
            </div>
         </div>

         

         <div class="pgAtividades__fotos">
            <h2 class="pgAtividades__subtitulo">Atividades</h2>
            <div class="pgAtividades__fotos-container">
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
         </div>

         <div class="pgAtividades__professores container">
               
            <h2 class="pgAtividades__subtitulo">Professores</h2>
            
            <div class="pgAtividades__professores-content">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (1).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (2).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (3).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (4).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (5).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (6).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (7).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (8).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (9).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (10).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (11).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (12).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (13).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (14).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (15).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (16).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (17).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (18).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (19).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (20).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (21).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (22).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (23).webp" class="pgAtividades__avatar-img">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-atividades/prof/prof (24).webp" class="pgAtividades__avatar-img">
            </div>
         </div>



         <!-- <div class="pgAtividades__depoimentos">

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
         </div> -->




      </section>


   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
   <?php endif; ?>

<?php get_footer(); ?>