<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="pgNoticias">
        <div class="container pgNoticias__container">

            <div class="pgNoticias__header">

                <?php
                    echo '<img class="pgNoticias__header-thumbnail" src="' . esc_url( get_field( 'thumbnail_materia' ) ) . '">';
                ?>
            </div>

            <article class="pgNoticias__article">
                <h1 class="tituloHr pgNoticias__tituloHr">
                    <?php
                        echo get_the_title();
                    ?>
                </h1>

                <div class="pgNoticias__content">
                    <?php
                        $content = get_the_content();
                        $content = wpautop( $content );
                        echo $content;
                    ?>
                </div>
            </article>
        </div>

    </div>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>