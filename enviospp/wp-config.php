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
define('DB_NAME', 'enviospp');

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
define('AUTH_KEY', 'zH>o$`)!VGSSG[k+uu:i#E>L$L3j@h{m%-BP2*7KL-x>r{pmsXh`D:QFv*>J~-m(');
define('SECURE_AUTH_KEY', '1s>ybKLe9ZQ.D]$6`ALp{D8&KDf;6h19<i3[{q5`| gH7? jt{FF2No#FVv?[4x?');
define('LOGGED_IN_KEY', '~,`v,}-QiJxB]N7vXJW1c9?@e$_H,vh`N<5:+n;~e2-+~b%*yzfg/xAb5@N3kw3F');
define('NONCE_KEY', 'L6i;At>HXEt=4Cwmiu+l2g+A@,{DAG$e$9r9Xj_;5OrmtFl2e(H;;+6(3R2LYUVe');
define('AUTH_SALT', 'xWpCr0uCXuHT;DU[Jr#LBs};yJt3_%)HiV$YlN<Mvx+3cxRb/^gy*.KT3KEk{@$m');
define('SECURE_AUTH_SALT', 's4Dx@e~3m)Vmv-=slz<+J8|_1nNWE-&9=_LR6PqIaV*n2mX~9a[?=[nD9-|s!gfa');
define('LOGGED_IN_SALT', '![QqEws7o}t0@fcny#G:qPNAg/^C}9]Up+w!L,(]F9N1`Nx`}ouE6pLV(a@tnK,D');
define('NONCE_SALT', '*N1Q#C[A36/hk+5GB1Ewaor1r(IUg@(*Wi0cn2MArzbT?*i`g$m4Dcl@a0$G~3Qj');

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


