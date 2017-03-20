<?php get_header('index'); ?>
<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>

	<section id="sobre" class="parallax">
        <h2><?=__("[:pt]Inovação tecnológica para o <strong>meio ambiente</strong>[:en]Technological inovation for the <strong>environment</strong>[:]")?></h2>
        <h3><?=__("[:pt]A empresa com maior número de <strong>patentes verdes</strong> no Brasil[:en]The company with the biggest number of <strong>green patents</strong> in Brazil[:]")?></h3>

        <div id="selo_ufpr"></div>

        <a class="action_button" href="/sobre"><?=__("[:pt]Veja quem somos[:en]See who we are[:]")?></a>

        <div class="more"><a href="#servicos"><?=__("[:pt]Saiba mais[:en]Know more[:]")?></a></div>
    </section>

    <section id="servicos">
        <h2>Assessorias, Pesquisa e Desenvolvimento</h2>
        <ul id="assessoria">
            <li>Restauração Florestal</li>
            <li>Estudo de Biodiversidade</li>
            <li>Serviços Ambientais</li>
            <li>Projetos Socioambientais</li>
            <li>Cursos</li>
        </ul>
        <a class="action_button" href="/servicos">Clique aqui para mais detalhes</a>
    </section>

    <section id="projetos">
        <h2><?=__("[:pt]Alguns de nossos clientes[:en]Some of our clients[:]")?></h2>
        <ul>
            <?php $clienteLoop = new WP_Query(['post_type' => 'client', 'posts_per_page' => -1]); ?>
            <?php while ( $clienteLoop->have_posts() ) : $clienteLoop->the_post(); ?>
                <li><a href="<?= get_post_meta(get_the_ID(), 'url', true) ?>" target="_blank"><img src="<?= get_the_post_thumbnail_url() ?>"></a></li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
        <blockquote>
            <p>O compromisso e a inovação trazidos pela equipa da Neofloresta realmente trouxeram muitos resultados.</p>
            <cite>João da Silva - Vice-Presidente da Coperágua</cite>
        </blockquote>

        <a class="action_button" href="/projetos">Conheça os projetos realizados</a>
    </section>

    <section id="publicacoes">
        <div>
            <article id="articles">
                <h4>Artigos Científicos</h4>
                <p>
                    XX artigos publicados em mais de 10 congressos e revistas especializadas.
                </p>
            </article>
            <article id="media">
                <h4>Aparições na Mídia</h4>
                <p>
                    Artigos e reportagens sobre a Neofloresta.
                </p>
            </article>
            <article id="patents">
                <h4>Patentes Registradas</h4>
                <p>
                    O maior número de patentes verdes registradas no Brasil.
                </p>
            </article>
        </div>

        <a class="action_button" href="/publicacoes">Leia nossas publicações</a>
    </section>

<?php get_footer(); ?>
