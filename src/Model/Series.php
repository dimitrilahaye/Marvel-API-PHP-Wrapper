<?php

namespace DimitriLahaye\Model;

class Series extends Result
{
    
    /**
     * The canonical title of the series.
     * @var string
     */
    protected $_title;
    
    /**
     * A description of the series.
     * @var string
     */
    protected $_description;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     protected $_urls;
    
    /**
     * The first year of publication for the series.
     * @var int
     */
    protected $_startYear;
    
    /**
     * The last year of publication for the series (conventionally, 2099 for ongoing series) .
     * @var int
     */
    protected $_endYear;
    
    /**
     * The age-appropriateness rating for the series.
     * @var string
     */
    protected $_rating;
    
    /**
     * A resource list containing comics in this series.
     * @var ComicsList
     */
    protected $_comics;
    
    /**
     * A resource list containing stories which occur in comics in this series.
     * @var StoriesList
     */
    protected $_stories;
    
    /**
     * A resource list containing events which take place in comics in this series.
     * @var EventsList
     */
    protected $_events;
    
    /**
     * A resource list containing characters which appear in comics in this series.
     * @var CharactersList
     */
    protected $_characters;
    
    /**
     * A resource list of creators whose work appears in comics in this series.
     * @var CreatorsList
     */
    protected $_creators;
    
    /**
     * A summary representation of the series which follows this series.
     * @var SeriesSummary
     */
    protected $_next;
    
    /**
     * A summary representation of the series which preceded this series
     * @var SeriesSummary
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
    public function setTitle($title)
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
     * @return int
     */
    public function getStartYear()
    {
        return $this->_startYear;
    }

    /**
     * @param int $startYear
     *
     * @return self
     */
    public function setStartYear($startYear)
    {
        $this->_startYear = $startYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndYear()
    {
        return $this->_endYear;
    }

    /**
     * @param int $endYear
     *
     * @return self
     */
    public function setEndYear($endYear)
    {
        $this->_endYear = $endYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->_rating;
    }

    /**
     * @param string $rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        $this->_rating = $rating;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\ComicsList 
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
     * @return DimitriLahaye\Model\StoriesList 
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
     * @return DimitriLahaye\Model\EventsList 
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
     * @return DimitriLahaye\Model\CharactersList 
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
    public function setCharacters(CharactersList $characters)
    {
        $this->_characters = $characters;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\CreatorsList 
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
    public function setCreators(CreatorsList $creators)
    {
        $this->_creators = $creators;

        return $this;
    }

    /**
     * @return SeriesSummary
     */
    public function getNext()
    {
        return $this->_next;
    }

    /**
     * @param SeriesSummary $next
     *
     * @return self
     */
    public function setNext(SeriesSummary $next = null)
    {
        $this->_next = $next;

        return $this;
    }

    /**
     * @return SeriesSummary
     */
    public function getPrevious()
    {
        return $this->_previous;
    }

    /**
     * @param SeriesSummary $previous
     *
     * @return self
     */
    public function setPrevious(SeriesSummary $previous = null)
    {
        $this->_previous = $previous;

        return $this;
    }
}