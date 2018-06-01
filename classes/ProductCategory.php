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


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

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
     * @OneToMany(targetEntity="Product", mappedBy="productCategory", )
     * @var Product[]
     */
    private $products;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        parent::__construct();
        return $this;
    }

    /**
     * @return String
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return String
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @param String $desc
     */
    public function setDesc($desc) {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts() {
        return $this->products;
    }

    /**
     * @param Product[] $products
     */
    public function setProducts($products) {
        $this->products = $products;
        return $this;
    }


}