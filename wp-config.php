<?php
/**
 * C?u h�nh co b?n cho WordPress
 *
 * Trong qu� tr�nh c�i d?t, file "wp-config.php" s? du?c t?o d?a tr�n n?i dung 
 * m?u c?a file n�y. B?n kh�ng b?t bu?c ph?i s? d?ng giao di?n web d? c�i d?t, 
 * ch? c?n luu file n�y l?i v?i t�n "wp-config.php" v� di?n c�c th�ng tin c?n thi?t.
 *
 * File n�y ch?a c�c thi?t l?p sau:
 *
 * * Thi?t l?p MySQL
 * * C�c kh�a b� m?t
 * * Ti?n t? cho c�c b?ng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thi?t l?p MySQL - B?n c� th? l?y c�c th�ng tin n�y t? host/server ** //
/** T�n database MySQL */
define( 'DB_NAME', 'recruitment' );

/** Username c?a database */
define( 'DB_USER', 'root' );

/** M?t kh?u c?a database */
define( 'DB_PASSWORD', 'password' );

/** Hostname c?a database */
define( 'DB_HOST', 'mysql-container' );

/** Database charset s? d?ng d? t?o b?ng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Ki?u database collate. �?ng thay d?i n?u kh�ng hi?u r�. */
define('DB_COLLATE', '');

/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');

define('WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Kh�a x�c th?c v� salt.
 *
 * Thay d?i c�c gi� tr? du?i d�y th�nh c�c kh�a kh�ng tr�ng nhau!
 * B?n c� th? t?o ra c�c kh�a n�y b?ng c�ng c?
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * B?n c� th? thay d?i ch�ng b?t c? l�c n�o d? v� hi?u h�a t?t c?
 * c�c cookie hi?n c�. �i?u n�y s? bu?c t?t c? ngu?i d�ng ph?i dang nh?p l?i.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-15iLgUGlkRtT2L*tAP=+n^A0c]W6s;aAO}<0lC(/! 9Ecem=ln+a}:=m-Un7]c4' );
define( 'SECURE_AUTH_KEY',  'csIr{1]j+1&IlENPpK5 O49h FcCF;u/o<KBv0K#-CIc9j.hxzA8t5s0n5Fy5,^X' );
define( 'LOGGED_IN_KEY',    '*<e>?,[Y%eN`2X;RdcK_ee@*Ycd3VYnyPl%*Hsf)2R|ZW]1$FjLy+2557$_?dN`6' );
define( 'NONCE_KEY',        ')]Cj96AIlKz^0G;Vy0J+saA<n03TgR(/`$/LUwR8]~])YdDdE0;G(YxA/dq(eLMt' );
define( 'AUTH_SALT',        '>H+|>R/}I)m0cC_&^x1IGZKp7?(0Wg<s9T=.PLR&ns?xL&3LSdVt%>o1**/sKx&t' );
define( 'SECURE_AUTH_SALT', '+x&%C*8EBSc#?*>tHAd9Dpy3>**g:5A;0_K`gqsfn|Ji8,}9GX-9h^6,;Jq&_& ]' );
define( 'LOGGED_IN_SALT',   'l}%E}nS]ib.cB?xhgFPhRb*p/,E/(QhPi!0[^xI)>;-qwqT}!):Id1WzSGC1@~,Q' );
define( 'NONCE_SALT',       'U;-fnX[mF_vdPyPn*Y~<H?!7:(22aPd(o.YDy>=mBpAM}@T47.U}SP y;hvWX8hV' );

/**#@-*/

/**
 * Ti?n t? cho b?ng database.
 *
 * �?t ti?n t? cho b?ng gi�p b?n c� th? c�i nhi?u site WordPress v�o c�ng m?t database.
 * Ch? s? d?ng s?, k� t? v� d?u g?ch du?i!
 */
$table_prefix  = 'wp_';

/**
 * D�nh cho developer: Ch? d? debug.
 *
 * Thay d?i h?ng s? n�y th�nh true s? l�m hi?n l�n c�c th�ng b�o trong qu� tr�nh ph�t tri?n.
 * Ch�ng t�i khuy?n c�o c�c developer s? d?ng WP_DEBUG trong qu� tr�nh ph�t tri?n plugin v� theme.
 *
 * �? c� th�ng tin v? c�c h?ng s? kh�c c� th? s? d?ng khi debug, h�y xem t?i Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* �� l� t?t c? thi?t l?p, ngung s?a t? ph?n n�y tr? xu?ng. Ch�c b?n vi?t blog vui v?. */

/** �u?ng d?n tuy?t d?i d?n thu m?c c�i d?t WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thi?t l?p bi?n v� include file. */
require_once(ABSPATH . 'wp-settings.php');
