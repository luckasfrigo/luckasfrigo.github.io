<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="private, max-age=600">
    <meta http-equiv="last-modified" content="Fri, 27 Jan 2017 13:00:00 -0300" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neofloresta - Serviços Ecossistêmicos</title>

    <?php wp_head(); ?>
    <?php $baseURL = get_stylesheet_directory_uri().'/'; ?>
    <link rel="icon" href="<?=$baseURL?>img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=$baseURL?>/style.css">
</head>
<body>
    <pre id="preload" style="display: none;">
        <img class="logo" src="<?=$baseURL?>img/floresta_1.jpg">
    </pre>
    <header>
        <a href="/"><img class="logo" src="<?=$baseURL?>img/neofloresta_hor.png" width="300" height="200"></a>
        <nav id="main_menu">
            <a id="mobile_menu"></a>
            <ul id="menu_list">
                <li><a href="#sobre"><?=__("[:pt]Sobre[:en]About[:]")?></a></li>
                <li><a href="#servicos"><?=__("[:pt]Áreas de Atuação[:en]Areas of Expertise[:]")?></a></li>
                <li><a href="#projetos"><?=__("[:pt]Projetos[:en]Projects[:]")?></a></li>
                <li><a href="#publicacoes"><?=__("[:pt]Publicações[:en]Publications[:]")?></a></li>
                <li><a class="featured action_button" href="#contato"><?=__("[:pt]Entre em contato[:en]Get in touch[:]")?></a></li>
            </ul>
            <ul id="mobile_menu_list" class="closed">
                <li><a href="#sobre"><?=__("[:pt]Sobre[:en]About[:]")?></a></li>
                <li><a href="#servicos"><?=__("[:pt]Áreas de Atuação[:en]Areas of Expertise[:]")?></a></li>
                <li><a href="#projetos"><?=__("[:pt]Projetos[:en]Projects[:]")?></a></li>
                <li><a href="#publicacoes"><?=__("[:pt]Publicações[:en]Publications[:]")?></a></li>
                <li><a href="#contato"><?=__("[:pt]Entre em contato[:en]Get in touch[:]")?></a></li>
                <li class="languages"><a href="?lang=pt">Português</a> | <a href="?lang=en">English</a></li>
            </ul>
            <?= qtranxf_generateLanguageSelectCode('image') ?>
        </nav>
    </header>