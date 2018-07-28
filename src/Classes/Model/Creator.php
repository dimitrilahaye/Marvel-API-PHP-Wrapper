<?php

namespace DimitriLahaye\Model;

class Creator extends Result
{
    
    /**
     * The first name of the creator.
     * @var string
     */
    public $firstName;
    
    /**
     * The middle name of the creator.
     * @var string
     */
    public $middleName;
    
    /**
     * The last name of the creator.
     * @var string
     */
    public $lastName;
    
    /**
     * The suffix or honorific for the creator.
     * @var string
     */
    public $suffix;
    
    /**
     * The full name of the creator (a space-separated concatenation of the above four fields).
     * @var string
     */
    public $fullName;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     public $urls;
    
    /**
     * A resource list containing the series which feature work by this creator.
     * @var List
     */
    public $series;
    
    /**
     * A resource list containing the stories which feature work by this creator.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list containing the comics which feature work by this creator.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing the events which feature work by this creator
     * @var List
     */
    public $events;
}