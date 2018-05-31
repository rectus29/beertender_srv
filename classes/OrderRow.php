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
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="app_orderrow")
 */
class OrderRow extends DomainObject
{
    /**
     * @ManyToOne(targetEntity="Order")
     * @var Order
     */
    private $order;
    
    /**
     * @ManyToOne(targetEntity="Product")
     * @var Product
     */
    private $Product;


    /**
     * @Column(type="integer")
     * @var Integer
     */
    private $quantity = 1;

    /**
     * OrderRow constructor.
     * @param Order $order
     * @param Product $Product
     * @param int $quantity
     */
    public function __construct(Order $order, Product $Product, $quantity)
    {
        $this->order = $order;
        $this->Product = $Product;
        $this->quantity = $quantity;
    }


    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param Product $Product
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

   
    
    
    
}