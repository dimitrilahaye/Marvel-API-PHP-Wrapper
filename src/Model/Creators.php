<?php

namespace DimitriLahaye\Model;

class Creators extends Result
{
    
    /**
     * The first name of the creator.
     * @var string
     */
    protected $_firstName;
    
    /**
     * The middle name of the creator.
     * @var string
     */
    protected $_middleName;
    
    /**
     * The last name of the creator.
     * @var string
     */
    protected $_lastName;
    
    /**
     * The suffix or honorific for the creator.
     * @var string
     */
    protected $_suffix;
    
    /**
     * The full name of the creator (a space-separated concatenation of the above four fields).
     * @var string
     */
    protected $_fullName;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     protected $_urls;
    
    /**
     * A resource list containing the series which feature work by this creator.
     * @var SeriesList
     */
    protected $_series;
    
    /**
     * A resource list containing the stories which feature work by this creator.
     * @var StoriesList
     */
    protected $_stories;
    
    /**
     * A resource list containing the comics which feature work by this creator.
     * @var ComicsList
     */
    protected $_comics;
    
    /**
     * A resource list containing the events which feature work by this creator
     * @var EventsList
     */
    protected $_events;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->_middleName;
    }

    /**
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->_middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->_lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->_suffix;
    }

    /**
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->_suffix = $suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->_fullName;
    }

    /**
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->_fullName = $fullName;

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
     * @return SeriesList 
     */
    public function getSeries()
    {
        return $this->_series;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $series
     *
     * @return self
     */
    public function setSeries(SeriesList $series)
    {
        $this->_series = $series;

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
     * @param DimitriLahaye\Model\MarvelList $stories
     *
     * @return self
     */
    public function setStories(StoriesList $stories)
    {
        $this->_stories = $stories;

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
     * @param DimitriLahaye\Model\MarvelList $comics
     *
     * @return self
     */
    public function setComics(ComicsList $comics)
    {
        $this->_comics = $comics;

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
     * @param DimitriLahaye\Model\MarvelList $events
     *
     * @return self
     */
    public function setEvents(EventsList $events)
    {
        $this->_events = $events;

        return $this;
    }
}