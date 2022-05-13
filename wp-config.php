<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/


//GET HOSTNAME INFO
$hostname = $_SERVER['SERVER_NAME'];


//VERIFY WHICH ENVIRONMENT THE APP IS RUNNING
switch ($hostname) {
    case 'idl.dev-wunderlabs.io':
        define('WP_ENV', 'development');
        define('DB_NAME', 'devswu_db2');
        define('DB_USER', 'devswu_2');
        define('DB_PASSWORD', 'GkDjLZEr1LxQAQj6');
        define('DB_HOST', 'sql365.your-server.de');
        define('WP_HOME','https://idl.dev-wunderlabs.io');
        define('WP_SITEURL','https://idl.dev-wunderlabs.io');
        break;
    case 'www.id-licht.de':
        define('WP_ENV', 'production');
        define('DB_NAME', 'idalic_db1');
        define('DB_USER', 'idalic_1');
        define('DB_PASSWORD', 'Ws5zXgtp24UJZQNH');
        define('DB_HOST', 'sql650.your-server.de');
        define('WP_HOME','https://www.id-licht.de');
        define('WP_SITEURL','https://www.id-licht.de');
        break;
    case 'id-licht.de':
        define('WP_ENV', 'production');
        define('DB_NAME', 'idalic_db1');
        define('DB_USER', 'idalic_1');
        define('DB_PASSWORD', 'Ws5zXgtp24UJZQNH');
        define('DB_HOST', 'sql650.your-server.de');
        define('WP_HOME','https://id-licht.de');
        define('WP_SITEURL','https://id-licht.de');
        break;
    case 'id-licht.de.www549.your-server.de':
        define('WP_ENV', 'production');
        define('DB_NAME', 'idalic_db1');
        define('DB_USER', 'idalic_1');
        define('DB_PASSWORD', 'Ws5zXgtp24UJZQNH');
        define('DB_HOST', 'sql650.your-server.de');
        define('WP_HOME','http://id-licht.de.www549.your-server.de');
        define('WP_SITEURL','http://id-licht.de.www549.your-server.de');
        break;
    default:
        define('WP_DEBUG', false);
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_general_ci');








/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w;B:5>Q2b.q~@ kkL[BXM9)y2*Y+8NJgRuEaNGy{9]ch#:P8(cf,~=/?M< ]8u/K' );
define( 'SECURE_AUTH_KEY',  'ol3tj%FCp}Z:9fFe>CEZgMc1OMN(mo6]z~0cQ#<%J>hv-)uO4ye[H)Q8Skzo$/`:' );
define( 'LOGGED_IN_KEY',    '6GBGm$F(_Fe5*PlI2G f4yHqY2-WI4QG7$!ivOX>+dM/-XC5$o;[ctMN2q?eW4D#' );
define( 'NONCE_KEY',        'fCrR<Ft0]lt6i_R6<nl$_l- K_+qS:v/N$atbzn$OuV{R4Ops3.5YTGn]&HbbWQv' );
define( 'AUTH_SALT',        'U6``$)XD.ZkFN!NWXK9i2:A P,m51NQyfTo7>Me|^AW<[{iu|j{XGs[u03@V/dLE' );
define( 'SECURE_AUTH_SALT', '^E{q=w1UO?(GqCpG,*MgI$~Sb:nvlJ`N?Gk|-aYwA(-HU,<F?%ODY6tn<,,Vq~K&' );
define( 'LOGGED_IN_SALT',   'kW8;yc~lz~F,C8gGq O@umA0TB~eCraoSbX._n7i<lyt/Y{V8nrCF`W7qD1A4j_.' );
define( 'NONCE_SALT',       'A}l>G9=wh[w)/_u>h^LU`/md^Vku2P$0 4{@7mz8Eu6k]FY![_FjOM IH}]A4*45' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
