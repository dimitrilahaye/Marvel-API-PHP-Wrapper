<?php

namespace DimitriLahaye\Model;

class Events extends Result
{
    
    /**
     * The title of the event.
     * @var string
     */
    protected $_title;
    
    /**
     * A description of the event.
     * @var string
     */
    protected $_description;
    
    /**
     * A set of public web site URLs for the event.
     * @var string[]
     */
     protected $_urls;
    
    /**
     * The date of publication of the first issue in this event.
     * @var string
     */
    protected $_start;
    
    /**
     * The date of publication of the last issue in this event.
     * @var string
     */
    protected $_end;
    
    /**
     * A resource list containing the comics in this event.
     * @var ComicsList
     */
    protected $_comics;
    
    /**
     * A resource list containing the stories in this event.
     * @var StoriesList
     */
    protected $_stories;
    
    /**
     * A resource list containing the series in this event.
     * @var SeriesList
     */
    protected $_series;
    
    /**
     * A resource list containing the characters which appear in this event.
     * @var CharactersList
     */
    protected $_characters;
    
    /**
     * A resource list containing creators whose work appears in this event.
     * @var CreatorsList
     */
    protected $_creators;
    
    /**
     * A summary representation of the event which follows this event.
     * @var EventsSummary
     */
    protected $_next;
    
    /**
     * A summary representation of the event which preceded this event
     * @var EventsSummary
     */
    protected $_previous;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->_title = $title;

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
    public function setDescription($description = null)
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
    public function setUrls(array $urls = null)
    {
        $this->_urls = $urls;

        return $this;
    }

    /**
     * @return string
     */
    public function getStart()
    {
        return $this->_start;
    }

    /**
     * @param string $start
     *
     * @return self
     */
    public function setStart(string $start = null)
    {
        $this->_start = $start;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
        return $this->_end;
    }

    /**
     * @param string $end
     *
     * @return self
     */
    public function setEnd(string $end = null)
    {
        $this->_end = $end;

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
    public function setComics(ComicsList $comics = null)
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
    public function setStories(StoriesList $stories = null)
    {
        $this->_stories = $stories;

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
    public function setSeries(SeriesList $series = null)
    {
        $this->_series = $series;

        return $this;
    }

    /**
     * @return CharactersList 
     */
    public function getCharacters()
    {
        return $this->_characters;
    }

    /**
     * @param CharactersList $characters
     *
     * @return self
     */
    public function setCharacters(CharactersList $characters = null)
    {
        $this->_characters = $characters;

        return $this;
    }

    /**
     * @return CreatorsList 
     */
    public function getCreators()
    {
        return $this->_creators;
    }

    /**
     * @param CreatorsList $creators
     *
     * @return self
     */
    public function setCreators(CreatorsList $creators = null)
    {
        $this->_creators = $creators;

        return $this;
    }

    /**
     * @return EventsSummary
     */
    public function getNext()
    {
        return $this->_next;
    }

    /**
     * @param EventsSummary $next
     *
     * @return self
     */
    public function setNext(EventsSummary $next = null)
    {
        $this->_next = $next;

        return $this;
    }

    /**
     * @return EventsSummary
     */
    public function getPrevious()
    {
        return $this->_previous;
    }

    /**
     * @param EventsSummary $previous
     *
     * @return self
     */
    public function setPrevious(EventsSummary $previous = null)
    {
        $this->_previous = $previous;

        return $this;
    }
}