<?php
/**
 * C?u hình co b?n cho WordPress
 *
 * Trong quá trình cài d?t, file "wp-config.php" s? du?c t?o d?a trên n?i dung 
 * m?u c?a file này. B?n không b?t bu?c ph?i s? d?ng giao di?n web d? cài d?t, 
 * ch? c?n luu file này l?i v?i tên "wp-config.php" và di?n các thông tin c?n thi?t.
 *
 * File này ch?a các thi?t l?p sau:
 *
 * * Thi?t l?p MySQL
 * * Các khóa bí m?t
 * * Ti?n t? cho các b?ng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thi?t l?p MySQL - B?n có th? l?y các thông tin này t? host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'recruitment' );

/** Username c?a database */
define( 'DB_USER', 'root' );

/** M?t kh?u c?a database */
define( 'DB_PASSWORD', 'password' );

/** Hostname c?a database */
define( 'DB_HOST', 'mysql-container' );

/** Database charset s? d?ng d? t?o b?ng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Ki?u database collate. Ð?ng thay d?i n?u không hi?u rõ. */
define('DB_COLLATE', '');

/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');

define('WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Khóa xác th?c và salt.
 *
 * Thay d?i các giá tr? du?i dây thành các khóa không trùng nhau!
 * B?n có th? t?o ra các khóa này b?ng công c?
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * B?n có th? thay d?i chúng b?t c? lúc nào d? vô hi?u hóa t?t c?
 * các cookie hi?n có. Ði?u này s? bu?c t?t c? ngu?i dùng ph?i dang nh?p l?i.
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
 * Ð?t ti?n t? cho b?ng giúp b?n có th? cài nhi?u site WordPress vào cùng m?t database.
 * Ch? s? d?ng s?, ký t? và d?u g?ch du?i!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Ch? d? debug.
 *
 * Thay d?i h?ng s? này thành true s? làm hi?n lên các thông báo trong quá trình phát tri?n.
 * Chúng tôi khuy?n cáo các developer s? d?ng WP_DEBUG trong quá trình phát tri?n plugin và theme.
 *
 * Ð? có thông tin v? các h?ng s? khác có th? s? d?ng khi debug, hãy xem t?i Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Ðó là t?t c? thi?t l?p, ngung s?a t? ph?n này tr? xu?ng. Chúc b?n vi?t blog vui v?. */

/** Ðu?ng d?n tuy?t d?i d?n thu m?c cài d?t WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thi?t l?p bi?n và include file. */
require_once(ABSPATH . 'wp-settings.php');
