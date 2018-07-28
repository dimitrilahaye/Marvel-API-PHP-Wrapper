<?php

namespace DimitriLahaye\Model;

class TextObject
{
    /**
     * The canonical type of the text object (e.g. solicit text, preview text, etc.).
     * @var string
     */
    public $type;
    
    /**
     * The IETF language tag denoting the language the text object is written in.
     * @var string
     */
    public $language;
    
    /**
     * The text
     * @var string
     */
    public $text;
}