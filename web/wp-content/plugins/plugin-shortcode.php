<?php
/*
Plugin Name: Shortcode Simple
Description: Agrega un shortcode que muestra un mensaje.
*/

function shortcode_saludo() {
    return "<p>¡Hola! Este es un shortcode del Proyecto Final 🎯</p>";
}
add_shortcode('saludo', 'shortcode_saludo');
