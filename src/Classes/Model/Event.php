<?php

namespace DimitriLahaye\Model;

class Event extends Result
{
    
    /**
     * The title of the event.
     * @var string
     */
    public $title;
    
    /**
     * A description of the event.
     * @var string
     */
    public $description;
    
    /**
     * A set of public web site URLs for the event.
     * @var string[]
     */
     public $urls;
    
    /**
     * The date of publication of the first issue in this event.
     * @var Date
     */
    public $start;
    
    /**
     * The date of publication of the last issue in this event.
     * @var Date
     */
    public $end;
    
    /**
     * A resource list containing the comics in this event.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing the stories in this event.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list containing the series in this event.
     * @var List
     */
    public $series;
    
    /**
     * A resource list containing the characters which appear in this event.
     * @var List
     */
    public $characters;
    
    /**
     * A resource list containing creators whose work appears in this event.
     * @var List
     */
    public $creators;
    
    /**
     * A summary representation of the event which follows this event.
     * @var EventSummary
     */
    public $next;
    
    /**
     * A summary representation of the event which preceded this event
     * @var EventSummary
     */
    public $previous;
}