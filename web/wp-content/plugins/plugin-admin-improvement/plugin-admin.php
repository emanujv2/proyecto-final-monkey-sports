<?php
/*
Plugin Name: Admin Message
Description: Muestra un mensaje en el panel de admin.
*/

add_action('admin_notices', function() {
    echo '<div class="notice notice-success is-dismissible"><p>¡Bienvenido al panel de administración del Proyecto Final Emanuel Jiménez🎓!</p></div>';
});
