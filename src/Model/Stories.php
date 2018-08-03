<?php

namespace DimitriLahaye\Model;

class Stories extends Result
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
     * @var ComicsList
     */
    public $comics;
    
    /**
     * A resource list containing series in which this story appears.
     * @var SeriesList
     */
    public $series;
    
    /**
     * A resource list of the events in which this story appears.
     * @var EventsList
     */
    public $events;
    
    /**
     * A resource list of characters which appear in this story.
     * @var CharactersList
     */
    public $characters;
    
    /**
     * A resource list of creators who worked on this story.
     * @var CreatorsList
     */
    public $creators;
    
    /**
     * A summary representation of the issue in which this story was originally published
     * @var ComicsSummary
     */
    public $originalIssue;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return ComicsSummary
     */
    public function getOriginalissue()
    {
        return $this->originalIssue;
    }

    /**
     * @param ComicsSummary $originalIssue
     *
     * @return self
     */
    public function setOriginalissue(ComicsSummary $originalIssue)
    {
        $this->originalIssue = $originalIssue;

        return $this;
    }
}