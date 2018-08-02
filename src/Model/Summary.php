<?php

namespace DimitriLahaye\Model;

class Summary
{
    /**
     * The path to the individual item resource.
     * @var string
     */
    public $resourceURI;
    
    /**
     * The full name of the item.
     * @var string
     */
    public $name;

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->resourceURI;
    }

    /**
     * @param string $resourceURI
     *
     * @return self
     */
    public function setResourceURI($resourceURI)
    {
        $this->resourceURI = $resourceURI;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}