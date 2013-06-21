<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Post extends \Entities\Post implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setModified($modified)
    {
        $this->__load();
        return parent::setModified($modified);
    }

    public function getModified()
    {
        $this->__load();
        return parent::getModified();
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function getDeleted()
    {
        $this->__load();
        return parent::getDeleted();
    }

    public function setType(\Entities\Type $type = NULL)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setModifyUser(\Entities\User $modifyUser = NULL)
    {
        $this->__load();
        return parent::setModifyUser($modifyUser);
    }

    public function getModifyUser()
    {
        $this->__load();
        return parent::getModifyUser();
    }

    public function setDeleteUser(\Entities\User $deleteUser = NULL)
    {
        $this->__load();
        return parent::setDeleteUser($deleteUser);
    }

    public function getDeleteUser()
    {
        $this->__load();
        return parent::getDeleteUser();
    }

    public function addReplie(\Entities\Post $replies)
    {
        $this->__load();
        return parent::addReplie($replies);
    }

    public function removeReplie(\Entities\Post $replies)
    {
        $this->__load();
        return parent::removeReplie($replies);
    }

    public function getReplies()
    {
        $this->__load();
        return parent::getReplies();
    }

    public function addInteraction(\Entities\Interaction $interactions)
    {
        $this->__load();
        return parent::addInteraction($interactions);
    }

    public function removeInteraction(\Entities\Interaction $interactions)
    {
        $this->__load();
        return parent::removeInteraction($interactions);
    }

    public function getInteractions()
    {
        $this->__load();
        return parent::getInteractions();
    }

    public function setParent(\Entities\Post $parent = NULL)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function setUser(\Entities\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setInstances(\Entities\Instance $instances = NULL)
    {
        $this->__load();
        return parent::setInstances($instances);
    }

    public function getInstances()
    {
        $this->__load();
        return parent::getInstances();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'content', 'active', 'created', 'modified', 'deleted', 'type', 'modifyUser', 'deleteUser', 'replies', 'interactions', 'parent', 'user', 'instances');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}