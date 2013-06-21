<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instance
 */
class Instance
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $uri;

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
    private $deleted;

    /**
     * @var \Entities\Type
     */
    private $type;

    /**
     * @var \Entities\User
     */
    private $deleteUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $posts;

    /**
     * @var \Entities\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set uri
     *
     * @param string $uri
     * @return Instance
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Instance
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
     * @return Instance
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
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Instance
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
     * Set type
     *
     * @param \Entities\Type $type
     * @return Instance
     */
    public function setType(\Entities\Type $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \Entities\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set deleteUser
     *
     * @param \Entities\User $deleteUser
     * @return Instance
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
     * Add posts
     *
     * @param \Entities\Post $posts
     * @return Instance
     */
    public function addPost(\Entities\Post $posts)
    {
        $this->posts[] = $posts;
    
        return $this;
    }

    /**
     * Remove posts
     *
     * @param \Entities\Post $posts
     */
    public function removePost(\Entities\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set user
     *
     * @param \Entities\User $user
     * @return Instance
     */
    public function setUser(\Entities\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Entities\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
