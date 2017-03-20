<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'biography',
        [
            'labels' => [
                'name' => __( 'Biografias' ),
                'singular_name' => __( 'Biografia' )
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes']
        ]
    );
    register_post_type( 'consultant',
        [
            'labels' => [
                'name' => __( 'Consultores' ),
                'singular_name' => __( 'Consultor' )
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'custom-fields']
        ]
    );
    register_post_type( 'project',
        [
            'labels' => [
                'name' => __( 'Projetos' ),
                'singular_name' => __( 'Projeto' )
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']
        ]
    );
    register_post_type( 'publication',
        [
            'labels' => [
                'name' => __( 'Publicações' ),
                'singular_name' => __( 'Publicação' )
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor'],
            'taxonomies' => ['category']
        ]
    );
    register_post_type( 'client',
        [
            'labels' => [
                'name' => __( 'Clientes' ),
                'singular_name' => __( 'Cliente' )
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'thumbnail', 'custom-fields']
        ]
    );
}

add_theme_support( 'post-thumbnails' );

add_action('wp_ajax_mail_before_submit', 'neofloresta_send_mail_before_submit');
add_action('wp_ajax_nopriv_mail_before_submit', 'neofloresta_send_mail_before_submit');
function neofloresta_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if  (!empty($_POST['send']) && $_POST['action'] == "mail_before_submit") {
        $to = "contato@neofloresta.com.br";
        $subject = "[Site] {$_POST['assunto']}";
        $txt = "<html><b>Nome: </b>{$_POST['nome']}\r\n";
        $txt .= "<b>E-mail: </b>{$_POST['email']}\r\n";
        $txt .= "<b>Telefone: </b>{$_POST['telefone']}\r\n";
        if (!empty($_POST['lattes'])) {
            $txt .= "<b>URL do Lattes: </b><a href=\"{$_POST['lattes']}\">Currículo Lattes</a>\r\n";
        } else {
            $txt .= "<b>Empresa: </b>{$_POST['empresa']}\r\n";
        }
        $txt .= "</html>";
        $headers = "From: Formulário do Site<site@neofloresta.com.br>\r\n".
            "Reply-to: {$_POST['email']}";

        if (wp_mail($to,$subject,$txt,$headers)) {
            echo "Mensagem enviada com sucesso!";
            header("HTTP/1.1 200 OK");
            exit;
        }
    }
    echo "Não foi possível enviar a mensagem.";
    header("HTTP/1.1 404 Not Found");
    exit;
}