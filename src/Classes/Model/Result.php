<?php

namespace DimitriLahaye\Model;

class Result
{
    /**
     * The unique ID of the creator resource.
     * @var int
     */
    public $id;
    
    /**
     * The date the resource was most recently modified.
     * @var Date
     */
    public $modified;
    
    /**
     * The canonical URL identifier for this resource.
     * @var string
     */
    public $resourceURI;

    /**
     * The representative image for this creator.
     * @var Image
     */
    public $thumbnail;
}