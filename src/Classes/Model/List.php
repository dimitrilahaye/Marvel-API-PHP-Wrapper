<?php

namespace DimitriLahaye\Model;

class List
{
    /**
     * The number of total available issues in this list. Will always be greater than or equal to the "returned" value.
     * @var int
     */
    public $available;
    
    /**
     * The number of issues returned in this collection (up to 20).
     * @var int
     */
    public $returned;
    
    /**
     * The path to the full list of issues in this collection.
     * @var string
     */
    public $collectionURI;
    
    /**
     * The list of returned issues in this collection
     * @var ComicSummary[]
     */
     public $items;
}