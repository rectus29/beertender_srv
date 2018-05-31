<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 23/09/2015                     */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use BeerTender\manager\MailManager;
use BeerTender\manager\SecurityManager;
use BeerTender\model;
use BeerTender\models\dao\ConfigDao;
use BeerTender\models\dao\GenericDao;

//enable devmode
define('DEV_MOD', true);
error_reporting(E_ALL);

session_start();
/** SYSTEM CONSTANT */
define('WEB_PATH', APP_PATH . 'web/');
define('LIB_DIR', dirname(__FILE__) . '/../lib/');
define('CFG_DIR', dirname(__FILE__) . '/');
define('CSS_DIR', dirname(__FILE__) . '/../css/');
define('WEB_DIR', dirname(__FILE__) . '/../web/');
define('HTML_DIR', dirname(__FILE__) . '/../html/');
define('ROOT_DIR', dirname(__FILE__) . '/../');
define('FILE_DIR', ROOT_DIR . '/files/');

if (!file_exists(FILE_DIR)) {
    mkdir(FILE_DIR);
}
require_once ROOT_DIR . "/vendor/autoload.php";

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'dbname' => 'beerTender',
    'charset' => 'utf8',
);

//mailerconfig
$mailConfig = [
    'serversmtp' => '127.0.0.1',
    'SMTPAuth' => true,
    'Username' => '',
    'Password' => '',
    'SMTPSecure' => 'ssl',
    'Port' => 465,
    'from' => ''
];
// obtaining the entity manager
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/../classes/"), true);
$em = EntityManager::create($conn, $config);
$securityMananger = SecurityManager::init($em);
$mailManager = MailManager::init($em, $mailConfig);
$gDao = new GenericDao($em);
$configDao = new ConfigDao($em);

