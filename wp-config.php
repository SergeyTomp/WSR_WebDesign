<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'host1811168_user16' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'host1811168_user16' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'rtk_245' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OY0oLq<VWH8*JU}}2[Asbh07KMwkC>#(#4cAz[A7<=(X^V84# S43g4ai6 PF3pG' );
define( 'SECURE_AUTH_KEY',  '/#7dNUaJ+K]ZSUt[Av?ii8/:mr2.`}53PC5xoWs^<~ADP<y!6R6Gz#|CEdh^evgv' );
define( 'LOGGED_IN_KEY',    '8yofq3<Opf|Z(H30k&c5kO;_-6sIYXQ-4iY73~iQo4*[KU5Ya/adsm0N*AhN2$-?' );
define( 'NONCE_KEY',        'CdXXcWOSe5_Mhs}_h~[`sch%pT-ptnMQ,wXH_$X@?[ok;NvE0][c`{N8sEvi6_iJ' );
define( 'AUTH_SALT',        'c?x~GKPU7*7?U[KX.mUS5^@`d*_&eyAQ$g;Kl)M8xoAebFt`2FLI&-W+OC5RrD3[' );
define( 'SECURE_AUTH_SALT', 'XyJV::|;}D6yS0md_83j|O3C>YCTj&x*QG^6/EYb:Jd8vi7uR/Pz9`Dy|^PGi!S}' );
define( 'LOGGED_IN_SALT',   's2U2b-L(gw>1wB|6XRj2;0NWyC:WP2PEm:&/&9dCciQaY]b)prydjmLM8F9Si#sU' );
define( 'NONCE_SALT',       'svk2I_&b$s^ZRImjY^5TIZw_twoS$!e?H5zB%Jo03?5?sB{/hV0UY_{q?DT%Fc}r' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
