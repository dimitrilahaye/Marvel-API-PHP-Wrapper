<?php

namespace DimitriLahaye\Model;

class Characters extends Result
{
    /**
     * The name of the character.
     * @var string
     */
    protected $_name;
    
    /**
     * A short bio or description of the character.
     * @var string
     */
    protected $_description;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     protected $_urls;
    
    /**
     * A resource list containing comics which feature this character.
     * @var ComicsList
     */
    protected $_comics;
    
    /**
     * A resource list of stories in which this character appears.
     * @var StoriesList
     */
    protected $_stories;
    
    /**
     * A resource list of events in which this character appears.
     * @var EventsList
     */
    protected $_events;
    
    /**
     * A resource list of series in which this character appears
     * @var SeriesList
     */
    protected $_series;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getUrls()
    {
        return $this->_urls;
    }

    /**
     * @param string[] $urls
     *
     * @return self
     */
    public function setUrls(array $urls)
    {
        $this->_urls = $urls;

        return $this;
    }

    /**
     * @return ComicsList 
     */
    public function getComics()
    {
        return $this->_comics;
    }

    /**
     * @param ComicsList $comics
     *
     * @return self
     */
    public function setComics(ComicsList $comics)
    {
        $this->_comics = $comics;

        return $this;
    }

    /**
     * @return StoriesList 
     */
    public function getStories()
    {
        return $this->_stories;
    }

    /**
     * @param StoriesList $stories
     *
     * @return self
     */
    public function setStories(StoriesList $stories)
    {
        $this->_stories = $stories;

        return $this;
    }

    /**
     * @return EventsList 
     */
    public function getEvents()
    {
        return $this->_events;
    }

    /**
     * @param EventsList $events
     *
     * @return self
     */
    public function setEvents(EventsList $events)
    {
        $this->_events = $events;

        return $this;
    }

    /**
     * @return SeriesList 
     */
    public function getSeries()
    {
        return $this->_series;
    }

    /**
     * @param SeriesList $series
     *
     * @return self
     */
    public function setSeries(SeriesList $series)
    {
        $this->_series = $series;

        return $this;
    }
}