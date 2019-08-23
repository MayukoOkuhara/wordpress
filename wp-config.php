<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp03db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'zd3g06' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '4CRN3X' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QVET7X1YVl$JYSQ4!u=ao`t+(h4bzIu+;UWKDE}%cpF3keJw@?NoY8,Vn0Df|#:#' );
define( 'SECURE_AUTH_KEY',  '~K6o?wKD5zrg4<}iG<OM@XH8N<GjjQ|+R0^D_RU3#aIzXR-../Ul9zv;WL,<tUG`' );
define( 'LOGGED_IN_KEY',    'AMi;0*YK4qp;ZKK]9o-OT4#M(s0RE gqmS*K.kG=<fc~;z+Vl(bT6oe/x[xEa)Rb' );
define( 'NONCE_KEY',        'MvT.>hzt]P59w[O%_:d9:Z7O29n.X`=<I`{zZuB~6v$gD}(efh}yk*!{nR_=oD*B' );
define( 'AUTH_SALT',        'w)>W`o(G$bdn].P8c^NmK{C4}u#r:W#ANWH~@ ?d}zr&Es/V%O~<(-;&v-!ZRkbh' );
define( 'SECURE_AUTH_SALT', 'c`J>m$7k;!=G_G:qDa VqKST0jF>/J}nOD^r_uwVbNi~~hmdb6/]F4Ip1etb n8T' );
define( 'LOGGED_IN_SALT',   'b?)OX2)=G:~@P-?Qfd+tGWpry!!|u l~XKE48}NH+UXt(2v9NgXU@65#=D2SS12?' );
define( 'NONCE_SALT',       '4]?lZ{}O!=c<}b4rP7i}q.AG}zLzky.--|r9;_e,DS9&hZtVWBI-ACkNo3o2eeW<' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'tk_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
