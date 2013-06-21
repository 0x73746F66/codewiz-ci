<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interaction
 */
class Interaction
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Entities\Type
     */
    private $type;

    /**
     * @var \Entities\Post
     */
    private $post;

    /**
     * @var \Entities\User
     */
    private $user;


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
     * Set type
     *
     * @param \Entities\Type $type
     * @return Interaction
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
     * Set post
     *
     * @param \Entities\Post $post
     * @return Interaction
     */
    public function setPost(\Entities\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \Entities\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set user
     *
     * @param \Entities\User $user
     * @return Interaction
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
