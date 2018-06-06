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

use BeerTender\enum\RequestState;
use BeerTender\model\Order;
use BeerTender\model\Product;

require("apiInclude.php");

if ($_GET['object'] == Product::class) {
    $



} else if ($_GET['object'] == Order::class){

} else {
    header("HTTP/1.1 ". RequestState::HTTP_InternalServerError." ".RequestState::getMessage(RequestState::HTTP_InternalServerError));
    header("Content-Type:".$apiRequest->getContentType());
    echo "";
    exit;
}
