файле wp-cron.php закомментировать строку:
//ignore_user_abort(true);
в файл конфигурации WordPress wp-config-php добавляем строку:
define('DISABLE_WP_CRON', 'true');



Вот такая команда еще есть, чтобы почистить базу от мусора:

DELETE FROM `wp_postmeta`
WHERE `meta_key` IN('_edit_lock', '_edit_last','_wp_old_slug')




список самых крупных по объему опций с флагом autoload:

mysql> SELECT option_name, LENGTH(option_value) AS length FROM wp_options
  WHERE autoload = 'yes' ORDER BY length DESC LIMIT 10;



Проблема здесь в том, что опция payment-ip-log была установлена с флагом autoload по умолчанию. Таким образом, при загрузке любой страницы сайта, WordPress загружал весь этот лог IP-адресов в память:

mysql> SELECT option_name, LENGTH(option_value), autoload FROM wp_options WHERE option_name = 'payment-ip-log';
