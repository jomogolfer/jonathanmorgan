<?php
define( 'WP_CACHE', true ); // hey day
    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };
    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'WP_DEBUG', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '459103_12f109b2f067d39d45f4e95b9ab33632' );
/** MySQL database username */
define( 'DB_USER', 'easywp_377366' );
/** MySQL database password */
define( 'DB_PASSWORD', 't9Q8pfLL2r+M24603gcpKwRjvi6hbvJWjOPBCIwYaQY=' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-2-mysql-master.database.svc.cluster.local:3306' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{}f2?~l?R7hSYy4j~HDYKYvO79Ti/kl4M:+Q&h.6DQjSv_|l.V&n~XVYky^HuK=)' );
define( 'SECURE_AUTH_KEY',   '|lV;Lk~oswge+.Wandda1. Qhx-P*7$kn}z!3HRB3C~fllJPHvKMb-DRNoxLIix ' );
define( 'LOGGED_IN_KEY',     '+U}M:X5Kgh%%|}UoP,=ob{$0IR1>QfA%56#@tQF5kNJL%@Tlr B`Q2tXZ~,Rp$8!' );
define( 'NONCE_KEY',         ',SX[q6arpT}S8O`bSL=;$]wu[-ZqmjFZo&-32&V^*,$=DQV=m }f*c;hn7A5Mg#N' );
define( 'AUTH_SALT',         'uE6;y@QM)-_4-&(/p.uuCnDz.|dY^x-]1vkOcqAT#^]QA}J)0UCkRNg4To#(2Ex:' );
define( 'SECURE_AUTH_SALT',  'go/R>[@?H^nuW{X&+&tuWk)Q|HJ[ht%}axzL++;^f?4?$i.Tp?v~o3^G;LANT5Co' );
define( 'LOGGED_IN_SALT',    '5zxb!4+{&{=GV;G5.JC-L/[fB1=/3^T6N/qCpO%tK*R<PCuPO(x9%({MwNgi11V4' );
define( 'NONCE_SALT',        '?&so3<<uNsGI2n6HQ-b@nZ[$;$3$*+gy:90t/zO>6sSo9;St?ekW?&wXBlmviu:f' );
define( 'WP_CACHE_KEY_SALT', 't{5WqeGsh-yHe`6SUhK[TgJ1sRd.|LSoRra/)6ACj9jImJK>BBA]QYc4b;&`(<;V' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
