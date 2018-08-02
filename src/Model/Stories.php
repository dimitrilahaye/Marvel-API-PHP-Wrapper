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
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing series in which this story appears.
     * @var List
     */
    public $series;
    
    /**
     * A resource list of the events in which this story appears.
     * @var List
     */
    public $events;
    
    /**
     * A resource list of characters which appear in this story.
     * @var List
     */
    public $characters;
    
    /**
     * A resource list of creators who worked on this story.
     * @var List
     */
    public $creators;
    
    /**
     * A summary representation of the issue in which this story was originally published
     * @var ComicSummary
     */
    public $originalissue;

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
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param DimitriLahaye\Model\MarvelList $characters
     *
     * @return self
     */
    public function setCharacters(DimitriLahaye\Model\MarvelList $characters)
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
     * @param DimitriLahaye\Model\MarvelList $creators
     *
     * @return self
     */
    public function setCreators(DimitriLahaye\Model\MarvelList $creators)
    {
        $this->creators = $creators;

        return $this;
    }

    /**
     * @return ComicSummary
     */
    public function getOriginalissue()
    {
        return $this->originalissue;
    }

    /**
     * @param ComicSummary $originalissue
     *
     * @return self
     */
    public function setOriginalissue(ComicSummary $originalissue)
    {
        $this->originalissue = $originalissue;

        return $this;
    }
}