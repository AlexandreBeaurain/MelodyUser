<?php

namespace Melody\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 */
class Person extends \FOS\UserBundle\Model\User
{
    /**
     * @var string
     */
    protected $given_name;

    /**
     * @var string
     */
    protected $family_name;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $postal_code;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var \DateTime
     */
    protected $birth_date;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var boolean
     */
    protected $opt_in;

    /**
     * @var string
     */
    protected $google;

    /**
     * @var string
     */
    protected $facebook;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \DateTime
     */
    protected $updated_at;

    /**
     * @var integer
     */
    protected $id;


    /**
     * Set given_name
     *
     * @param string $givenName
     * @return Person
     */
    public function setGivenName($givenName)
    {
        $this->given_name = $givenName;

        return $this;
    }

    /**
     * Get given_name
     *
     * @return string 
     */
    public function getGivenName()
    {
        return $this->given_name;
    }

    /**
     * Set family_name
     *
     * @param string $familyName
     * @return Person
     */
    public function setFamilyName($familyName)
    {
        $this->family_name = $familyName;

        return $this;
    }

    /**
     * Get family_name
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Person
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postal_code
     *
     * @param string $postalCode
     * @return Person
     */
    public function setPostalCode($postalCode)
    {
        $this->postal_code = $postalCode;

        return $this;
    }

    /**
     * Get postal_code
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Person
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
     * Set country
     *
     * @param string $country
     * @return Person
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
     * Set birth_date
     *
     * @param \DateTime $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;

        return $this;
    }

    /**
     * Get birth_date
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Person
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Person
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set opt_in
     *
     * @param boolean $optIn
     * @return Person
     */
    public function setOptIn($optIn)
    {
        $this->opt_in = $optIn;

        return $this;
    }

    /**
     * Get opt_in
     *
     * @return boolean 
     */
    public function getOptIn()
    {
        return $this->opt_in;
    }

    /**
     * Set google
     *
     * @param string $google
     * @return Person
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string 
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Person
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Person
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Person
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Person
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $organizations;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->organizations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add organizations
     *
     * @param \Melody\UserBundle\Entity\Organization $organizations
     * @return Person
     */
    public function addOrganization(\Melody\UserBundle\Entity\Organization $organizations)
    {
        $this->organizations[] = $organizations;

        return $this;
    }

    /**
     * Remove organizations
     *
     * @param \Melody\UserBundle\Entity\Organization $organizations
     */
    public function removeOrganization(\Melody\UserBundle\Entity\Organization $organizations)
    {
        $this->organizations->removeElement($organizations);
    }

    /**
     * Get organizations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }
}
