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
define( 'DB_NAME', '' );

/** Имя пользователя MySQL */
define( 'DB_USER', '' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'mgl`V4`TpTEv=s3bm,KnR,9PImN365jm|/C.<|YHh%_Mxeh@(v5b(U1A=4&:O}VM' );
define( 'SECURE_AUTH_KEY',  'l$ yOgxtcKQ+o,q|V:JOy?$/]n{gj5:ytm9xo!8-F5#r-Y!W^KrTKqj;&qo5VR:r' );
define( 'LOGGED_IN_KEY',    'r2_Fs#c{}NinMB$9,W4]*(R2DGWb^[Z`NI$[wl5z!s!K[Eb5x}!d3tqwIrXRACz^' );
define( 'NONCE_KEY',        'HKX%q~XLrk`EF&G@%J?8=+Vr<_Dqb_lSC1 .<7uk]8fzv~0l}++tUGqkRJVKbXs/' );
define( 'AUTH_SALT',        'W{ec!Eaw@k12;-aU$BC{$8$}%/KR62Ko~;ZjtV}Fr_uCg8V=BIu=p*rCFk[b!&^Z' );
define( 'SECURE_AUTH_SALT', '}:=dxW/j70vibj}Xj]=yv+XxChXvLjwPE1Q)qyWT*:<r4#,%.q~VL9yR_@laWF5p' );
define( 'LOGGED_IN_SALT',   'Yjq#GsBmbC75O+S*rX%z,R-F6$z;2zS)];M5a]HHS(pn$y?.L_H^Ga0c)#KuA](6' );
define( 'NONCE_SALT',       'm~cnsY/@=%Uh$2PA/MJ;;bHTx5IQx=2rW|oHC`hm.-by+_YwTolLgB~~#{BX!iW>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ly_';

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
