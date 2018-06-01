<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 08/06/2016 19:59                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender\model;


use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @Entity
 * @Table(name="app_productcategory")
 */
class ProductCategory extends DomainObject
{
    /**
     * @Column(type="string", nullable=false)
     * @var String
     */
    private $name;

    /**
     * @Column(type="string", length=65536, nullable=true)
     * @var String
     */
    private $desc;
    
    

    /**
     * Product constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}