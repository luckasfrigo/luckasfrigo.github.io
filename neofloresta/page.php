<?php get_header(); ?>
<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
<?php the_post(); ?>

<section>
    <div style="max-width: 640px; margin: 0 auto;">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
</section>

<link rel="stylesheet" href="<?=$baseURL?>/css/pages.css">
<?php get_footer(); ?>