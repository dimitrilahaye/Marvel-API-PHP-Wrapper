<?php

namespace DimitriLahaye\Model;

class Url
{
    /**
     * A text identifier for the URL.
     * @var string
     */
    public $type;
    
    /**
     * A full URL (including scheme, domain, and path)
     * @var string
     */
    public $url;
}