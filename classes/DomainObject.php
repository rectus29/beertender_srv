<?php
namespace BeerTender\Model;
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 28/09/2015 17:01               */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

use BeerTender\Enum\State;
use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Indaxia\OTR\ITransformable;
use Indaxia\OTR\Traits\Transformable;

/**
 * @MappedSuperclass
 */
class DomainObject implements ITransformable
{
    use DomainObjectTrait;
    use Transformable;
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var Integer
     **/
    private $id;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $created;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $updated;

    /**
     * @Column(type="integer")
     * @var State
     */
    protected $status = State::ENABLE;

    /**
     * DomainObject constructor.
     */
    public function __construct()
    {
        $this->setCreated(new DateTime());
        $this->setUpdated(new DateTime());
        $this->setStatus(State::ENABLE);
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param State $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

}