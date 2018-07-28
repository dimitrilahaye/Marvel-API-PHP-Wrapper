<?php

namespace DimitriLahaye\Model;

class Story extends Result
{
    
    /**
     * The story title.
     * @var string
     */
    public $title;
    
    /**
     * A short description of the story.
     * @var string
     */
    public $description;
    
    /**
     * The story type e.g. interior story, cover, text story.
     * @var string
     */
    public $type;
    
    /**
     * A resource list containing comics in which this story takes place.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing series in which this story appears.
     * @var List
     */
    public $series;
    
    /**
     * A resource list of the events in which this story appears.
     * @var List
     */
    public $events;
    
    /**
     * A resource list of characters which appear in this story.
     * @var List
     */
    public $characters;
    
    /**
     * A resource list of creators who worked on this story.
     * @var List
     */
    public $creators;
    
    /**
     * A summary representation of the issue in which this story was originally published
     * @var ComicSummary
     */
    public $originalissue;
}