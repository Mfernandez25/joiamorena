<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'joiamorena');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a5GS8+TaXvR?1]cmBan[k]<S$C:6g/[)lEsHP=xMx#axVYe+^G<c]-k*n=!WFqt3');
define('SECURE_AUTH_KEY',  'xCy!;Gh%c-4@u`#K<N|?!5J2KgN- Ngq<od.nW>0h[v&-r[8PIdA=fEG!#X}l/vY');
define('LOGGED_IN_KEY',    '[{&$4)zamlCB0.O`_1CQ,XwUsoH{,}?S7LQy/[M0W}Y.:s j>0N%AlcCUB6TtwyQ');
define('NONCE_KEY',        '8sIRta^[Q%y5$vo}wPS%@FijsulZ-H@Z]cDB`k+c`]&>7MvOITkYIKpt.|?W02g4');
define('AUTH_SALT',        'L8w4Tqf6@{Y>*?*i?fIf|XS,|M6tQ#N}B]/!1EH7f6[u,s}K&ywlSQn`^QReM0OY');
define('SECURE_AUTH_SALT', 'yeJ6Y,VmlD[qe*X)tI]?b3mI8Yh[mIMxA0#,SWOT*Wpu|M3w (m%dqtCH_l<mZAp');
define('LOGGED_IN_SALT',   'R:#2(vwT~/eyQHw(xJ>59z;rOE1uZ~b[A$T$lG(m>yorKx(&Z>WDq:nTZeIpa<@k');
define('NONCE_SALT',       'lAQ#6l (W>b@(x:JJn%`wve8z0r]6&FWnX{?z4<CywwOIC/[^]gWV;pNi=o+]PSs');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
