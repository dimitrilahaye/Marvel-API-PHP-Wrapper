<?php

namespace DimitriLahaye\Model;

class List
{
    /**
     * The number of total available items in this list. Will always be greater than or equal to the "returned" value.
     * @var int
     */
    public $available;
    
    /**
     * The number of items returned in this collection (up to 20).
     * @var int
     */
    public $returned;
    
    /**
     * The path to the full list of items in this collection.
     * @var string
     */
    public $collectionURI;
    
    /**
     * The list of returned items in this collection
     * @var Summary[]
     */
     public $items;

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param int $available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * @return int
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * @param int $returned
     *
     * @return self
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionURI()
    {
        return $this->collectionURI;
    }

    /**
     * @param string $collectionURI
     *
     * @return self
     */
    public function setCollectionURI($collectionURI)
    {
        $this->collectionURI = $collectionURI;

        return $this;
    }

    /**
     * @return Summary[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Summary[] $items
     *
     * @return self
     */
    public function setItems(Summary[] $items)
    {
        $this->items = $items;

        return $this;
    }
}