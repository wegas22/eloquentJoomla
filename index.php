<?php
require "vendor/autoload.php";
use Wegas\Models\Database;
use Illuminate\Database\Capsule\Manager as Capsule;

ini_set('memory_limit', '-1');
set_time_limit(0);

// chdir(__DIR__);
// exec('git pull 2>&1', $output);
// echo implode("\n", $output);

$app = JFactory::getApplication();
defined("DBDRIVER")or define("DBDRIVER","mysql");
defined("DBHOST")or define("DBHOST", $app->getCfg('host', ''));
defined("DBNAME")or define("DBNAME", $app->getCfg('db', ''));
defined("DBUSER")or define("DBUSER", $app->getCfg('user', ''));
defined("DBPASS")or define("DBPASS", $app->getCfg('password', ''));
defined("PREFIX")or define("PREFIX", $app->getCfg('dbprefix', ''));

$dt = new Database();