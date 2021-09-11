<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kros22' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OX7*54gO|/zy%`_/LJgIWc~O#@$0J@oW,&.fVS_d#-9J( K48A;fCC^M$EhUJ1/R' );
define( 'SECURE_AUTH_KEY',  'Z*nGp_8J~T$2|Yx#8=R7ElF2-_E.9L8)}Mg&N:_+?VR_3ccfZ>|^ax7MH[.7QXg|' );
define( 'LOGGED_IN_KEY',    'a%t9AiFhTu>qR?BU@aalY?_->k=jbT`FDx]684}@y{h%+)({tvOcNBr`6w70)..8' );
define( 'NONCE_KEY',        'g?T-ng_a1TA:D5hs[q)!p_G:0Q2[L[Em|;}>Wz>W^iao.XIbnn/%+g,Cj0+!_0o@' );
define( 'AUTH_SALT',        'AW@I2xT-PiZReNeY&XccNlxXIZ4t0Rm|[z<]!Ow26-sIaN 5lsdAMUN6N[S::_%:' );
define( 'SECURE_AUTH_SALT', 'aWUR?;/0^Mmc+K1yKRus?.&K@(}a||&KB-YyU}w()Hs-}8tbG/mM,s#)IS0uN<m:' );
define( 'LOGGED_IN_SALT',   'yev}%`w<;S{za*|@I&D1(PFplb3WP0?(S.^YhI![>7HAHe&P?=m=%1S<Pt^b5kbV' );
define( 'NONCE_SALT',       'EfzkX  $r#0mO)q>TV{)TD6cZ >g$wnMgE#`[v`4+zY(YCYkM8wd@HQ|h51ue-uC' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
