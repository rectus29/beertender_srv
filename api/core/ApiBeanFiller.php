<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 13/06/2018 14:50                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender\Api\Core;


use BeerTender\Model\DomainObject;

class ApiBeanFiller {


    /**
     * ApiBeanFiller constructor.
     */
    public function __construct() {
    }

    /**
     * @param String $beanType
     * @param array $data
     * @return DomainObject
     */
    public static function fillBeanWithRequest(String $beanType, array $data) : DomainObject{




        return bean;
    }
}