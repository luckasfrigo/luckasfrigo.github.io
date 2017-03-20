<?php get_header(); ?>
<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
<?php the_post(); ?>

<section id="history">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <p><a href="/servicos">Saiba mais sobre as áreas de atuação da Neofloresta</a></p>
</section>

<section id="team_photo" class="parallax team">
</section>

<section id="mission">
    <article>
        <h2><?=__("[:pt]Missão[:en]Mission[:]")?></h2>
        <p><?= __(get_post_meta(get_the_ID(), 'missao', true))?></p>
    </article>
    <article>
        <h2><?=__("[:pt]Visão[:en]Vision[:]")?></h2>
        <p><?= __(get_post_meta(get_the_ID(), 'visao', true))?></p>
    </article>
    <article>
        <h2><?=__("[:pt]Valores[:en]Values[:]")?></h2>
        <p><?= __(get_post_meta(get_the_ID(), 'valores', true))?></p>
    </article>
</section>

<section id="team">
    <h2><?=__("[:pt]Equipe[:en]Team[:]")?></h2>
    <?php $teamLoop = new WP_Query(['post_type' => 'biography', 'posts_per_page' => -1, 'orderby' => 'menu_order ID', 'order' => 'ASC']); ?>
    <?php while ( $teamLoop->have_posts() ) : $teamLoop->the_post(); ?>
        <article>
            <img src="<?= get_the_post_thumbnail_url(); ?>">
            <h4><strong><?= get_post_meta(get_the_ID(), 'titulo', true) ?>:</strong> <?= get_the_title(); ?></h4>
            <p><?= get_the_content(); ?></p>
        </article>
    <?php endwhile; wp_reset_query(); ?>
</section>

<section id="consultants">
    <h2><?=__("[:pt]Nossos Consultores[:en]Our Advisors[:]")?></h2>
    <?php $teamLoop = new WP_Query(['post_type' => 'consultant', 'posts_per_page' => -1, 'orderby' => 'menu_order ID', 'order' => 'ASC']); ?>
    <?php while ( $teamLoop->have_posts() ) : $teamLoop->the_post(); ?>
        <h4><strong><?= get_post_meta(get_the_ID(), 'area', true) ?>:</strong> <?= get_the_title(); ?></h4>
    <?php endwhile; wp_reset_query(); ?>
</section>


<link rel="stylesheet" href="<?=$baseURL?>/css/about.css">
<?php get_footer('about'); ?>