<?php

namespace DimitriLahaye\Model;

class Comics extends Result
{
    
    /**
     * The ID of the digital comic representation of this comic. Will be 0 if the comic is not available digitally.
     * @var int
     */
    public $digitalId;
    
    /**
     * The canonical title of the comic.
     * @var string
     */
    public $title;
    
    /**
     * The number of the issue in the series (will generally be 0 for collection formats).
     * @var double
     */
    public $issueNumber;
    
    /**
     * If the issue is a variant (e.g. an alternate cover, second printing, or director’s cut), a text description of the variant.
     * @var string
     */
    public $variantDescription;
    
    /**
     * The preferred description of the comic.
     * @var string
     */
    public $description;
    
    /**
     * The ISBN for the comic (generally only populated for collection formats).
     * @var string
     */
    public $isbn;
    
    /**
     * The UPC barcode number for the comic (generally only populated for periodical formats).
     * @var string
     */
    public $upc;
    
    /**
     * The Diamond code for the comic.
     * @var string
     */
    public $diamondCode;
    
    /**
     * The EAN barcode for the comic.
     * @var string
     */
    public $ean;
    
    /**
     * The ISSN barcode for the comic.
     * @var string
     */
    public $issn;
    
    /**
     * The publication format of the comic e.g. comic, hardcover, trade paperback.
     * @var string
     */
    public $format;
    
    /**
     * The number of story pages in the comic.
     * @var int
     */
    public $pageCount;
    
    /**
     * A set of descriptive text blurbs for the comic.
     * @var TextObject[]
     */
     public $textObjects;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     public $urls;
    
    /**
     * A summary representation of the series to which this comic belongs.
     * @var SeriesSummary
     */
    public $series;
    
    /**
     * A list of variant issues for this comic (includes the "original" issue if the current issue is a variant).
     * @var ComicsSummary[]
     */
     public $variants;
    
    /**
     * A list of collections which include this comic (will generally be empty if the comic's format is a collection).
     * @var ComicsSummary[]
     */
     public $collections;
    
    /**
     * A list of issues collected in this comic (will generally be empty for periodical formats such as "comic" or "magazine").
     * @var ComicsSummary[]
     */
     public $collectedIssues;
    
    /**
     * A list of key dates for this comic.
     * @var ComicDate[]
     */
     public $dates;
    
    /**
     * A list of prices for this comic.
     * @var ComicPrice[]
     */
     public $prices;
    
    /**
     * A list of promotional images associated with this comic.
     * @var Image[]
     */
     public $images;
    
    /**
     * A resource list containing the creators associated with this comic.
     * @var CreatorsList
     */
    public $creators;
    
    /**
     * A resource list containing the characters which appear in this comic.
     * @var CharactersList
     */
    public $characters;
    
    /**
     * A resource list containing the stories which appear in this comic.
     * @var StoriesList
     */
    public $stories;
    
    /**
     * A resource list containing the events in which this comic appears
     * @var EventsList
     */
    public $events;

    /**
     * @return int
     */
    public function getDigitalId()
    {
        return $this->digitalId;
    }

    /**
     * @param int $digitalId
     *
     * @return self
     */
    public function setDigitalId($digitalId)
    {
        $this->digitalId = $digitalId;

        return $this;
    }

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
     * @return double
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param double $issueNumber
     *
     * @return self
     */
    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getVariantDescription()
    {
        return $this->variantDescription;
    }

    /**
     * @param string $variantDescription
     *
     * @return self
     */
    public function setVariantDescription($variantDescription)
    {
        $this->variantDescription = $variantDescription;

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
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiamondCode()
    {
        return $this->diamondCode;
    }

    /**
     * @param string $diamondCode
     *
     * @return self
     */
    public function setDiamondCode($diamondCode)
    {
        $this->diamondCode = $diamondCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     *
     * @return self
     */
    public function setIssn($issn)
    {
        $this->issn = $issn;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * @return TextObject[]
     */
    public function getTextObjects()
    {
        return $this->textObjects;
    }

    /**
     * @param TextObject[] $textObjects
     *
     * @return self
     */
    public function setTextObjects(array $textObjects)
    {
        $this->textObjects = $textObjects;

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
     * @return SeriesList
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param SeriesSummary $series
     *
     * @return self
     */
    public function setSeries(SeriesSummary $series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param ComicsSummary[] $variants
     *
     * @return self
     */
    public function setVariants(array $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * @param ComicsSummary[] $collections
     *
     * @return self
     */
    public function setCollections(array $collections)
    {
        $this->collections = $collections;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getCollectedIssues()
    {
        return $this->collectedIssues;
    }

    /**
     * @param ComicsSummary[] $collectedIssues
     *
     * @return self
     */
    public function setCollectedIssues(array $collectedIssues)
    {
        $this->collectedIssues = $collectedIssues;

        return $this;
    }

    /**
     * @return ComicDate[]
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param ComicDate[] $dates
     *
     * @return self
     */
    public function setDates(array $dates)
    {
        $this->dates = $dates;

        return $this;
    }

    /**
     * @return ComicPrice[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param ComicPrice[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image[] $images
     *
     * @return self
     */
    public function setImages(array $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return DimitriLahaye\Model\CreatorsList 
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
     * @return DimitriLahaye\Model\CharactersList 
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
     * @return DimitriLahaye\Model\StoriesList 
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
     * @return DimitriLahaye\Model\EventsList 
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
}