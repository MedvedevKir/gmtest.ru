<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** �?мя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** �?мя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** �?мя сервера MySQL */
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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ap)M-!A~,8{[{$}:gzp.*M_y>sr}&v0<4yl85G:J47^hJ ^2Z#t|$gDG=47]G~Gq');
define('SECURE_AUTH_KEY',  'c]|eV+?{Jjsp4bzQh!2schb+V!$J0qg/7DwYPoaF|ACS)5VUq*ybjb:@ergY}299');
define('LOGGED_IN_KEY',    'yI`u?#-]8 # PzM0`K F) xx-#lg6sf!E?a{t]H-{,kDGuFQ]M0hk*G9|YA7v4]Q');
define('NONCE_KEY',        'i;{S+27|~x`T#78C4j1Bi%h?;aR(!/-17qLo=T-Ms|AU_F(;jr1rZdDWjS+2-$p7');
define('AUTH_SALT',        ':@F0mm-4kf#~-,@#w~a(^ai&FmQ;Xo|yay8vRk+pyr((}6]cycP$2.VFYIBs|+qL');
define('SECURE_AUTH_SALT', '$)M`+VOZIun=ltwgLD8D`lUJ@IVQZg0W/i,+t&;-RH9$?|[y5MVoL{*wF-Oa&+4s');
define('LOGGED_IN_SALT',   '9^I*}A/9m7_6Rg#&.$>Ysc=g]P-S y*K-9?SGBGiq6K@1f]2$B4c3y&^>V7GX<P(');
define('NONCE_SALT',       '#TM,kgWnj0QoHlsh_6_=.V1ZmTa}5*W$0x~3:?EZ$Vx+U/S1bV#RA&}_XXg$qS!Y');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * �?змените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * �?змените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �?нициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
