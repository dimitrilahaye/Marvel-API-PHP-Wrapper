<?php

namespace DimitriLahaye\Model;

class ComicDate
{
    /**
     * A description of the date (e.g. onsale date, FOC date).
     * @var string
     */
    public $type;
    
    /**
     * The date
     * @var Date
     */
    public $date;
}