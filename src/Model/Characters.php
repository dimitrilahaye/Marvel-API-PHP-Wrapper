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
     * @var ComicsList
     */
    public $comics;
    
    /**
     * A resource list of stories in which this character appears.
     * @var StoriesList
     */
    public $stories;
    
    /**
     * A resource list of events in which this character appears.
     * @var EventsList
     */
    public $events;
    
    /**
     * A resource list of series in which this character appears
     * @var SeriesList
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
     * @return ComicsList 
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param ComicsList $comics
     *
     * @return self
     */
    public function setComics(ComicsList $comics)
    {
        $this->comics = $comics;

        return $this;
    }

    /**
     * @return StoriesList 
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param StoriesList $stories
     *
     * @return self
     */
    public function setStories(StoriesList $stories)
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * @return EventsList 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param EventsList $events
     *
     * @return self
     */
    public function setEvents(EventsList $events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return SeriesList 
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param SeriesList $series
     *
     * @return self
     */
    public function setSeries(SeriesList $series)
    {
        $this->series = $series;

        return $this;
    }
}