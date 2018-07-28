<?php

namespace DimitriLahaye\Model;

class Series extends Result
{
    
    /**
     * The canonical title of the series.
     * @var string
     */
    public $title;
    
    /**
     * A description of the series.
     * @var string
     */
    public $description;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     public $urls;
    
    /**
     * The first year of publication for the series.
     * @var int
     */
    public $startYear;
    
    /**
     * The last year of publication for the series (conventionally, 2099 for ongoing series) .
     * @var int
     */
    public $endYear;
    
    /**
     * The age-appropriateness rating for the series.
     * @var string
     */
    public $rating;
    
    /**
     * A resource list containing comics in this series.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing stories which occur in comics in this series.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list containing events which take place in comics in this series.
     * @var List
     */
    public $events;
    
    /**
     * A resource list containing characters which appear in comics in this series.
     * @var List
     */
    public $characters;
    
    /**
     * A resource list of creators whose work appears in comics in this series.
     * @var List
     */
    public $creators;
    
    /**
     * A summary representation of the series which follows this series.
     * @var SeriesSummary
     */
    public $next;
    
    /**
     * A summary representation of the series which preceded this series
     * @var SeriesSummary
     */
    public $previous;
}