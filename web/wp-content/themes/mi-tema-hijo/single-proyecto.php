<?php get_header(); ?>

<main>
    <section class="proyecto-single">
        <h1><?php the_title(); ?></h1>
        <div class="contenido">
            <?php if (has_post_thumbnail()) : ?>
                <div class="imagen">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="texto">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
