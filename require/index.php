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

use BeerTender\manager\SecurityManager;
use BeerTender\model;
use BeerTender\models\dao\ConfigDao;

error_reporting(E_ALL);

require_once('../config/global.php');
require_once('../vendor/phpmailer/phpmailer/PHPMailerAutoload.php');

$configDao = new ConfigDao($em);

//here check connection to dbserver
$GLOBALS['maintenance'] = !$em->getConnection()->ping();

//check maintenance mod
if ($configDao->getByKey('serverState') != null && $configDao->getByKey('serverState')->getValue() == '0' && !SecurityManager::get()->isAdmin($_SESSION)){
    $GLOBALS['maintenance'] = true;
}


//try save here 
$product = new model\Product("test1");
$gDao->save($product);




?>
 




<?php
$em->getConnection()->close();

