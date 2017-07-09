файле wp-cron.php закомментировать строку:
//ignore_user_abort(true);
в файл конфигурации WordPress wp-config-php добавляем строку:
define('DISABLE_WP_CRON', 'true');



Вот такая команда еще есть, чтобы почистить базу от мусора:

DELETE FROM `wp_postmeta`
WHERE `meta_key` IN('_edit_lock', '_edit_last','_wp_old_slug')
