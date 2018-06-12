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

namespace BeerTender\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="app_product")
 */
class Product extends DomainObject
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
     * @Column(type="string", nullable=false)
     * @var String
     */
    private $price = 0;
    
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $img;


    /**
     * @ManyToMany(targetEntity="Category", mappedBy="products")
     * @var Category[]
     */
    private $productCategoryList;



    /**
     * Product constructor.
     */
    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param String $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return String
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param String $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return String
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param String $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return Category
     */
    public function getProductCategoryList() {
        return $this->productCategoryList;
    }

    /**
     * @param Category $productCategoryList
     */
    public function setProductCategoryList($productCategoryList) {
        $this->productCategoryList = $productCategoryList;
    }

}