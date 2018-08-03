<?php

namespace DimitriLahaye\Model;

class MarvelList
{
    /**
     * The number of total available items in this list. Will always be greater than or equal to the "returned" value.
     * @var int
     */
    protected $_available;
    
    /**
     * The number of items returned in this collection (up to 20).
     * @var int
     */
    protected $_returned;
    
    /**
     * The path to the full list of items in this collection.
     * @var string
     */
    protected $_collectionURI;
    
    /**
     * The list of returned items in this collection
     * @var Summary[]
     */
     protected $_items;

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->_available;
    }

    /**
     * @param int $available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->_available = $available;

        return $this;
    }

    /**
     * @return int
     */
    public function getReturned()
    {
        return $this->_returned;
    }

    /**
     * @param int $returned
     *
     * @return self
     */
    public function setReturned($returned)
    {
        $this->_returned = $returned;

        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionURI()
    {
        return $this->_collectionURI;
    }

    /**
     * @param string $collectionURI
     *
     * @return self
     */
    public function setCollectionURI($collectionURI)
    {
        $this->_collectionURI = $collectionURI;

        return $this;
    }

    /**
     * @return Summary[]
     */
    public function getItems()
    {
        return $this->_items;
    }

    /**
     * @param Summary[] $items
     *
     * @return self
     */
    public function setItems($items = array())
    {
        $this->_items = $items;

        return $this;
    }
}