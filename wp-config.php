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
define( 'DB_NAME', 'wordpess' );

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
define( 'AUTH_KEY',         '%G1JyQZ7MhYdPXO!|9&%tOY9G.zx9M`E19?GSn-BVy77YTpzI)K;2H8P5&Gv;@rV' );
define( 'SECURE_AUTH_KEY',  'fgk9cC-G/^Js=H7C;H!%X4dj15)%8!7Aei@DrwXhit3,P2]0Db{_;$Fq3:r`*K)+' );
define( 'LOGGED_IN_KEY',    'v^h)Z(xZ[.+y,Px* (zm|G#uQVa=g1u)Gm|o(Z48UG!9UZPRbVd`Nmvy?H-]cp#m' );
define( 'NONCE_KEY',        '40HY/&l9%N.?4Fqcdn=9IIZ-!ZhHqmty %I@v+3,k)pa(R(krPD&:f?z.3mEje9q' );
define( 'AUTH_SALT',        '*&SQ`I(h%w7)bTo!<:{W<C6CwbSx[`4md$4rnga!,e_o7VNF(atsY$6(Jc,Vjn+K' );
define( 'SECURE_AUTH_SALT', 'S!99aGHO8(t]eYofcg?D|cC(hWTQR#i}k^fY& =1s4wv4X~VZ..@&~qJd(bT_1X(' );
define( 'LOGGED_IN_SALT',   '.q Mk!0nn/0l:XyAEt3AQ/65f6v.42@1uy%S]Z:s6Cd$|]xF{wo?K.]T_dIp>q*(' );
define( 'NONCE_SALT',       '#%T?a];~01C[v>UD@U43CjUtvti*4*lb5D%8uR=A$dA,)9i:WZKMr_y{o]zxzjR:' );

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
