<?php
    // Template Name: Page-noticias
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="pgNoticias">
        <div class="container pgNoticias__container">

            <div class="pgNoticias__header">
                <img src="assets/img/carnaval.jpg" alt="" class="pgNoticias__img">
            </div>

            <article class="pgNoticias__article">
                <h1 class="tituloHr pgNoticias__tituloHr">
                    44 Anos da Assem! Muito a comemorar!
                </h1>
                <div class="pgNoticias__content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi explicabo odit a! Adipisci qui provident obcaecati a est quis nobis hic! Enim dolores esse vitae consequatur neque voluptatibus autem quidem.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae maxime minima voluptatem beatae deleniti, quisquam, veniam pariatur corrupti repellendus possimus autem sapiente voluptates at asperiores, culpa fuga ducimus. Qui, voluptas.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet et quam optio facilis, nemo nesciunt? Facilis amet ipsum tempora, recusandae distinctio doloremque maxime esse illo placeat, quo tenetur facere magnam!</p>
                </div>
            </article>
        </div>

    </div>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>