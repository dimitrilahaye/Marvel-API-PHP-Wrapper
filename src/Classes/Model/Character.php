<?php

namespace DimitriLahaye\Model;

class Character extends Result
{
    /**
     * The name of the character.
     * @var string
     */
    public $name;
    
    /**
     * A short bio or description of the character.
     * @var string
     */
    public $description;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     public $urls;
    
    /**
     * A resource list containing comics which feature this character.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list of stories in which this character appears.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list of events in which this character appears.
     * @var List
     */
    public $events;
    
    /**
     * A resource list of series in which this character appears
     * @var List
     */
    public $series;
}