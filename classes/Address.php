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


use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @Entity
 * @Table(name="app_address")
 */
class Address extends DomainObject
{
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $address;
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $addressComplement;
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $country = "France";
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $city;
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $zipCode;
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $lat;
    /**
     * @Column(type="string", nullable=true)
     * @var String
     */
    private $lng;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="address")
     * @var User
     */
    private $user;

    /**
     * Address constructor.
     * @param String $address
     * @param String $addressComplement
     * @param String $country
     * @param String $city
     * @param String $lat
     * @param String $lng
     */
    public function __construct($address = null, $addressComplement = null, $country = "France", $city = null, $lat = null, $lng = null)
    {
        parent::__construct();
        $this->address = $address;
        $this->addressComplement = $addressComplement;
        $this->country = $country;
        $this->city = $city;
        $this->lat = $lat;
        $this->lng = $lng;
    }

    /**
     * @return String
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param String $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return String
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param String $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return String
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param String $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
    
    /**
     * @return String
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return String
     */
    public function getAddressComplement()
    {
        return $this->addressComplement;
    }

    /**
     * @param String $addressComplement
     */
    public function setAddressComplement($addressComplement)
    {
        $this->addressComplement = $addressComplement;
    }

    /**
     * @return String
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param String $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return String
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * Return the adress formatted for display
     * @return String the formatted address
     */
    public function getFormattedAddress()
    {
        $out = "";
        if ($this->getAddress() != null) {
            $out .= $this->getAddress() . " ";
        }
        if ($this->getAddressComplement() != null) {
            $out .= $this->getAddressComplement() . " ";
        }
        if ($this->getZipCode() != null) {
            $out .= $this->getZipCode() . " ";
        }
        if ($this->getCity() != null) {
            $out .= $this->getCity() . " ";
        }
        return $out;
    }
}