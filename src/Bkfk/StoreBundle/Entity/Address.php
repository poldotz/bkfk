<?php

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bkfk\StoreBundle\Entity\AddressRepository")
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="street_number",type="string", length=10)
     */
    private $street_number;


    /**
     * @var string
     * @ORM\Column(name="street_name",type="string")
     */
    private $street_name;


    /**
     * @var string
     * @ORM\Column(name="city_district",type="string")
     */
    private $city_district;


    /**
     * @var string
     * @ORM\Column(name="city",type="string")
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(name="zip_code",type="string", length=10)
     */
    private $zip_code;

    /**
     * @var string
     * @ORM\Column(name="county",type="string")
     */
    private $county;

    /**
     * @var string
     * @ORM\Column(name="county_code",type="string", length=10)
     */
    private $county_code;

    /**
     * @var string
     * @ORM\Column(name="region",type="string")
     */
    private $region;


    /**
     * @var string
     * @ORM\Column(name="region_code",type="string",length=10)
     */
    private $region_code;


    /**
     * @var string
     * @ORM\Column(name="country",type="string")
     */
    private $country;


    /**
     * @var string
     * @ORM\Column(name="country_code",type="string", length=10)
     */
    private $country_code;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set street_number
     *
     * @param string $streetNumber
     * @return Address
     */
    public function setStreetNumber($streetNumber)
    {
        $this->street_number = $streetNumber;
    
        return $this;
    }

    /**
     * Get street_number
     *
     * @return string 
     */
    public function getStreetNumber()
    {
        return $this->street_number;
    }

    /**
     * Set street_name
     *
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName)
    {
        $this->street_name = $streetName;
    
        return $this;
    }

    /**
     * Get street_name
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->street_name;
    }

    /**
     * Set city_district
     *
     * @param string $cityDistrict
     * @return Address
     */
    public function setCityDistrict($cityDistrict)
    {
        $this->city_district = $cityDistrict;
    
        return $this;
    }

    /**
     * Get city_district
     *
     * @return string 
     */
    public function getCityDistrict()
    {
        return $this->city_district;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip_code
     *
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zip_code = $zipCode;
    
        return $this;
    }

    /**
     * Get zip_code
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;
    
        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set county_code
     *
     * @param string $countyCode
     * @return Address
     */
    public function setCountyCode($countyCode)
    {
        $this->county_code = $countyCode;
    
        return $this;
    }

    /**
     * Get county_code
     *
     * @return string 
     */
    public function getCountyCode()
    {
        return $this->county_code;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Address
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set region_code
     *
     * @param string $regionCode
     * @return Address
     */
    public function setRegionCode($regionCode)
    {
        $this->region_code = $regionCode;
    
        return $this;
    }

    /**
     * Get region_code
     *
     * @return string 
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country_code
     *
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->country_code = $countryCode;
    
        return $this;
    }

    /**
     * Get country_code
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }
}