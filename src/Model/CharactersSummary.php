<?php

namespace DimitriLahaye\Model;

class CharactersSummary extends Summary
{
    /**
     * The role of the creator in the parent entity
     * @var string
     */
    public $role;

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}