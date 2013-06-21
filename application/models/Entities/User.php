<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $about;

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
    private $instances;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $posts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attachments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interactions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $security;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->instances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attachments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interactions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->security = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;
    
        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * Add instances
     *
     * @param \Entities\Instance $instances
     * @return User
     */
    public function addInstance(\Entities\Instance $instances)
    {
        $this->instances[] = $instances;
    
        return $this;
    }

    /**
     * Remove instances
     *
     * @param \Entities\Instance $instances
     */
    public function removeInstance(\Entities\Instance $instances)
    {
        $this->instances->removeElement($instances);
    }

    /**
     * Get instances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Add posts
     *
     * @param \Entities\Post $posts
     * @return User
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
     * Add attachments
     *
     * @param \Entities\Attachment $attachments
     * @return User
     */
    public function addAttachment(\Entities\Attachment $attachments)
    {
        $this->attachments[] = $attachments;
    
        return $this;
    }

    /**
     * Remove attachments
     *
     * @param \Entities\Attachment $attachments
     */
    public function removeAttachment(\Entities\Attachment $attachments)
    {
        $this->attachments->removeElement($attachments);
    }

    /**
     * Get attachments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Add interactions
     *
     * @param \Entities\Interaction $interactions
     * @return User
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
     * Add security
     *
     * @param \Entities\Security $security
     * @return User
     */
    public function addSecurity(\Entities\Security $security)
    {
        $this->security[] = $security;
    
        return $this;
    }

    /**
     * Remove security
     *
     * @param \Entities\Security $security
     */
    public function removeSecurity(\Entities\Security $security)
    {
        $this->security->removeElement($security);
    }

    /**
     * Get security
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecurity()
    {
        return $this->security;
    }
}
