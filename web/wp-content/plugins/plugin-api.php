<?php
/*
Plugin Name: API Fetcher
Description: Obtiene datos desde una API externa.
*/

add_shortcode('api_data', function() {
    $response = wp_remote_get('https://jsonplaceholder.typicode.com/todos/1');
    if (is_wp_error($response)) return 'Error obteniendo datos.';
    $data = json_decode(wp_remote_retrieve_body($response));
    return "<p>Tarea desde API: " . $data->title . "</p>";
});
