<?php

namespace DimitriLahaye\Model;

class ComicPrice
{
    /**
     * A description of the price (e.g. print price, digital price).
     * @var string
     */
    public $type;
    
    /**
     * The price (all prices in USD)
     * @var float
     */
    public $price;
}