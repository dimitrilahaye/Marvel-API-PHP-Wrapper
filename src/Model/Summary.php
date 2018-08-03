<?php

namespace DimitriLahaye\Model;

class Summary
{
    /**
     * The path to the individual item resource.
     * @var string
     */
    protected $_resourceURI;
    
    /**
     * The full name of the item.
     * @var string
     */
    protected $_name;

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->_resourceURI;
    }

    /**
     * @param string $resourceURI
     *
     * @return self
     */
    public function setResourceURI($resourceURI)
    {
        $this->_resourceURI = $resourceURI;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }
}