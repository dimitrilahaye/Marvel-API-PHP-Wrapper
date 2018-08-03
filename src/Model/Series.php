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
     * @var ComicsList
     */
    public $comics;
    
    /**
     * A resource list containing stories which occur in comics in this series.
     * @var StoriesList
     */
    public $stories;
    
    /**
     * A resource list containing events which take place in comics in this series.
     * @var EventsList
     */
    public $events;
    
    /**
     * A resource list containing characters which appear in comics in this series.
     * @var CharactersList
     */
    public $characters;
    
    /**
     * A resource list of creators whose work appears in comics in this series.
     * @var CreatorsList
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

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return int
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param int $startYear
     *
     * @return self
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * @param int $endYear
     *
     * @return self
     */
    public function setEndYear($endYear)
    {
        $this->endYear = $endYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

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
     * @return DimitriLahaye\Model\List 
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
     * @return DimitriLahaye\Model\List 
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
     * @return DimitriLahaye\Model\List 
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param CharactersList $characters
     *
     * @return self
     */
    public function setCharacters(CharactersList $characters)
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\List 
     */
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * @param CreatorsList $creators
     *
     * @return self
     */
    public function setCreators(CreatorsList $creators)
    {
        $this->creators = $creators;

        return $this;
    }

    /**
     * @return SeriesSummary
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param SeriesSummary $next
     *
     * @return self
     */
    public function setNext(SeriesSummary $next = null)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return SeriesSummary
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param SeriesSummary $previous
     *
     * @return self
     */
    public function setPrevious(SeriesSummary $previous = null)
    {
        $this->previous = $previous;

        return $this;
    }
}