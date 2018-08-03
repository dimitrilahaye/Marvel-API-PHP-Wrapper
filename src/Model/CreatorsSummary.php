<?php

namespace DimitriLahaye\Model; 

class CreatorsSummary extends Summary
{    
    /**
     * The role of the creator in the parent entity
     * @var string
     */
    protected $_role;

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->_role;
    }

    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->_role = $role;

        return $this;
    }
}