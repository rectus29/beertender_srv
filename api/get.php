<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 06/06/2018 15:18                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

use BeerTender\Enum\RequestState;
use BeerTender\Model\Order;
use BeerTender\Model\Product;
use BeerTender\Models\Dao\ProductDao;

require("apiInclude.php");
if ($_GET['object'] == Product::getClassName()) {
    $productDao = new ProductDao($em);
    $targetObjectId = $_GET['objectId'];
    /**@var $object Product*/
    $object = $productDao->findByPrimaryKey(Product::class, $targetObjectId);
    header("HTTP/1.1 ".RequestState::HTTP_OK." ".RequestState::getMessage(RequestState::HTTP_OK));
    header("Content-Type:".$apiRequest->getContentType());
    echo json_encode($object->toArray());
    //echo json_encode($object);
    exit;
} else if ($_GET['object'] == Order::getClassName()){
    $targetObjectId = $_GET['objectId'];
    $object = $genericDao->findByPrimaryKey(Product::class, $targetObjectId);
    header("HTTP/1.1 ".RequestState::HTTP_OK." ".RequestState::getMessage(RequestState::HTTP_OK));
    header("Content-Type:".$apiRequest->getContentType());
    echo json_encode ($object);
    exit;
} else {
    header("HTTP/1.1 ". RequestState::HTTP_InternalServerError." ".RequestState::getMessage(RequestState::HTTP_InternalServerError));
    header("Content-Type:".$apiRequest->getContentType());
    echo "";
    exit;
}
