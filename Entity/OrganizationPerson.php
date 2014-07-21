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
    private $person_id;

    /**
     * @var integer
     */
    private $organization_id;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Melody\UserBundle\Entity\person
     */
    private $person;

    /**
     * @var \Melody\UserBundle\Entity\organization
     */
    private $organization;


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
     * Set person
     *
     * @param \Melody\UserBundle\Entity\person $person
     * @return OrganizationPerson
     */
    public function setPerson(\Melody\UserBundle\Entity\person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Melody\UserBundle\Entity\person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set organization
     *
     * @param \Melody\UserBundle\Entity\organization $organization
     * @return OrganizationPerson
     */
    public function setOrganization(\Melody\UserBundle\Entity\organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \Melody\UserBundle\Entity\organization 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
