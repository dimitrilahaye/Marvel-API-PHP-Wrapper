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
     * @var List
     */
    public $comics;
    
    /**
     * A resource list of stories in which this character appears.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list of events in which this character appears.
     * @var List
     */
    public $events;
    
    /**
     * A resource list of series in which this character appears
     * @var List
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
    public function setUrls(string[] $urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * @return List
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param List $comics
     *
     * @return self
     */
    public function setComics(List $comics)
    {
        $this->comics = $comics;

        return $this;
    }

    /**
     * @return List
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param List $stories
     *
     * @return self
     */
    public function setStories(List $stories)
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * @return List
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param List $events
     *
     * @return self
     */
    public function setEvents(List $events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return List
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param List $series
     *
     * @return self
     */
    public function setSeries(List $series)
    {
        $this->series = $series;

        return $this;
    }
}