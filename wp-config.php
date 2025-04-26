<?php
/** Configuración básica de WordPress **/

// ** Configuración de MySQL ** //
define( 'DB_NAME', 'mysql-elis' ); // Nombre correcto de la base de datos
define( 'DB_USER', 'egarcia41' );
define( 'DB_PASSWORD', '1193285708EJGM.' );
define( 'DB_HOST', '10.147.18.4' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Claves únicas de autenticación y salado. */
define('AUTH_KEY',         'pon aquí una frase única');
define('SECURE_AUTH_KEY',  'pon aquí una frase única');
define('LOGGED_IN_KEY',    'pon aquí una frase única');
define('NONCE_KEY',        'pon aquí una frase única');
define('AUTH_SALT',        'pon aquí una frase única');
define('SECURE_AUTH_SALT', 'pon aquí una frase única');
define('LOGGED_IN_SALT',   'pon aquí una frase única');
define('NONCE_SALT',       'pon aquí una frase única');

/** Prefijo de tabla de la base de datos. */
$table_prefix = 'wp_';

/** Para desarrolladores: modo de depuración de WordPress. */
define( 'WP_DEBUG', false );

/** ¡Eso es todo, deja de editar! ¡Feliz blogging! */

/** Configuración absoluta de la ruta de WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
