<?php get_header(); ?>
<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
<?php the_post(); ?>

<section>
    <h2><?php the_title(); ?></h2>
    <?php $projectLoop = new WP_Query(['post_type' => 'project', 'posts_per_page' => -1]); ?>
    <?php if ( $projectLoop->have_posts() ) : ?>
        <?php while ( $projectLoop->have_posts() ) : $projectLoop->the_post(); ?>
            <h4><?= get_the_title(); ?></h4>
            <p><?= get_the_content(); ?></p>
        <?php endwhile; wp_reset_query(); ?>
    <?php else : ?>
        <?php the_content(); ?>
    <?php endif; ?>
</section>

<link rel="stylesheet" href="<?=$baseURL?>/css/pages.css">
<?php get_footer(); ?>