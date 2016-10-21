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
define('DB_NAME', 'carshopDB');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(e/}]Zne-lTcjb5}>o;.:q!G,Q%x]5w|:66*,rSfu_PXUG!rEgcHGPQux9T,E6|L');
define('SECURE_AUTH_KEY',  ']+g|0(2/:n-~Gc]._oM]#TK%xK4?nv_.kZ%PVf{YA(t-{>aW_ djc0.oz-9t(q*^');
define('LOGGED_IN_KEY',    '197Z-_Wqbqt/SRy5X_yU?$3l&RdYZN-iI![<eq9|?X&`i&c0a9z)FlRy:x+b`CrR');
define('NONCE_KEY',        '+mrjEQh|AtXPWQ/1_GVA)E,>{&|.HD3YLs,JUvXJ@C$<@,tp][+XQXcW[MWpKKE_');
define('AUTH_SALT',        '{p4E0|jmBGRiD0Y2X)%KA@B[j)z-:qb-[Emls8+=/a|Mbx]a^#pkU(%V.6|o0B?l');
define('SECURE_AUTH_SALT', 's2kg-l*zKo`%oj6]!s*E]A,af$G3B|x6Pu1OHivpA--|@H(D-Q53?_5M0R<S<W4A');
define('LOGGED_IN_SALT',   '8@4VWTj7(Pi oP^<AwX~J}FMVVjeQvi$hOQrT%liGeVEqHV`f1X$@uMH0}@zl:/g');
define('NONCE_SALT',       'V#?B$D0q]-W>gR-)uRs&AsnilfKE3T(|J{EZa:pxxGLNr.4+qqo$:__N5z&QK=[O');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
