<?php

namespace DimitriLahaye\Model;

class Characters extends Result
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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param string[] $urls
     *
     * @return self
     */
    public function setUrls(array $urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\List 
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $comics
     *
     * @return self
     */
    public function setComics(DimitriLahaye\Model\MarvelList $comics)
    {
        $this->comics = $comics;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\List 
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $stories
     *
     * @return self
     */
    public function setStories(DimitriLahaye\Model\MarvelList $stories)
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\List 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $events
     *
     * @return self
     */
    public function setEvents(DimitriLahaye\Model\MarvelList $events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\List 
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $series
     *
     * @return self
     */
    public function setSeries(DimitriLahaye\Model\MarvelList $series)
    {
        $this->series = $series;

        return $this;
    }
}