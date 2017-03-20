<?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
    <section id="contato">
        <h2><?=__("[:pt]Envie seu currículo[:en]Send us your curriculum[:]")?></h2>
        <script>
            var baseURL = "<?=$baseURL?>";
        </script>
        <form id="contato-email">
            <div class="input-field half">
                <input id="nome" name="nome" type="text" placeholder="<?=__("[:pt]Nome[:en]Name[:]")?>*">
            </div>
            <div class="input-field half">
                <input id="telefone" name="telefone" placeholder="<?=__("[:pt]Telefone[:en]Phone[:]")?>">
            </div>
            <div class="input-field half">
                <input id="email" name="email" placeholder="<?=__("E-mail")?>*" >
            </div>
            <div class="input-field half">
                <input id="lattes" name="lattes" placeholder="<?=__("[:pt]URL do Lattes[:en]Lattes URL[:]")?>">
            </div>
            <div class="input-field">
                <input id="assunto" name="assunto" placeholder="Assunto*" value="<?=__("[:pt]Currículo enviado pelo site[:en]Curriculum sent via website[:]")?>">
                <label for="assunto" class=""><?=__("[:pt]Assunto[:en]Subject[:]")?></label>
            </div>
            <div class="input-field">
                <textarea id="conteudo" name="conteudo" rows="8" placeholder="<?=__("[:pt]Digite aqui sua mensagem[:en]Write your message here[:]")?>"></textarea>
            </div>
            <input type="hidden" id="_ajax_nonce" name="_ajax_nonce" value="<?= wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>
            <div class="action_button">
                <input name="send" type="submit" value="<?=__("[:pt]Enviar[:en]Send[:]")?>">
            </div>
        </form>
    </section>

    <footer>
        <div id="info_contato">
            <h4><?=__("[:pt]Contatos[:en]Contacts[:]")?></h4>
            <p>contato@neofloresta.com.br</p>
            <p>+55 (46) 98888-8888</p>
            <p>+55 (46) 98888-8888</p>
            <address>R. Paulo Antônio de Godoy 220<br>
            Bairro da Luz, Dois Vizinhos, PR, Brasil.</address>
        </div>
        <div id="fast_access">
            <h4><?=__("[:pt]Acesso Rápido[:en]Fast Access[:]")?></h4>
            <nav>
                <p><a href="#"><?=__("[:pt]Saiba mais sobre a Neofloresta[:en]Know more about Neofloresta[:]")?></a></p>
                <p><a href="#"><?=__("[:pt]Entenda nossas áreas de atuação[:en]Understand our areas of expertise[:]")?></a></p>
                <p><a href="#"><?=__("[:pt]Veja todos os projetos realizados[:en]See all projects we have done[:]")?></a></p>
                <p><a href="#"><?=__("[:pt]Leia nossas publicações[:en]Read our publications[:]")?></a></p>
                <p><a href="#"><?=__("[:pt]Solicite um orçamento[:en]Request a quote[:]")?></a></p>
                <p><a href="#"><?=__("[:pt]Trabalhe conosco[:en]Work with us[:]")?></a></p>
                </ul>
            </nav>
        </div>
        <small>Neofloresta | 2017 <?=__("[:pt]Todos direitos reservados[:en]All rights reserved[:]")?></small>
    </footer>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <script src="<?=$baseURL?>/js/scripts.js?v=0.1"></script>
    <?php wp_footer(); ?>
</body>
</html>