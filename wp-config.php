<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'ktdra');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '){H2%Q[)a};KT3xr]as982&D^m{6SIxL;6^y%{0}_eFurf>=6C?9UEiLT 3pvpT,');
define('SECURE_AUTH_KEY', '5v95XY[jv`pC54./9S*r|,3@JNJb;#Y.>bP;?m?w/=#;^7<n7s:B!HGOYks|RH&Q');
define('LOGGED_IN_KEY', ']eW:c|B5(fDAuaS (;z0ZL;&u I2($~d0p9;##8U[3U9sgyJQ8Jpo@uYyT^xjqR0');
define('NONCE_KEY', 'KmK7]#P0fg?n /H7u5cOsH#Rcm`Yi&nCe!OLaIHV~.n>$lz]0n?>[ly_X.[h#q4/');
define('AUTH_SALT', 'ljw ;NE)Cqh%.Ea/(94bnNe4oGwvBrg7a)4yVlPwb#_i;*H#)a`bx%HG) |fBhl[');
define('SECURE_AUTH_SALT', '3id{.EU;[[OPKZlu0&1a^{ [RNlYZMk/moj%&7iH#<E0%w4TzkH6J$x4hk6f.nS!');
define('LOGGED_IN_SALT', '$2>Wh&1@vM0G[5&u{2yxcrRG%4,$f|d_WTI8G?<M<PlEc8P.R?9L[?<,J()D?H]a');
define('NONCE_SALT', 'D/:GxKf{$&(PwP;zR/G8s2cSB6U]~)b]:r3nD3q#`Cl,)(a~-CP=W8V`Fdo}Im{+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

