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

use BeerTender\Api\Core\ApiRequest;
use BeerTender\manager\SecurityManager;
use BeerTender\models\dao\ConfigDao;
use BeerTender\models\dao\GenericDao;


error_reporting(E_ALL);
require_once('../config/global.php');
//here check connection to dbserver //TODO check usage of this
$GLOBALS['maintenance'] = !$em->getConnection()->ping();

//init basic dao service
$genericDao = new GenericDao($em);
$configDao = new ConfigDao($em);



//process incoming request
$apiRequest = new ApiRequest($_REQUEST);

//check maintenance mod
if ($configDao->getByKey('serverState') != null && $configDao->getByKey('serverState')->getValue() == '0' && !SecurityManager::get()->isAdmin($_SESSION)){
    $GLOBALS['maintenance'] = true;
}



//$em->getConnection()->close();
