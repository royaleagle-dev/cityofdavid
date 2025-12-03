<?php

//database configuration
//define ('HOST', 'localhost');
define('HOST', 'localhost');
//define ('USERNAME', 'ayotdjst_zeyphr');
define('USERNAME', 'aekstbcz_ayotunde');
//define ('PASSWORD', 'royaleagle2019.');
define('PASSWORD', 'Royaleagle2019.');
//define ('DATABASE', 'ayotdjst_cityofdavid');
define('DATABASE', 'aekstbcz_cityofdavid');

//other site conf
define ('SITE_NAME', 'CityOfDavid');
define ('URL_ROOT', '/');
define ('BASE_MEDIA_ROOT', dirname(dirname(__DIR__)));
define ('SYSTEM_ROOT', dirname(__DIR__));
define ('BLOG_ADMIN_EMAIL', 'admin@testing.test.com');

define("GCLOUD_BUCKET_NAME", 'cityofdavid-file-storage');
define("GCLOUD_URL_ROOT", 'https://storage.googleapis.com/'.GCLOUD_BUCKET_NAME.'/'.'public/');

define ("DATABASE_TYPE", "SQLITE"); //MYSQL - for mysqli database
define ("ENVIRONMENT", "PRODUCTION"); //PRODUCTION - for launching

?>