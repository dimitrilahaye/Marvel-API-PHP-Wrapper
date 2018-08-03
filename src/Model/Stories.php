<?php

namespace DimitriLahaye\Model;

class Stories extends Result
{
    
    /**
     * The story title.
     * @var string
     */
    protected $_title;
    
    /**
     * A short description of the story.
     * @var string
     */
    protected $_description;
    
    /**
     * The story type e.g. interior story, cover, text story.
     * @var string
     */
    protected $_type;
    
    /**
     * A resource list containing comics in which this story takes place.
     * @var ComicsList
     */
    protected $_comics;
    
    /**
     * A resource list containing series in which this story appears.
     * @var SeriesList
     */
    protected $_series;
    
    /**
     * A resource list of the events in which this story appears.
     * @var EventsList
     */
    protected $_events;
    
    /**
     * A resource list of characters which appear in this story.
     * @var CharactersList
     */
    protected $_characters;
    
    /**
     * A resource list of creators who worked on this story.
     * @var CreatorsList
     */
    protected $_creators;
    
    /**
     * A summary representation of the issue in which this story was originally published
     * @var ComicsSummary
     */
    protected $_originalIssue;

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
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->_type = $type;

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
    public function setCharacters(CharactersList $characters)
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
    public function setCreators(CreatorsList $creators)
    {
        $this->_creators = $creators;

        return $this;
    }

    /**
     * @return ComicsSummary
     */
    public function getOriginalissue()
    {
        return $this->_originalIssue;
    }

    /**
     * @param ComicsSummary $originalIssue
     *
     * @return self
     */
    public function setOriginalissue(ComicsSummary $originalIssue)
    {
        $this->_originalIssue = $originalIssue;

        return $this;
    }
}