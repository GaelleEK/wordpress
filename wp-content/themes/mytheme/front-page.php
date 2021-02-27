<?php get_header() ?>
<?php custom_banners_register_required_plugins() ?>


<aside class="col-md-4 blog-sidebar">
    <?= get_sidebar('homepage'); ?>
</aside>

<?php while (have_posts()): the_post() ?>

    <h1><?php the_title() ?></h1>

    <?php the_content(); ?>

    <a href="<?= get_post_type_archive_link('post') ?>">Voir les dernières actualités</a>

<?php endwhile; ?>

<?php get_footer() ?>
