<?php
/** 
 * Configuración básica de WordPress siiiiiiiiiiiiiiiii.
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
define('DB_NAME', 'erika1');

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
define('AUTH_KEY', 'TiQs1OunIS ]I[vjoy`W,fioBx?#NDHxBn}DG5Vh/2)6>H-B AQ0stZ*t,,<PPSA');
define('SECURE_AUTH_KEY', ',*]V&U;NJb[4LyxCF}`$P0Acxc?.mxe(H;q(ltM4r*md^yk`cRZmP.|>RMw^Z[pU');
define('LOGGED_IN_KEY', 'RL812+a#m,*h]$o6:XhO_[qC+UntfCCs-xXTqO+=Ycm Lb:a!ybI^2QkT{1d8^T_');
define('NONCE_KEY', 'Av}Wp;nV|GJl=fEy4&]tR42<x>7,OyH#7kT0~GqsLjOU.:.;L$O(l&-n~z0wNUP3');
define('AUTH_SALT', ',jy2./AOQ3I|DEvn,FC4Nf9ZtYvU%R?LR nrMf>eZV?TdL;p@nC NtSBl{TW.kv{');
define('SECURE_AUTH_SALT', 'Q]p.*= -JPZhM_Djev^=6oy@)PEOV36QsY#u<=I`}V<SLE5Yglg+-@nQ9+/+2!Bu');
define('LOGGED_IN_SALT', '|toG[6C;NFJhj,f=gDz1N+8@-:t0i}Cb/,1&}2Q*_:%AD0]>$+(jf<lot{J}*NNV');
define('NONCE_SALT', 'fYz!,=2zXC$lPpIFL#nkU3};.h*+>{@[&fwjp[<SI0U48>@77yLRo1BnL$2<J]|8');

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

