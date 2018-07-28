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
}