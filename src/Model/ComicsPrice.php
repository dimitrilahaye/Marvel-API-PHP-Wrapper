<?php

namespace DimitriLahaye\Model;

class ComicsPrice
{
    /**
     * A description of the price (e.g. print price, digital price).
     * @var string
     */
    protected $_type;
    
    /**
     * The price (all prices in USD)
     * @var float
     */
    protected $_price;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->_price = $price;

        return $this;
    }
}