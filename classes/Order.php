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


use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="app_order")
 */
class Order extends DomainObject
{
    /**
     * @ManyToOne(targetEntity="User")
     * @var User
     */
    private $user;
    
    /**
     * @OneToMany(targetEntity="OrderRow", mappedBy="order")
     * @var OrderRow[]
     */
    private $OrderRows;

    /**
     * Address constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return OrderRow[]
     */
    public function getOrderRows()
    {
        return $this->OrderRows;
    }

    /**
     * @param OrderRow[] $OrderRows
     */
    public function setOrderRows($OrderRows)
    {
        $this->OrderRows = $OrderRows;
    }
    
    
    
}