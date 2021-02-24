
<?php get_header() ?>

<?php if (have_posts()): ?>
    <div class="row">
    <?php while(have_posts()): the_post(); ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
    <!--                la fonction the_content() affiche le contenu de l article -->
    <!--                <p class="card-text">--><?php //the_content('En voir plus') ?><!--</p>-->
    <!--                la fonction excerpt() affiche l'extrait defini pour l article il ne reprend pas le texte du contenu-->
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink()?>" class="card-link">Voir plus</a>
    <!--                <a href="#" class="card-link">Another link</a>-->
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<?php else: ?>
    <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer() ?>


