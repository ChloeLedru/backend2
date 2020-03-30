<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// First action 
function dire_bonjour(){
	echo '<p class="hello"> Bonjour tout le monde !</p>';
}
add_action( 'cl', 'dire_bonjour');

// Ajout de texte dans le footer 

function texte_t() {
    echo '<p>Voici le texte de mon pied de page</p>';
}
add_action( 'wp_footer', 'texte_t' );

//Ajout texte header
function text_b() {
    echo '<p>Voici le texte de mon header</p>';
}
add_action( 'futurio_header_body', 'text_b' );

//Ajout texte avant mon contenu principal
function text_c() {
    echo '<p>Voici le texte avant mon contenu principal</p>';
}
add_action( 'futurio_before_content', 'text_c' );

// END ENQUEUE PARENT ACTION
