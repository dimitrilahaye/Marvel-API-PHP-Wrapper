<?php

namespace DimitriLahaye\Model;

class DataWrapper
{
    /**
     * The HTTP status code of the returned result.
     * @var int
     */
    public $code;
    
    /**
     * A string description of the call status.
     * @var string
     */
    public $status;
    
    /**
     * The copyright notice for the returned result.
     * @var string
     */
    public $copyright;
    
    /**
     * The attribution notice for this result. Please display either this notice or the contents of the attributionHTML field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    public $attributionText;
    
    /**
     * An HTML representation of the attribution notice for this result. Please display either this notice or the contents of the attributionText field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    public $attributionHTML;
    
    /**
     * The results returned by the call.
     * @var DataContainer
     */
    public $data;
    
    /**
     * A digest value of the content returned by the call
     * @var string
     */
    public $etag;
}