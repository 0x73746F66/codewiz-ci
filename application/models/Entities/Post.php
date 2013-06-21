<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

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
     * @var \Entities\Type
     */
    private $type;

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
    private $replies;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interactions;

    /**
     * @var \Entities\Post
     */
    private $parent;

    /**
     * @var \Entities\User
     */
    private $user;

    /**
     * @var \Entities\Instance
     */
    private $instances;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->replies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interactions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Post
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
     * @return Post
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
     * @return Post
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
     * @return Post
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
     * @return Post
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
     * Set modifyUser
     *
     * @param \Entities\User $modifyUser
     * @return Post
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
     * @return Post
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
     * Add replies
     *
     * @param \Entities\Post $replies
     * @return Post
     */
    public function addReplie(\Entities\Post $replies)
    {
        $this->replies[] = $replies;
    
        return $this;
    }

    /**
     * Remove replies
     *
     * @param \Entities\Post $replies
     */
    public function removeReplie(\Entities\Post $replies)
    {
        $this->replies->removeElement($replies);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Add interactions
     *
     * @param \Entities\Interaction $interactions
     * @return Post
     */
    public function addInteraction(\Entities\Interaction $interactions)
    {
        $this->interactions[] = $interactions;
    
        return $this;
    }

    /**
     * Remove interactions
     *
     * @param \Entities\Interaction $interactions
     */
    public function removeInteraction(\Entities\Interaction $interactions)
    {
        $this->interactions->removeElement($interactions);
    }

    /**
     * Get interactions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInteractions()
    {
        return $this->interactions;
    }

    /**
     * Set parent
     *
     * @param \Entities\Post $parent
     * @return Post
     */
    public function setParent(\Entities\Post $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Entities\Post 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set user
     *
     * @param \Entities\User $user
     * @return Post
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

    /**
     * Set instances
     *
     * @param \Entities\Instance $instances
     * @return Post
     */
    public function setInstances(\Entities\Instance $instances = null)
    {
        $this->instances = $instances;
    
        return $this;
    }

    /**
     * Get instances
     *
     * @return \Entities\Instance 
     */
    public function getInstances()
    {
        return $this->instances;
    }
}
