<?php

//UNIDADES//
function create_posttype() {
  register_post_type( 'unidades',
    array(
      'labels' => array(
        'name' => __( 'Unidades' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'unidade'),
      'supports' => array('title','editor','thumbnail','comments', 'excerpt',),

    )
  );




}




add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 50, 50, true ); // moniaturas normais para a homepage
add_image_size( 'mapa', 187, 179, true ); // imagem para página de post</code>
add_image_size( 'imagem-post', 758, 400, true );

add_image_size( 'imagem-post-sidebar', 120, 80, true );

add_image_size( 'imagem-post-home', 360, 240, true );

//UNIDADES//
add_action( 'init', 'create_posttype' );




// Verifica se não existe nenhuma função com o nome tutsup_session_start
if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}
 
 // Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () { 
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );

}

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Preencha os Campos', 'textdomain' ),
        'post_types' => 'unidades',
        'fields'     => array(
            array(
                'id'   => 'regiao',
                'name' => __( 'Cidade', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'pessoa',
                'name' => __( 'Pessoa', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'email',
                'name' => __( 'Email', 'textdomain' ),
                'type' => 'email',
            ),
            array(
                'id'   => 'telefone',
                'name' => __( 'Telefone', 'textdomain' ),
                'type' => 'tel',
            ),
            array(
                'id'   => 'telefone-dois',
                'name' => __( 'Celular', 'textdomain' ),
                'type' => 'tel',
            ),
            array(
                'id'   => 'mapa',
                'name' => __( 'Iframe do Mapa', 'textdomain' ),
                'type' => 'text',
            ),
            
            
            array(
                'id'   => 'facebook',
                'name' => __( 'Facebook', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'twitter',
                'name' => __( 'Twitter', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'google-mais',
                'name' => __( 'Google +', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'linkedin',
                'name' => __( 'Linkedin', 'textdomain' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}
//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


 $args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'reply_text'        => 'Reply',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
);






?>