<?php
// Carga estilos del tema padre y del hijo
function mi_tema_hijo_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'mi_tema_hijo_enqueue_styles');


// Registrar CPT Proyectos
function crear_cpt_proyectos() {
    register_post_type('proyecto',
        array(
            'labels' => array(
                'name' => __('Proyectos'),
                'singular_name' => __('Proyecto')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'proyectos'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'crear_cpt_proyectos');

// Registrar menú
function registrar_mi_menu() {
    register_nav_menu('menu-principal', 'Menú Principal');
}
add_action('init', 'registrar_mi_menu');
