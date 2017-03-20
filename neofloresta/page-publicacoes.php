<?php get_header(); ?>
<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
<?php the_post(); ?>

<section>
    <div style="max-width: 640px; margin: 0 auto;">
        <h2><?php the_title(); ?></h2>
        <?php $content = get_the_content(); ?>
        <?php $publicationLoop = new WP_Query(['post_type' => 'publication', 'posts_per_page' => -1, 'order' => 'DESC']); ?>
        <?php if ( $publicationLoop->have_posts() ) : ?>
            <?php ob_start(); ?>
            <?php while ( $publicationLoop->have_posts() ) : $publicationLoop->the_post(); ?>
                <article>
                    <h4><?php the_title() ?></h4>
                    <p><?php the_content() ?></p>
                </article>
            <?php endwhile; wp_reset_query(); ?>
            <?php $loopContent = ob_get_clean(); ?>
        <?php endif; ?>
        <?= str_replace('[loop category="Patentes"]', $loopContent, $content)?>
    </div>
</section>

<link rel="stylesheet" href="<?=$baseURL?>/css/pages.css">
<?php get_footer(); ?>