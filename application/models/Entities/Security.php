<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Security
 */
class Security
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var \DateTime
     */
    private $deleted;

    /**
     * @var \Entities\User
     */
    private $createUser;

    /**
     * @var \Entities\User
     */
    private $modifyUser;

    /**
     * @var \Entities\User
     */
    private $deleteUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Entities\Security
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Security
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Security
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Security
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Security
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Security
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set createUser
     *
     * @param \Entities\User $createUser
     * @return Security
     */
    public function setCreateUser(\Entities\User $createUser = null)
    {
        $this->createUser = $createUser;
    
        return $this;
    }

    /**
     * Get createUser
     *
     * @return \Entities\User 
     */
    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * Set modifyUser
     *
     * @param \Entities\User $modifyUser
     * @return Security
     */
    public function setModifyUser(\Entities\User $modifyUser = null)
    {
        $this->modifyUser = $modifyUser;
    
        return $this;
    }

    /**
     * Get modifyUser
     *
     * @return \Entities\User 
     */
    public function getModifyUser()
    {
        return $this->modifyUser;
    }

    /**
     * Set deleteUser
     *
     * @param \Entities\User $deleteUser
     * @return Security
     */
    public function setDeleteUser(\Entities\User $deleteUser = null)
    {
        $this->deleteUser = $deleteUser;
    
        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return \Entities\User 
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Add children
     *
     * @param \Entities\Security $children
     * @return Security
     */
    public function addChildren(\Entities\Security $children)
    {
        $this->children[] = $children;
    
        return $this;
    }

    /**
     * Remove children
     *
     * @param \Entities\Security $children
     */
    public function removeChildren(\Entities\Security $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Entities\Security $parent
     * @return Security
     */
    public function setParent(\Entities\Security $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Entities\Security 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
