<?php

namespace DimitriLahaye\Model;

class Events extends Result
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
     * @var string
     */
    public $start;
    
    /**
     * The date of publication of the last issue in this event.
     * @var string
     */
    public $end;
    
    /**
     * A resource list containing the comics in this event.
     * @var ComicsList
     */
    public $comics;
    
    /**
     * A resource list containing the stories in this event.
     * @var StoriesList
     */
    public $stories;
    
    /**
     * A resource list containing the series in this event.
     * @var SeriesList
     */
    public $series;
    
    /**
     * A resource list containing the characters which appear in this event.
     * @var CharactersList
     */
    public $characters;
    
    /**
     * A resource list containing creators whose work appears in this event.
     * @var CreatorsList
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
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $start
     *
     * @return self
     */
    public function setStart(string $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param string $end
     *
     * @return self
     */
    public function setEnd(string $end)
    {
        $this->end = $end;

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

    /**
     * @return CharactersList 
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
     * @return CreatorsList 
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
     * @return EventSummary
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param EventSummary $next
     *
     * @return self
     */
    public function setNext(EventSummary $next = null)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return EventSummary
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param EventSummary $previous
     *
     * @return self
     */
    public function setPrevious(EventSummary $previous = null)
    {
        $this->previous = $previous;

        return $this;
    }
}