<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 04/01/2018 12:11                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender;


use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class State extends Type {
    const DISABLED = 0;
    const ENABLE = 1;
    const DELETED = 2;

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
        // TODO: Implement getSQLDeclaration() method.
    }

    public function getName() {
        return "enumState";
    }


}