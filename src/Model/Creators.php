<?php

namespace DimitriLahaye\Model;

class Creators extends Result
{
    
    /**
     * The first name of the creator.
     * @var string
     */
    public $firstName;
    
    /**
     * The middle name of the creator.
     * @var string
     */
    public $middleName;
    
    /**
     * The last name of the creator.
     * @var string
     */
    public $lastName;
    
    /**
     * The suffix or honorific for the creator.
     * @var string
     */
    public $suffix;
    
    /**
     * The full name of the creator (a space-separated concatenation of the above four fields).
     * @var string
     */
    public $fullName;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     public $urls;
    
    /**
     * A resource list containing the series which feature work by this creator.
     * @var List
     */
    public $series;
    
    /**
     * A resource list containing the stories which feature work by this creator.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list containing the comics which feature work by this creator.
     * @var List
     */
    public $comics;
    
    /**
     * A resource list containing the events which feature work by this creator
     * @var List
     */
    public $events;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

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
}