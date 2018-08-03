<?php

namespace DimitriLahaye\Model;

class ComicsDate
{
    /**
     * A description of the date (e.g. onsale date, FOC date).
     * @var string
     */
    protected $_type;
    
    /**
     * The date
     * @var string
     */
    protected $_date;

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
     * @return string
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date)
    {
        $this->_date = $date;

        return $this;
    }
}