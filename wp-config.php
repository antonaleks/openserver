<?php

// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов
// END iThemes Security - Не меняйте и не удаляйте эту строку

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
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '`/|D6r[y4zL[!G/er>H),4[Lj4wC@{A{4#%v-LyZBCnchO_3Vo?^/?|Q<D,bT[#M');
define('SECURE_AUTH_KEY',  '*vKl75$,ePVs_]kK28~&-=FlrK?[F!Qk8Fumt)#8R7W.hG6l2=i?sCbBAfR(,XLd');
define('LOGGED_IN_KEY',    't51)cVt5c?I@^+bx23[@u=grMUs4o^u7UC  M`.dzeBivX%mY`5@J.8PKM)L|S>p');
define('NONCE_KEY',        'DmPF5?5{FgJ0F;b=/{hcimf~1c&VEX@fBs6r/[<F[wxV:ty{oyF%nF$3!z,`IqOH');
define('AUTH_SALT',        'SmoW8eH5wge^tPHv%97PWv9{Eum=@tw)2NN)h)|TFgJ-Rm^,O$r!&Z*D48i3q;uE');
define('SECURE_AUTH_SALT', 'h=zyN[R?]?2O_9=n6>pEnKOtcE]b7/R{59afV 3xC1)4$5S}t0~Umh9.s-mMV9SC');
define('LOGGED_IN_SALT',   '{lt4ASgzRt]d K|(ushG%Ui1,U Jp7M8RrKz]s:6iB;]_(%6>Het.M|F>X@ESI{2');
define('NONCE_SALT',       'DrAlRdn04M#Q}jN_s_n4toqH6gg+B@bieQQIRQVsa8$3Ht]4Cbtc*xkIQxiUS^Ot');

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
