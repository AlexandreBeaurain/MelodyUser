<?php

namespace Melody\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrganizationPerson
 */
class OrganizationPerson
{
    /**
     * @var integer
     */
    protected $person_id;

    /**
     * @var integer
     */
    protected $organization_id;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $person;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $organization;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->person = new \Doctrine\Common\Collections\ArrayCollection();
        $this->organization = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set person_id
     *
     * @param integer $personId
     * @return OrganizationPerson
     */
    public function setPersonId($personId)
    {
        $this->person_id = $personId;

        return $this;
    }

    /**
     * Get person_id
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * Set organization_id
     *
     * @param integer $organizationId
     * @return OrganizationPerson
     */
    public function setOrganizationId($organizationId)
    {
        $this->organization_id = $organizationId;

        return $this;
    }

    /**
     * Get organization_id
     *
     * @return integer 
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
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
     * Add person
     *
     * @param \Melody\UserBundle\Entity\person $person
     * @return OrganizationPerson
     */
    public function addPerson(\Melody\UserBundle\Entity\person $person)
    {
        $this->person[] = $person;

        return $this;
    }

    /**
     * Remove person
     *
     * @param \Melody\UserBundle\Entity\person $person
     */
    public function removePerson(\Melody\UserBundle\Entity\person $person)
    {
        $this->person->removeElement($person);
    }

    /**
     * Get person
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Add organization
     *
     * @param \Melody\UserBundle\Entity\organization $organization
     * @return OrganizationPerson
     */
    public function addOrganization(\Melody\UserBundle\Entity\organization $organization)
    {
        $this->organization[] = $organization;

        return $this;
    }

    /**
     * Remove organization
     *
     * @param \Melody\UserBundle\Entity\organization $organization
     */
    public function removeOrganization(\Melody\UserBundle\Entity\organization $organization)
    {
        $this->organization->removeElement($organization);
    }

    /**
     * Get organization
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
