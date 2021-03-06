<?php
// HTTP
define('HTTP_SERVER', 'http://ec-store.slat.org:8080/admin/');
define('HTTP_CATALOG', 'http://ec-store.slat.org:8080/');

// HTTPS
define('HTTPS_SERVER', 'https://ec-store.slat.org:8080/admin/');
define('HTTPS_CATALOG', 'https://ec-store.slat.org:8080/');

// DIR
define('DIR_APPLICATION', '/var/www/admin/');
define('DIR_SYSTEM', '/var/www/system/');
define('DIR_IMAGE', '/var/www/image/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_CATALOG', '/var/www/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', '');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
