<?php

namespace DimitriLahaye\Model;

class Comic extends Result
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
     * @var ComicSummary[]
     */
     public $variants;
    
    /**
     * A list of collections which include this comic (will generally be empty if the comic's format is a collection).
     * @var ComicSummary[]
     */
     public $collections;
    
    /**
     * A list of issues collected in this comic (will generally be empty for periodical formats such as "comic" or "magazine").
     * @var ComicSummary[]
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
     * @var List
     */
    public $creators;
    
    /**
     * A resource list containing the characters which appear in this comic.
     * @var List
     */
    public $characters;
    
    /**
     * A resource list containing the stories which appear in this comic.
     * @var List
     */
    public $stories;
    
    /**
     * A resource list containing the events in which this comic appears
     * @var List
     */
    public $events;
}