
<?php get_header() ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <h1><?php the_title() ?></h1>
<?php //the_post_thumbnail() ?><!--      peut etre remplacer par  -->
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
        </p>
        <?php the_content() ?>

    <?php endwhile; endif; ?>
<?php get_footer() ?>
