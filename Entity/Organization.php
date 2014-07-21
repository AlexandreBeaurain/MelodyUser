<?php

namespace Melody\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 */
class Organization extends \FOS\UserBundle\Entity\Group
{
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
    protected $tree_left;

    /**
     * @var integer
     */
    protected $tree_right;

    /**
     * @var integer
     */
    protected $tree_level;

    /**
     * @var integer
     */
    protected $id;


    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Organization
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
     * @return Organization
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
     * Set tree_left
     *
     * @param integer $treeLeft
     * @return Organization
     */
    public function setTreeLeft($treeLeft)
    {
        $this->tree_left = $treeLeft;

        return $this;
    }

    /**
     * Get tree_left
     *
     * @return integer 
     */
    public function getTreeLeft()
    {
        return $this->tree_left;
    }

    /**
     * Set tree_right
     *
     * @param integer $treeRight
     * @return Organization
     */
    public function setTreeRight($treeRight)
    {
        $this->tree_right = $treeRight;

        return $this;
    }

    /**
     * Get tree_right
     *
     * @return integer 
     */
    public function getTreeRight()
    {
        return $this->tree_right;
    }

    /**
     * Set tree_level
     *
     * @param integer $treeLevel
     * @return Organization
     */
    public function setTreeLevel($treeLevel)
    {
        $this->tree_level = $treeLevel;

        return $this;
    }

    /**
     * Get tree_level
     *
     * @return integer 
     */
    public function getTreeLevel()
    {
        return $this->tree_level;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Organization
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
}
