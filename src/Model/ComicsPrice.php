<?php

namespace DimitriLahaye\Model;

class ComicsPrice
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

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}