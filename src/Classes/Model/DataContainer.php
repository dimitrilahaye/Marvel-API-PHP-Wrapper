<?php

namespace DimitriLahaye\Model;

class DataContainer
{
    /**
     * The requested offset (number of skipped results) of the call.
     * @var int
     */
    public $offset;
    
    /**
     * The requested result limit.
     * @var int
     */
    public $limit;
    
    /**
     * The total number of resources available given the current filter set.
     * @var int
     */
    public $total;
    
    /**
     * The total number of results returned by this call.
     * @var int
     */
    public $count;
    
    /**
     * The list of characters returned by the call
     * @var Result[]
     */
     public $results;
}