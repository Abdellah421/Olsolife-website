<?php
/**
 * OLSOLIFE Premium — fonctions du thème.
 * Thème de blocs, sans plugin payant, sans Elementor.
 * Les coordonnées modifiables (téléphone, WhatsApp, adresse, horaires)
 * sont enregistrées dans le Customizer (Apparence > Personnaliser > Coordonnées OLSOLIFE)
 * et alimentent le numéro WhatsApp du formulaire ainsi que les données structurées.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function olsolife_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 64,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'olsolife' ),
        'footer'  => __( 'Menu de pied de page', 'olsolife' ),
    ) );
}
add_action( 'after_setup_theme', 'olsolife_setup' );

function olsolife_register_post_types() {
    $common = array(
        'public'       => true,
        'show_in_rest' => true,
        'has_archive'  => true,
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );
    register_post_type( 'service', array_merge( $common, array(
        'labels'      => array( 'name' => __( 'Solutions', 'olsolife' ), 'singular_name' => __( 'Solution', 'olsolife' ) ),
        'menu_icon'   => 'dashicons-admin-site-alt3',
        'rewrite'     => array( 'slug' => 'solutions' ),
    ) ) );
    register_post_type( 'produit', array_merge( $common, array(
        'labels'      => array( 'name' => __( 'Produits', 'olsolife' ), 'singular_name' => __( 'Produit', 'olsolife' ) ),
        'menu_icon'   => 'dashicons-cart',
        'rewrite'     => array( 'slug' => 'produits' ),
    ) ) );
    register_post_type( 'projet', array_merge( $common, array(
        'labels'      => array( 'name' => __( 'Projets', 'olsolife' ), 'singular_name' => __( 'Projet', 'olsolife' ) ),
        'menu_icon'   => 'dashicons-format-gallery',
        'rewrite'     => array( 'slug' => 'projets' ),
    ) ) );
}
add_action( 'init', 'olsolife_register_post_types' );

function olsolife_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'olsolife_contact', array(
        'title'    => __( 'Coordonnées OLSOLIFE', 'olsolife' ),
        'priority' => 30,
    ) );
    $fields = array(
        'olsolife_phone'    => array( __( 'Téléphone affiché', 'olsolife' ), '+212 6 41 39 51 13', 'sanitize_text_field' ),
        'olsolife_whatsapp' => array( __( 'Numéro WhatsApp (chiffres seuls, indicatif inclus)', 'olsolife' ), '212641395113', 'olsolife_sanitize_digits' ),
        'olsolife_address'  => array( __( 'Adresse', 'olsolife' ), '116 AV Youssef Ben Tachfine, El Kelâa des Sraghna 43000, Maroc', 'sanitize_text_field' ),
        'olsolife_hours'    => array( __( 'Horaires', 'olsolife' ), 'Tous les jours : 08:30 – 19:30', 'sanitize_text_field' ),
        'olsolife_maps_url' => array( __( 'Lien Google Maps', 'olsolife' ), 'https://maps.app.goo.gl/8gU91uywTe2ZXB2n8?g_st=ac', 'esc_url_raw' ),
    );
    foreach ( $fields as $id => $args ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $args[1],
            'sanitize_callback' => $args[2],
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $args[0],
            'section' => 'olsolife_contact',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'olsolife_customize_register' );

function olsolife_sanitize_digits( $value ) {
    return preg_replace( '/\D+/', '', (string) $value );
}

function olsolife_enqueue() {
    wp_enqueue_style( 'olsolife-style', get_stylesheet_uri(), array(), '2.0.0' );
    wp_enqueue_script( 'olsolife-main', get_theme_file_uri( 'assets/js/main.js' ), array(), '2.0.0', true );
    wp_localize_script( 'olsolife-main', 'olsolifeData', array(
        'whatsapp' => get_theme_mod( 'olsolife_whatsapp', '212641395113' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'olsolife_enqueue' );

/**
 * Données structurées LocalBusiness — champs vérifiés uniquement.
 * Aucune note (aggregateRating), aucun avis : la fiche Maps ne compte que 2 avis,
 * insuffisants pour être repris dans les données structurées.
 */
function olsolife_json_ld() {
    if ( is_admin() ) {
        return;
    }
    $data = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'LocalBusiness',
        'name'        => 'OLSOLIFE systèmes d’irrigation solaire',
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => '116 AV Youssef Ben Tachfine',
            'addressLocality' => 'El Kelâa des Sraghna',
            'postalCode'      => '43000',
            'addressCountry'  => 'MA',
        ),
        'telephone'   => '+212 6 41 39 51 13',
        'openingHours' => 'Mo-Su 08:30-19:30',
        'geo'         => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 32.0538446,
            'longitude' => -7.4020157,
        ),
        'hasMap'      => 'https://maps.app.goo.gl/8gU91uywTe2ZXB2n8?g_st=ac',
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'olsolife_json_ld' );
