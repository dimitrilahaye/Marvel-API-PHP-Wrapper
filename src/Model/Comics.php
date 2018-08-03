<?php

namespace DimitriLahaye\Model;

class Comics extends Result
{
    
    /**
     * The ID of the digital comic representation of this comic. Will be 0 if the comic is not available digitally.
     * @var int
     */
    protected $_digitalId;
    
    /**
     * The canonical title of the comic.
     * @var string
     */
    protected $_title;
    
    /**
     * The number of the issue in the series (will generally be 0 for collection formats).
     * @var double
     */
    protected $_issueNumber;
    
    /**
     * If the issue is a variant (e.g. an alternate cover, second printing, or director’s cut), a text description of the variant.
     * @var string
     */
    protected $_variantDescription;
    
    /**
     * The preferred description of the comic.
     * @var string
     */
    protected $_description;
    
    /**
     * The ISBN for the comic (generally only populated for collection formats).
     * @var string
     */
    protected $_isbn;
    
    /**
     * The UPC barcode number for the comic (generally only populated for periodical formats).
     * @var string
     */
    protected $_upc;
    
    /**
     * The Diamond code for the comic.
     * @var string
     */
    protected $_diamondCode;
    
    /**
     * The EAN barcode for the comic.
     * @var string
     */
    protected $_ean;
    
    /**
     * The ISSN barcode for the comic.
     * @var string
     */
    protected $_issn;
    
    /**
     * The publication format of the comic e.g. comic, hardcover, trade paperback.
     * @var string
     */
    protected $_format;
    
    /**
     * The number of story pages in the comic.
     * @var int
     */
    protected $_pageCount;
    
    /**
     * A set of descriptive text blurbs for the comic.
     * @var TextObject[]
     */
     protected $_textObjects;
    
    /**
     * A set of public web site URLs for the resource.
     * @var string[]
     */
     protected $_urls;
    
    /**
     * A summary representation of the series to which this comic belongs.
     * @var SeriesSummary
     */
    protected $_series;
    
    /**
     * A list of variant issues for this comic (includes the "original" issue if the current issue is a variant).
     * @var ComicsSummary[]
     */
     protected $_variants;
    
    /**
     * A list of collections which include this comic (will generally be empty if the comic's format is a collection).
     * @var ComicsSummary[]
     */
     protected $_collections;
    
    /**
     * A list of issues collected in this comic (will generally be empty for periodical formats such as "comic" or "magazine").
     * @var ComicsSummary[]
     */
     protected $_collectedIssues;
    
    /**
     * A list of key dates for this comic.
     * @var ComicDate[]
     */
     protected $_dates;
    
    /**
     * A list of prices for this comic.
     * @var ComicPrice[]
     */
     protected $_prices;
    
    /**
     * A list of promotional images associated with this comic.
     * @var Image[]
     */
     protected $_images;
    
    /**
     * A resource list containing the creators associated with this comic.
     * @var CreatorsList
     */
    protected $_creators;
    
    /**
     * A resource list containing the characters which appear in this comic.
     * @var CharactersList
     */
    protected $_characters;
    
    /**
     * A resource list containing the stories which appear in this comic.
     * @var StoriesList
     */
    protected $_stories;
    
    /**
     * A resource list containing the events in which this comic appears
     * @var EventsList
     */
    protected $_events;

    /**
     * @return int
     */
    public function getDigitalId()
    {
        return $this->_digitalId;
    }

    /**
     * @param int $digitalId
     *
     * @return self
     */
    public function setDigitalId($digitalId)
    {
        $this->_digitalId = $digitalId;

        return $this;
    }

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
     * @return double
     */
    public function getIssueNumber()
    {
        return $this->_issueNumber;
    }

    /**
     * @param double $issueNumber
     *
     * @return self
     */
    public function setIssueNumber($issueNumber)
    {
        $this->_issueNumber = $issueNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getVariantDescription()
    {
        return $this->_variantDescription;
    }

    /**
     * @param string $variantDescription
     *
     * @return self
     */
    public function setVariantDescription($variantDescription)
    {
        $this->_variantDescription = $variantDescription;

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
    public function getIsbn()
    {
        return $this->_isbn;
    }

    /**
     * @param string $isbn
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->_isbn = $isbn;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpc()
    {
        return $this->_upc;
    }

    /**
     * @param string $upc
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->_upc = $upc;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiamondCode()
    {
        return $this->_diamondCode;
    }

    /**
     * @param string $diamondCode
     *
     * @return self
     */
    public function setDiamondCode($diamondCode)
    {
        $this->_diamondCode = $diamondCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->_ean;
    }

    /**
     * @param string $ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->_ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->_issn;
    }

    /**
     * @param string $issn
     *
     * @return self
     */
    public function setIssn($issn)
    {
        $this->_issn = $issn;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->_format;
    }

    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->_format = $format;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->_pageCount;
    }

    /**
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount($pageCount)
    {
        $this->_pageCount = $pageCount;

        return $this;
    }

    /**
     * @return TextObject[]
     */
    public function getTextObjects()
    {
        return $this->_textObjects;
    }

    /**
     * @param TextObject[] $textObjects
     *
     * @return self
     */
    public function setTextObjects(array $textObjects)
    {
        $this->_textObjects = $textObjects;

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
     * @return SeriesList
     */
    public function getSeries()
    {
        return $this->_series;
    }

    /**
     * @param SeriesSummary $series
     *
     * @return self
     */
    public function setSeries(SeriesSummary $series)
    {
        $this->_series = $series;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getVariants()
    {
        return $this->_variants;
    }

    /**
     * @param ComicsSummary[] $variants
     *
     * @return self
     */
    public function setVariants(array $variants)
    {
        $this->_variants = $variants;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getCollections()
    {
        return $this->_collections;
    }

    /**
     * @param ComicsSummary[] $collections
     *
     * @return self
     */
    public function setCollections(array $collections)
    {
        $this->_collections = $collections;

        return $this;
    }

    /**
     * @return ComicsSummary[]
     */
    public function getCollectedIssues()
    {
        return $this->_collectedIssues;
    }

    /**
     * @param ComicsSummary[] $collectedIssues
     *
     * @return self
     */
    public function setCollectedIssues(array $collectedIssues)
    {
        $this->_collectedIssues = $collectedIssues;

        return $this;
    }

    /**
     * @return ComicDate[]
     */
    public function getDates()
    {
        return $this->_dates;
    }

    /**
     * @param ComicDate[] $dates
     *
     * @return self
     */
    public function setDates(array $dates)
    {
        $this->_dates = $dates;

        return $this;
    }

    /**
     * @return ComicPrice[]
     */
    public function getPrices()
    {
        return $this->_prices;
    }

    /**
     * @param ComicPrice[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->_prices = $prices;

        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->_images;
    }

    /**
     * @param Image[] $images
     *
     * @return self
     */
    public function setImages(array $images)
    {
        $this->_images = $images;

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
}