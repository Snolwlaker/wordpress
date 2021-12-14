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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ez:}za9*1EwMDa{]&Iv#E09Q5l{v`eU&Q*=ZAYLkEwKcDA{QzBiKW8[xusiJ0Vqr' );
define( 'SECURE_AUTH_KEY',  'IT|wQY#]D7=cPR%Tk]?3Y]7(AWhWb)V_#rkbDcyRav{5y-fqqeqZR^*)CL0b0B=b' );
define( 'LOGGED_IN_KEY',    'G_9*e[.cF1/FHG%>=sh)lC_V,*xA;eo+i)*eG@*d35nY<^W;osTj9?7BE}jj>H!Y' );
define( 'NONCE_KEY',        'Iu|QJ^<%+qrBvdcVdcX1y2utWOL._50=Tr{R;m=;e&&cn]`|dCvQi1kY93;Y87l-' );
define( 'AUTH_SALT',        'E]gv;f]T lfuHfw^F!QIm~,Ww2BGVGYsW$+8*tyGB}CD?g?+tPK%jlc9z7JpN~V}' );
define( 'SECURE_AUTH_SALT', 'o},%h#*^4N9]c@)#4>2Wmw:fLMOrt_oOofQ7RgMeF,1X`[*VqG8I9g,WW[30k6`n' );
define( 'LOGGED_IN_SALT',   'k Ddt#e,HW:Ya>1}_Yfd4=;K3i~Guu2_A1*{]vXYN$h+?|Hqhc*o4WU)w`T(s3Bz' );
define( 'NONCE_SALT',       'Rz5hcQJI^4pkcCs$q b0Avq;*4J8=036tZE_^Y8E*Y+12%pz:&@6^,(<n6O]<X0+' );

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
