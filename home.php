<?php get_header(); ?>

    <section class="pgblog">        
        <div class="container pgblog__container">

            <div class="tituloHr pgblog__tituloHr">Notícias</div>
            
            <div class="pgblog__content">

                <!-- <div class="pgblog__materia">
                    <a href="" class="pgblog__materia-link">
                        <img src="assets/img/praia.jpeg" class="pgblog__materia-img">
                        <h2 class="pgblog__materia-titulo">
                          44 Anos da Assem! Muito a comemorar! Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </h2>
                      </a>
                    <div class="pgblog__materia-footer">
                    </div>
                </div> -->


                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    
                    $args = array(
                        'cat' => 6,
                        'paged' => $paged,
                        // 'posts_per_page' => 2, 	
                    );

                    $query = new WP_Query( $args );

                    // Verifica se há postagens
                    if ($query->have_posts()) :

                        // Loop através das postagens
                        while ($query->have_posts()) : $query->the_post();

                            // Exibe o conteúdo da postagem
                            echo  '<div class="pgblog__materia">
                                        <a href="'  .get_permalink(). '" class="pgblog__materia-link">

                                            <img src="' .esc_url( get_field( 'thumbnail_materia' ) ) . '" class="pgblog__materia-img">
                                            
                                            <h2 class="pgblog__materia-titulo">
                                            '. get_the_title() .'
                                            </h2>
                                        </a>
                                        <div class="pgblog__materia-footer">
                                        </div>
                                    </div>';

                        endwhile;

                        $pagination_args = array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
                            'total' => $query->max_num_pages,
                            'current' => $paged,
                            'show_all' => false,
                            'end_size' => 2,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => __('« Anterior'),
                            'next_text' => __('Próximo »'),
                            'type' => 'plain',
                            'add_args' => false,
                            'add_fragment' => ''
                        );

                        echo '<div class="pagination">';
                        echo paginate_links($pagination_args);
                        echo '</div>';

                        wp_reset_postdata();

                    else :
                        // Se não houver postagens, exibe uma mensagem de erro
                        echo __('Desculpe, nenhum post encontrado.', 'textdomain');
                    endif;

                ?> 


            </div>
        </div>
    </section>

<?php get_footer(); ?>