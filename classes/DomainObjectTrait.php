<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 08/06/2018 10:08                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender\Model;


trait DomainObjectTrait {
    public static function getClassName() {
        return join('',array_slice(explode('\\', static::class), -1));;
    }
}